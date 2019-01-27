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
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['category'] = $this->category;

        return $array;
    }

    /**
     * Get the item list array for the products provided
     *
     * @param $products
     *
     * @return array
     */
    static public function generateItemListArray($products) : array
    {
        $itemList = [];
        foreach ($products as $key => $product) {
            $itemList[] = [
                "@type" => 'ListItem',
                "position" => $key + 1,
                "item" => [
                    "@type" => "Product",
                    "name" => $product->name,
                    "image" => $product->image,
                    "offers" => [
                        "price" => $product->price,
                        "priceCurrency" => "USD",
                        "availability" => "InStock"
                    ],
                    "url" => route('product.show', $product->id)
                ]
            ];
        }
        return $itemList;
    }
}
