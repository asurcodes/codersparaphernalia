<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $categories = Cache::remember('categories', 720, function () {
            return Category::get();
        });

        return response()->view('sitemap', compact('categories'))
            ->header('Content-Type', 'text/xml');
    }
}
