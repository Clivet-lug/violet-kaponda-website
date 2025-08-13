<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = BlogPost::with('categories')->published()->latest('published_at');

        // Search functionality
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('excerpt', 'like', '%' . $request->search . '%')
                    ->orWhere('content', 'like', '%' . $request->search . '%');
            });
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Filter by tag
        if ($request->filled('tag')) {
            $query->where('tags', 'like', '%"' . $request->tag . '"%');
        }

        $posts = $query->paginate(12);

        // Get categories for filter dropdown
        // Get categories for filter dropdown
        $categories = BlogCategory::active()
            ->orderBy('name')
            ->get();

        // Get popular tags
        $popularTags = $this->getPopularTags();

        // Recent posts for sidebar
        $recentPosts = BlogPost::published()
            ->latest('published_at')
            ->limit(5)
            ->get(['id', 'title', 'slug', 'published_at', 'featured_image']);

        // Popular posts by views
        $popularPosts = BlogPost::published()
            ->orderBy('views', 'desc')
            ->limit(5)
            ->get(['id', 'title', 'slug', 'views', 'featured_image']);

        return view('pages.blog.index', compact(
            'posts',
            'categories',
            'popularTags',
            'recentPosts',
            'popularPosts'
        ));
    }

    public function show($slug)
    {
        $post = BlogPost::with('categories')
            ->published()
            ->where('slug', $slug)
            ->firstOrFail();

        // Increment view count
        $post->incrementViews();

        // Get related posts (same categories)
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->whereHas('categories', function ($query) use ($post) {
                $query->whereIn('blog_categories.id', $post->categories->pluck('id'));
            })
            ->inRandomOrder()
            ->limit(3)
            ->get(['id', 'title', 'slug', 'excerpt', 'featured_image', 'published_at']);

        // Get previous and next posts
        $previousPost = BlogPost::published()
            ->where('published_at', '<', $post->published_at)
            ->latest('published_at')
            ->first(['title', 'slug']);

        $nextPost = BlogPost::published()
            ->where('published_at', '>', $post->published_at)
            ->oldest('published_at')
            ->first(['title', 'slug']);

        return view('pages.blog.show', compact(
            'post',
            'relatedPosts',
            'previousPost',
            'nextPost'
        ));
    }

    public function category($slug)
    {
        $category = BlogCategory::active()
            ->where('slug', $slug)
            ->firstOrFail();

        $posts = BlogPost::with('categories')
            ->published()
            ->whereHas('categories', function ($query) use ($category) {
                $query->where('blog_categories.id', $category->id);
            })
            ->latest('published_at')
            ->paginate(12);

        // Other categories for navigation
        $otherCategories = BlogCategory::active()
            ->where('id', '!=', $category->id)
            ->withCount(['publishedPosts'])
            ->having('published_posts_count', '>', 0)
            ->orderBy('name')
            ->get();

        return view('pages.blog.category', compact('category', 'posts', 'otherCategories'));
    }

    private function getPopularTags()
    {
        $allTags = BlogPost::published()
            ->whereNotNull('tags')
            ->pluck('tags')
            ->flatten()
            ->filter()
            ->countBy()
            ->sortDesc()
            ->take(20);

        return $allTags;
    }
}
