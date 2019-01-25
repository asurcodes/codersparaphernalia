<?php

use App\Category;
use Illuminate\Database\Seeder;

class DecorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'decoration')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
