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
            //
        ]);
    }
}
