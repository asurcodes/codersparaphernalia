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
                'system-76-gazelle-laptop',
                'yellow-rubber-bath-duck',
                'monoprice-select-mini-pro-3d-printer',
                'alexa-echo-smart-speaker',
                'wacaco-portable-expresso-machine',
                'raspberry-pi-3-b-mini-computer',
                'rosewill-mechanical-brown-switches-keyboard',
                'sitting-tux-stress-toy'
            ];
            return Product::whereIn('slug', $topProductsSlugs)->get();
        });
        $view->with('categories', $categories);
        $view->with('topProducts', $topProducts);
    }
}
