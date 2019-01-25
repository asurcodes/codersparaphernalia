<?php

use App\Category;
use Illuminate\Database\Seeder;

class MenApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'men-apparel')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
