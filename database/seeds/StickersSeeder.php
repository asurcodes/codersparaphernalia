<?php

use App\Category;
use Illuminate\Database\Seeder;

class StickersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'stickers')->first();
        $category->products()->createMany([
            [
                'slug' => 'product-one',
                'title' => 'Product one',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-two',
                'title' => 'Product two',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-three',
                'title' => 'Product three',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-four',
                'title' => 'Product four',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-five',
                'title' => 'Product five',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-six',
                'title' => 'Product six',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-seven',
                'title' => 'Product seven',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-eight',
                'title' => 'Product eight',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-nine',
                'title' => 'Product nine',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-ten',
                'title' => 'Product ten',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-eleven',
                'title' => 'Product eleven',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-twelve',
                'title' => 'Product twelve',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-thirteen',
                'title' => 'Product thirteen',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-fourteen',
                'title' => 'Product fourteen',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-fifteen',
                'title' => 'Product fifteen',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-sixteen',
                'title' => 'Product sixteen',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-seventeen',
                'title' => 'Product seventeen',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-eighteen',
                'title' => 'Product eighteen',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-nineteen',
                'title' => 'Product nineteen',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-twenty',
                'title' => 'Product twenty',
                'image' => 'https://placehold.it/600x600',
                'url' => 'http://example.com',
                'price' => 81.4,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ]
        ]);
    }
}
