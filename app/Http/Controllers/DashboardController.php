<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $publishedPosts = Post::where('is_published', true)->count();
        $unpublishedPosts = Post::where('is_published', false)->count();

        $categories = Category::withCount('posts')->get();
        $categoryNames = $categories->pluck('cat_name');
        $categoryCounts = $categories->pluck('posts_count');

        $postsPerMonth = Post::selectRaw('DATE_FORMAT(published_at, "%b %Y") as month, COUNT(*) as count')
        ->groupBy('month')
        ->orderByRaw('MIN(published_at) DESC')
        ->get();

        $postMonths = $postsPerMonth->pluck('month');
        $postCountsPerMonth = $postsPerMonth->pluck('count');

        return view('dashboard', compact(
            'totalPosts',
            'publishedPosts',
            'unpublishedPosts',
            'categoryNames',
            'categoryCounts',
            'postMonths',
            'postCountsPerMonth'
        ));
    }
}
