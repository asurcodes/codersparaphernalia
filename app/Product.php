<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tags' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the item list array for the products provided
     *
     * @param $products
     *
     * @return array
     */
    public static function generateItemListArray($products) : array
    {
        $itemList = [];
        foreach ($products as $key => $product) {
            $itemList[] = [
                "@type" => 'ListItem',
                "position" => $key + 1,
                "url" => route('product.show', $product->slug),
                "name" => $product->title,
                "image" => $product->image
            ];
        }

        return $itemList;
    }
}
