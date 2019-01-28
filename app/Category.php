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
        $breadcrumbs = [
            "@context" => "http://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Homepage",
                    "item" => route('home')
                ],[
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => $this->name,
                    "item" => route('category.show', $this->slug)
                ]
            ]
        ];

        return json_encode($breadcrumbs);
    }

    /**
     * Get the products item list structured data for the categories provided
     *
     * @param $categories
     *
     * @return string
     */
    public function generateProductsItemListStructuredData($products) : string
    {
        $structuredData = [
            "@context" => "http://schema.org",
            "@type" => "ItemList",
            "name" => $this->name,
            "description" => $this->description,
            "itemListElement" => Product::generateItemListArray($products)
        ];

        return json_encode($structuredData);
    }

    /**
     * Get the item list structured data for the categories in the homepage
     *
     * @param $categories
     *
     * @return array
     */
    public static function generateCategoriesItemListStructuredData($categories) : string
    {
        $itemList = [];
        foreach ($categories as $key => $category) {
            $itemList[] = [
                "@type" => 'ListItem',
                "position" => $key + 1,
                "url" => route('category.show', $category->slug)
            ];
        }

        $structuredData = [
            "@context" => "http://schema.org",
            "@type" => "ItemList",
            "name" => "Lorem Ipsum",
            "description" => "Lorem Ipsum",
            "itemListElement" => $itemList
        ];

        return json_encode($structuredData);
    }
}
