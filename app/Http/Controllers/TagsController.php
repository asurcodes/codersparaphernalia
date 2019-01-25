<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show ($tag)
    {
        $products = Product::whereRaw("JSON_CONTAINS(tags, '[\"$tag\"]')")->paginate();

        return view('tag')->with([
            'tag' => $tag,
            'products' => $products
        ]);
    }
}
