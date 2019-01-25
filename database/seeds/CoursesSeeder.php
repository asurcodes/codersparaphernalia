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
            //
        ]);
    }
}
