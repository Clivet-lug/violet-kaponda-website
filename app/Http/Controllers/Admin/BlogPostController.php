<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        $query = BlogPost::with('categories')->latest('created_at');

        // Search functionality
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('content', 'like', '%' . $request->search . '%');
        }

        // Filter by status
        if ($request->filled('status')) {
            if ($request->status === 'published') {
                $query->where('is_published', true);
            } elseif ($request->status === 'draft') {
                $query->where('is_published', false);
            }
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('blog_categories.id', $request->category);
            });
        }

        $posts = $query->paginate(15);
        $categories = BlogCategory::active()->orderBy('name')->get();

        return view('admin.blog.posts.index', compact('posts', 'categories'));
    }

    public function create()
    {
        $categories = BlogCategory::active()->orderBy('name')->get();
        return view('admin.blog.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'seo_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'tags' => 'nullable|string',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:blog_categories,id'
        ]);

        // Handle slug generation
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')
                ->store('blog/images', 'public');
        }

        // Handle tags (convert comma-separated string to array)
        if (!empty($validated['tags'])) {
            $validated['tags'] = array_map('trim', explode(',', $validated['tags']));
        }

        // Set published_at if publishing
        if ($validated['is_published'] && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $post = BlogPost::create($validated);

        // Attach categories
        if (!empty($validated['categories'])) {
            $post->categories()->attach($validated['categories']);
        }

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Blog post created successfully!');
    }

    public function show(BlogPost $post)
    {
        return view('admin.blog.posts.show', compact('post'));
    }

    public function edit(BlogPost $post)
    {
        $categories = BlogCategory::active()->orderBy('name')->get();
        $post->load('categories');
        return view('admin.blog.posts.edit', compact('post', 'categories'));
    }
    public function update(Request $request, BlogPost $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug,' . $post->id,
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'seo_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'tags' => 'nullable|string',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:blog_categories,id'
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')
                ->store('blog/images', 'public');
        }

        // Handle tags
        if (!empty($validated['tags'])) {
            $validated['tags'] = array_map('trim', explode(',', $validated['tags']));
        }

        // Set published_at if publishing for first time
        if ($validated['is_published'] && !$post->is_published && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $post->update($validated);

        // Sync categories
        if (isset($validated['categories'])) {
            $post->categories()->sync($validated['categories']);
        } else {
            $post->categories()->detach();
        }

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Blog post updated successfully!');
    }

    public function destroy(BlogPost $post)
    {
        // Delete featured image
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }

        $post->delete();

        return redirect()->route('admin.blog.posts.index')
            ->with('success', 'Blog post deleted successfully!');
    }

    public function bulkAction(Request $request)
    {
        $request->validate([
            'action' => 'required|in:publish,unpublish,delete',
            'posts' => 'required|array',
            'posts.*' => 'exists:blog_posts,id'
        ]);

        $posts = BlogPost::whereIn('id', $request->posts);

        switch ($request->action) {
            case 'publish':
                $posts->update([
                    'is_published' => true,
                    'published_at' => now()
                ]);
                $message = 'Posts published successfully!';
                break;

            case 'unpublish':
                $posts->update(['is_published' => false]);
                $message = 'Posts unpublished successfully!';
                break;

            case 'delete':
                foreach ($posts->get() as $post) {
                    if ($post->featured_image) {
                        Storage::disk('public')->delete($post->featured_image);
                    }
                }
                $posts->delete();
                $message = 'Posts deleted successfully!';
                break;
        }

        return redirect()->route('admin.blog.posts.index')->with('success', $message);
    }
}
