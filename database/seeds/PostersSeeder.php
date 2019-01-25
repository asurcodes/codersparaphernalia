<?php

use App\Category;
use Illuminate\Database\Seeder;

class PostersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'posters')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
