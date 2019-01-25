<?php

namespace App\Http\View\Composers;

use Cache;
use App\Product;
use App\Category;
use Illuminate\View\View;

class HomeComposer
{
    public function compose(View $view)
    {
        $categories = Cache::remember('categories', 720, function() {
            return Category::get();
        });
        $topProducts = Cache::remember('top-products', 720, function() {
            return Product::take(8)->get();
        });
        $view->with('categories', $categories);
        $view->with('topProducts', $topProducts);
    }
}
