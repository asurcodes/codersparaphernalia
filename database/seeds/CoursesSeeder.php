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
        ]);
    }
}
