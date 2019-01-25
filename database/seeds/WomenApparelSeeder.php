<?php

use App\Category;
use Illuminate\Database\Seeder;

class WomenApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'women-apparel')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
