<?php

use App\Category;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'games')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
