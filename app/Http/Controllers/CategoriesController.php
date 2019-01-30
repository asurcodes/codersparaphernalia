<?php

namespace App\Http\Controllers;

use Cache;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Request $request, $slug)
    {
        $page = $request->get('page') ?: 1;

        $category = Cache::remember("category-$slug", 720, function () use ($slug) {
            return Category::where('slug', $slug)->first();
        });
        $relatedCategories = Cache::remember("category-$slug-related", 720, function () use ($category) {
            return Category::whereIn('slug', $category->related)->get();
        });
        $products = Cache::remember("category-$slug-products-$page", 720, function () use ($category) {
            return $category->products()->simplePaginate(16);
        });

        return view('category')->with([
            'category' => $category,
            'relatedCategories' => $relatedCategories,
            'products' => $products
        ]);
    }
}
