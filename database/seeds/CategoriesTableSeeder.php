<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'slug' => 'stickers',
                'name' => 'Stickers',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'posters',
                'name' => 'Posters',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'decoration',
                'name' => 'Decoration',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'phone-cases',
                'name' => 'Phone cases',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'laptop-cases',
                'name' => 'Laptop cases',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'mugs',
                'name' => 'Mugs',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'bags',
                'name' => 'Bags',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'men-tshirts',
                'name' => 'Men T-Shirts',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'women-tshirts',
                'name' => 'Women T-Shirts',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'men-hoodies',
                'name' => 'Men Hoodies',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'women-hoodies',
                'name' => 'Women Hoodies',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'men-underwear',
                'name' => 'Men Underwear',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'women-underwear',
                'name' => 'Women Underwear',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'babies-apparel',
                'name' => 'Babies Apparel',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'leggins',
                'name' => 'Leggins',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'books',
                'name' => 'Books',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ]
        ]);
    }
}
