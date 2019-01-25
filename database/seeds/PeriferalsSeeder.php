<?php

use App\Category;
use Illuminate\Database\Seeder;

class PeriferalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'periferals')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
