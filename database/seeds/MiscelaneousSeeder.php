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
            [
                'slug' => 'yellow-rubber-bath-duck',
                'title' => 'Yellow Rubber Bath Duck',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31alIFmbYpL._AC_AA400_.jpg',
                'url' => 'https://amzn.to/2FVr7Kb',
                'price' => 8.99,
                'tags' => ['duck'],
                'vendor' => 'amazon'
            ],
        ]);
    }
}
