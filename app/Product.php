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
        $product = $this->toArray();
        $remove = ['id', 'category_id', 'slug', 'image', 'url', 'updated_at'];
        $product = array_diff_key($product, array_flip($remove));

        $category = $this->category->toArray();
        $remove = ['id', 'slug', 'image', 'meta_title', 'meta_description', 'long_description', 'updated_at', 'related'];
        $category = array_diff_key($category, array_flip($remove));

        $product['category'] = $category;

        return $product;
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
