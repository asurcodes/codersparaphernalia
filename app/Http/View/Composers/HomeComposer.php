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
        $categories = Cache::remember('categories', 720, function () {
            return Category::get();
        });
        $topProducts = Cache::remember('top-products', 720, function () {
            $topProductsSlugs = [
                'gopher-programming-sticker',
                'yellow-rubber-bath-duck',
                'anker-wireless-vertical-mouse',
                'programming-interviews-exposed-book',
                'code-mandala-react-tote-bag',
                'dell-xps-9570-laptop',
                'monoprice-select-mini-pro-3d-printer',
                'code-debugger-hoodie',
            ];
            return Product::whereIn('slug', $topProductsSlugs)->get();
        });
        $view->with('categories', $categories);
        $view->with('topProducts', $topProducts);
    }
}
