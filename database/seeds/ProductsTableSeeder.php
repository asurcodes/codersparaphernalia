<?php

use App\Product;
use App\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Men T-Shirts

        $category = Category::where('slug', 'men-tshirts')->first();
        $category->products()->createMany([
            [
                'slug' => 'product-one',
                'title' => 'Product one',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
            ],
            [
                'slug' => 'product-two',
                'title' => 'Product two',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
            ],
            [
                'slug' => 'product-three',
                'title' => 'Product three',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
            ],
            [
                'slug' => 'product-four',
                'title' => 'Product four',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
            ],
            [
                'slug' => 'product-five',
                'title' => 'Product five',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
            ],
            [
                'slug' => 'product-six',
                'title' => 'Product six',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
            ],
            [
                'slug' => 'product-seven',
                'title' => 'Product seven',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
            ],
            [
                'slug' => 'product-eight',
                'title' => 'Product eight',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
            ],
        ]);

        // Women T-Shirts
        $category = Category::where('slug', 'women-tshirts')->first();
        $category->products()->createMany([
            //
        ]);

        // Men Hoodies
        $category = Category::where('slug', 'men-hoodies')->first();
        $category->products()->createMany([
            //
        ]);

        // Women Hoodies
        $category = Category::where('slug', 'women-hoodies')->first();
        $category->products()->createMany([
            //
        ]);

        // Leggins
        $category = Category::where('slug', 'leggins')->first();
        $category->products()->createMany([
            //
        ]);

        // Purses
        $category = Category::where('slug', 'books')->first();
        $category->products()->createMany([
            //
        ]);

        // Bags
        $category = Category::where('slug', 'bags')->first();
        $category->products()->createMany([
            //
        ]);

        // Babies
        $category = Category::where('slug', 'babies-apparel')->first();
        $category->products()->createMany([
            //
        ]);

        // Posters
        $category = Category::where('slug', 'posters')->first();
        $category->products()->createMany([
            //
        ]);

        // Stickers
        $category = Category::where('slug', 'stickers')->first();
        $category->products()->createMany([
            //
        ]);

        // Vinils
        $category = Category::where('slug', 'decoration')->first();
        $category->products()->createMany([
            //
        ]);

        // Phone Cases
        $category = Category::where('slug', 'phone-cases')->first();
        $category->products()->createMany([
            //
        ]);

        // Laptop Cases
        $category = Category::where('slug', 'laptop-cases')->first();
        $category->products()->createMany([
            //
        ]);

        // Mugs
        $category = Category::where('slug', 'mugs')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
