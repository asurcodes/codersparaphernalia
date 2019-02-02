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
                'tags' => ['Robert C. Martin', 'development', 'improve', 'generic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'the-clean-coder-book',
                'title' => 'The Clean Coder: A Code of Conduct for Professional Programmers',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/5154eSTKUxL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2TgaxaK',
                'price' => 24.90,
                'tags' => ['Robert C. Martin', 'development', 'improve', 'generic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'clean-architecture-book',
                'title' => 'Clean Architecture: A Craftsmas\'s Guide to Software Structure and Design',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41BjtnvIUQL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2WoIEPX',
                'price' => 23.94,
                'tags' => ['Robert C. Martin', 'development', 'improve', 'generic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'the-difference-engine-book',
                'title' => 'The Difference Engine: Charles Babbage and the Quest to Build the First Computer',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41Z6D309RHL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MEfKXv',
                'price' => 21.50,
                'tags' => ['Doron Swade', 'history'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'design-patterns-book',
                'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51szD9HC9pL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2SgIzOQ',
                'price' => 34.09,
                'tags' => ['Erich Gamma', 'Richard Helm', 'Ralph Johnson', 'John Vlissides', 'Grady Booch', 'architecture'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'the-pragmatic-programmer-book',
                'title' => 'The Pragmatic Programmer: From Journeyman to Master',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41uPjEenkFL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Wp71ge',
                'price' => 27.53,
                'tags' => ['Andrew Hunt', 'David Thomas', 'improve', 'development', 'generic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'programming-interviews-exposed-book',
                'title' => 'Programming Interviews Exposed: Coding Your Way Through the Interview',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51xOHIpIo9L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MFTb4u',
                'price' => 24.88,
                'tags' => ['inteview', 'improve', 'generic', 'John Mongan', 'Noah Suojanen Kindler', 'Eric Giguere'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'introduction-to-algorithms-book',
                'title' => 'Introduction to Algorithms (The MIT Press)',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51fgDX37U7L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2RUE512',
                'price' => 74.27,
                'tags' => ['improve', 'generic', 'logic', 'Thomas H. Cormen', 'Charles E. Leiserson', 'Ronald L. Rivest', 'Clifford Stein'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'the-healthy-programmer-book',
                'title' => 'The Healthy Programmer: Get Fit, Feel Better, and Keep Coding Book',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41SolyAmg6L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MMGFR2',
                'price' => 23.68,
                'tags' => ['health', 'generic', 'Joe Kutner'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'refactoring-improving-the-design-of-existing-code-book',
                'title' => 'Refactoring: Improving the Design of Existing Code',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51ta2ZRmPeL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2G6dzeE',
                'price' => 31.86,
                'tags' => ['legacy', 'generic', 'Martin Fowler'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'introduction-to-machine-learning-with-python-book',
                'title' => 'Introduction to Machine Learning with Python: A Guide for Data Scientists',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51ZPksI0E9L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2sZyS9f',
                'price' => 32.37,
                'tags' => ['AI', 'ML', 'generic', 'Andreas C. Müller', 'Sarah Guido'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'cracking-the-coding-interview-book',
                'title' => 'Cracking the Coding Interview: 189 Programming Questions and Solutions',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51l5XzLln+L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2S1r7hT',
                'price' => 30.99,
                'tags' => ['inteview', 'improve', 'generic', 'Gayle Laakmann McDowell'],
                'vendor' => 'amazon'
            ],
        ]);
    }
}
