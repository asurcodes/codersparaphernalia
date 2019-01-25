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
     * Get the item list structured data for the products provided
     *
     * @param $products
     *
     * @return string
     */
    static public function generateItemListStructuredData($products) : string
    {
        $itemList = [];

        return json_encode($itemList);
    }
}
