<?php

use App\Category;
use Illuminate\Database\Seeder;

class LaptopCasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'laptop-cases')->first();
        $category->products()->createMany([
            //
        ]);
    }
}