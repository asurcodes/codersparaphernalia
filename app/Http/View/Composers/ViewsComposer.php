<?php

namespace App\Http\View\Composers;

use Cache;
use App\Product;
use App\Category;
use Illuminate\View\View;

class ViewsComposer
{
    public function compose(View $view)
    {
        $customStyles = Cache::remember('custom-styles', 1440, function() {
            return file_get_contents(public_path('css/theme.css'));
        });
        $view->with('customStyles', $customStyles);
    }
}
