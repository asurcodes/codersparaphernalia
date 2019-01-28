<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($category)
    {
        $category = Category::where('slug', $category)->first();
        $products = $category->products()->simplePaginate(16);
        $relatedCategories = Category::whereIn('id', $category->related)->get();

        return view('category')->with([
            'category' => $category,
            'products' => $products,
            'relatedCategories' => $relatedCategories
        ]);
    }
}
