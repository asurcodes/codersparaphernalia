<?php

use App\Category;
use Illuminate\Database\Seeder;

class MugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'mugs')->first();
        $category->products()->createMany([
            //
        ]);
    }
}
