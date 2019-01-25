<?php

use App\Category;
use Illuminate\Database\Seeder;

class BagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'bags')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
