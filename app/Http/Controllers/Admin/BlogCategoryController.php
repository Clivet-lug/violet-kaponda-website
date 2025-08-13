<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::withCount('posts')
            ->orderBy('name')
            ->paginate(20);

        return view('admin.blog.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.blog.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
            'slug' => 'nullable|string|max:255|unique:blog_categories,slug',
            'description' => 'nullable|string|max:500',
            'color' => 'required|string|regex:/^#[0-9A-Fa-f]{6}$/',
            'is_active' => 'boolean'
        ]);

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        BlogCategory::create($validated);

        return redirect()->route('admin.blog.categories.index')
            ->with('success', 'Category created successfully!');
    }

    public function show(BlogCategory $category)
    {
        $category->load(['posts' => function ($query) {
            $query->latest('created_at')->limit(10);
        }]);

        return view('admin.blog.categories.show', compact('category'));
    }

    public function edit(BlogCategory $category)
    {
        return view('admin.blog.categories.edit', compact('category'));
    }

    public function update(Request $request, BlogCategory $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,' . $category->id,
            'slug' => 'nullable|string|max:255|unique:blog_categories,slug,' . $category->id,
            'description' => 'nullable|string|max:500',
            'color' => 'required|string|regex:/^#[0-9A-Fa-f]{6}$/',
            'is_active' => 'boolean'
        ]);

        // Auto-generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $category->update($validated);

        return redirect()->route('admin.blog.categories.index')
            ->with('success', 'Category updated successfully!');
    }

    public function destroy(BlogCategory $category)
    {
        // Check if category has posts
        if ($category->posts()->count() > 0) {
            return redirect()->route('admin.blog.categories.index')
                ->with('error', 'Cannot delete category that has posts. Please move or delete the posts first.');
        }

        $category->delete();

        return redirect()->route('admin.blog.categories.index')
            ->with('success', 'Category deleted successfully!');
    }

    public function bulkAction(Request $request)
    {
        $request->validate([
            'action' => 'required|in:activate,deactivate,delete',
            'categories' => 'required|array',
            'categories.*' => 'exists:blog_categories,id'
        ]);

        $categories = BlogCategory::whereIn('id', $request->categories);

        switch ($request->action) {
            case 'activate':
                $categories->update(['is_active' => true]);
                $message = 'Categories activated successfully!';
                break;

            case 'deactivate':
                $categories->update(['is_active' => false]);
                $message = 'Categories deactivated successfully!';
                break;

            case 'delete':
                // Check if any category has posts
                $categoriesWithPosts = $categories->withCount('posts')->get()
                    ->filter(function ($category) {
                        return $category->posts_count > 0;
                    });

                if ($categoriesWithPosts->count() > 0) {
                    return redirect()->route('admin.blog.categories.index')
                        ->with('error', 'Cannot delete categories that have posts.');
                }

                $categories->delete();
                $message = 'Categories deleted successfully!';
                break;
        }

        return redirect()->route('admin.blog.categories.index')->with('success', $message);
    }
}
