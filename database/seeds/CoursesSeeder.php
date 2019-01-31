<?php

use App\Category;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'courses')->first();
        $category->products()->createMany([
            [
                'slug' => 'vue-js-2-the-complete-guide-course',
                'title' => 'Vue JS 2 - The Complete Guide',
                'image' => 'https://udemy-images.udemy.com/course/480x270/995016_ebf4.jpg',
                'url' => 'https://www.udemy.com/vuejs-2-the-complete-guide/',
                'price' => 9.99,
                'tags' => ['vue'],
                'vendor' => 'udemy'
            ],
            [
                'slug' => 'docker-mastery-course',
                'title' => 'Docker Mastery: The Complete Toolset From a Docker Captain',
                'image' => 'https://udemy-images.udemy.com/course/480x270/1035000_c1aa_2.jpg',
                'url' => 'https://www.udemy.com/docker-mastery/',
                'price' => 9.99,
                'tags' => ['docker'],
                'vendor' => 'udemy'
            ],
            [
                'slug' => 'the-complete-android-n-developer-course',
                'title' => 'The Complete Android N Developer Course',
                'image' => 'https://udemy-images.udemy.com/course/480x270/951618_0839_2.jpg',
                'url' => 'https://www.udemy.com/complete-android-n-developer-course/',
                'price' => 9.99,
                'tags' => ['android'],
                'vendor' => 'udemy'
            ],
            [
                'slug' => 'the-ultimate-mysql-bootcamp-course',
                'title' => 'The Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert',
                'image' => 'https://udemy-images.udemy.com/course/480x270/1187016_51b3.jpg',
                'url' => 'https://www.udemy.com/the-ultimate-mysql-bootcamp-go-from-sql-beginner-to-expert/',
                'price' => 9.99,
                'tags' => ['mysql'],
                'vendor' => 'udemy'
            ],
            [
                'slug' => 'go-the-complete-developers-guide-course',
                'title' => 'Go: The Complete Developer\'s Guide (Golang)',
                'image' => 'https://udemy-images.udemy.com/course/480x270/1309202_1231_4.jpg',
                'url' => 'https://www.udemy.com/go-the-complete-developers-guide/',
                'price' => 9.99,
                'tags' => [],
                'vendor' => 'udemy'
            ],
            [
                'slug' => 'graphql-with-react-course',
                'title' => 'GraphQL with React: The Complete Developers Guide',
                'image' => 'https://udemy-images.udemy.com/course/480x270/1109926_7f97_2.jpg',
                'url' => 'https://www.udemy.com/graphql-with-react-course/',
                'price' => 9.99,
                'tags' => [],
                'vendor' => 'udemy'
            ],
            [
                'slug' => 'nodejs-the-complete-guide-course',
                'title' => 'NodeJS - The Complete Guide (incl. MVC, REST APIs, GraphQL)',
                'image' => 'https://udemy-images.udemy.com/course/480x270/1879018_95b6.jpg',
                'url' => 'https://www.udemy.com/nodejs-the-complete-guide/',
                'price' => 9.99,
                'tags' => [],
                'vendor' => 'udemy'
            ],
            [
                'slug' => 'ios-12-app-development-bootcamp-course',
                'title' => 'iOS 12 & Swift - The Complete iOS App Development Bootcamp',
                'image' => 'https://udemy-images.udemy.com/course/480x270/1778502_f4b9_8.jpg',
                'url' => 'https://www.udemy.com/ios-12-app-development-bootcamp/',
                'price' => 9.99,
                'tags' => [],
                'vendor' => 'udemy'
            ],
        ]);
    }
}
