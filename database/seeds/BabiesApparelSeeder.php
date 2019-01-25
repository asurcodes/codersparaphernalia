<?php

use App\Category;
use Illuminate\Database\Seeder;

class BabiesApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'babies-apparel')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
