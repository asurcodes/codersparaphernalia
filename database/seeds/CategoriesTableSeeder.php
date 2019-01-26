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
                'description' => 'If there is something programmers love is to put sticker on everything.',
                'meta_title' => 'The best selection of stickers',
                'meta_description' => 'If there is something programmers love is to put sticker on everything.',
                'long_description' => 'If there is something programmers love is to put sticker on everything, our laptop, our screen or our water bottle, this is one of the best categories for it´s incredible variety and affordability, there is no chance of failure',
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
                'slug' => 'periferals',
                'name' => 'Periferals',
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
            ],
            [
                'slug' => 'gadgets',
                'name' => 'Gadgets',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'games',
                'name' => 'Games',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'courses',
                'name' => 'Courses',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'miscelaneous',
                'name' => 'Miscelaneous',
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
                'slug' => 'men-apparel',
                'name' => 'Men Apparel',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Lorem ipsum',
                'meta_title' => 'Lorem ipsum',
                'meta_description' => 'Lorem ipsum',
                'long_description' => 'Lorem ipsum',
            ],
            [
                'slug' => 'women-apparel',
                'name' => 'Women Apparel',
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
        ]);
    }
}
