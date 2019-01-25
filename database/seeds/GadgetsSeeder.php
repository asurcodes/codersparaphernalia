<?php

use App\Category;
use Illuminate\Database\Seeder;

class GadgetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'gadgets')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
