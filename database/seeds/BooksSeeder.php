<?php

use App\Category;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'books')->first();
        $category->products()->createMany([
            [
                'slug' => 'clean-code-book',
                'title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/515iEcDr1GL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2sTe1of',
                'price' => 27.53,
                'tags' => ['Robert C. Martin'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'the-clean-coder-book',
                'title' => 'The Clean Coder: A Code of Conduct for Professional Programmers',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/5154eSTKUxL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2TgaxaK',
                'price' => 24.90,
                'tags' => ['Robert C. Martin'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'clean-architecture-book',
                'title' => 'Clean Architecture: A Craftsmas\'s Guide to Software Structure and Design',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41BjtnvIUQL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2WoIEPX',
                'price' => 23.94,
                'tags' => ['Robert C. Martin'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'the-difference-engine-book',
                'title' => 'The Difference Engine: Charles Babbage and the Quest to Build the First Computer',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41Z6D309RHL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MEfKXv',
                'price' => 21.50,
                'tags' => ['Doron Swade'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'design-patterns-book',
                'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51szD9HC9pL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2SgIzOQ',
                'price' => 34.09,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'the-pragmatic-programmer-book',
                'title' => 'The Pragmatic Programmer: From Journeyman to Master',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41uPjEenkFL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Wp71ge',
                'price' => 27.53,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'programming-interviews-exposed-book',
                'title' => 'Programming Interviews Exposed: Coding Your Way Through the Interview',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51xOHIpIo9L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MFTb4u',
                'price' => 24.88,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'introduction-to-algorithms-book',
                'title' => 'Introduction to Algorithms (The MIT Press)',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51fgDX37U7L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2RUE512',
                'price' => 74.27,
                'tags' => [],
                'vendor' => 'amazon'
            ],
        ]);
    }
}
