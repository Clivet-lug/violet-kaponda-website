<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_posts' => BlogPost::count(),
            'published_posts' => BlogPost::published()->count(),
            'draft_posts' => BlogPost::where('is_published', false)->count(),
            'total_views' => BlogPost::sum('views'),
            'total_categories' => BlogCategory::active()->count(),
        ];

        // Recent posts
        $recent_posts = BlogPost::with('categories')
            ->latest('created_at')
            ->limit(5)
            ->get();

        // Popular posts (by views)
        $popular_posts = BlogPost::published()
            ->orderBy('views', 'desc')
            ->limit(5)
            ->get();

        // Posts by month for chart (last 6 months)
        $months = [];
        $post_counts = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $months[] = $date->format('M Y');
            $post_counts[] = BlogPost::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();
        }

        return view('admin.dashboard', compact(
            'stats',
            'recent_posts',
            'popular_posts',
            'months',
            'post_counts'
        ));
    }
}
