<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'related' => 'array',
    ];

    /**
     * Get the category products relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the breadcrumbs structured data for this category
     *
     * @return string
     */
    public function generateBreadcrumbsStructuredData() : string
    {
        $breadcrumbs = [];

        return json_encode($breadcrumbs);
    }

    /**
     * Get the item list structured data for the categories provided
     *
     * @param $categories
     *
     * @return string
     */
    static public function generateItemListStructuredData($categories) : string
    {
        $itemList = [];

        return json_encode($itemList);
    }
}
