<?php

use App\Category;
use Illuminate\Database\Seeder;

class MiscelaneousSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'miscelaneous')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
