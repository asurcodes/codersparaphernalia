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
            [
                'slug' => 'verilux-happy-light-touch-therapy-lamp',
                'title' => 'Verilux HappyLight Touch Therapy Lamp',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/21e-JjLsbRL._AC_US320_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2TkueON',
                'price' => 79.95,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'dji-spark-mini-drone',
                'title' => 'DJI Spark Mini Drone',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41z-9tNZTiL._AC_AA400_.jpg',
                'url' => 'https://amzn.to/2MIGrKM',
                'price' => 315.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'dji-phantom-3-professional-drone',
                'title' => 'DJI Phantom 3 Professional Quadcopter 4K Drone',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41gE6Dy9e+L._AC_AA400_.jpg',
                'url' => 'https://amzn.to/2G8GEp8',
                'price' => 799.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'monoprice-select-mini-pro-3d-printer',
                'title' => 'Monoprice Select Mini Pro 3D Printer',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41aWbTej2OL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2RZPLQ3',
                'price' => 219.99,
                'tags' => [],
                'vendor' => 'amazon'
            ],
        ]);
    }
}
