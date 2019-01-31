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
            [
                'slug' => 'fitbit-flex-2-activity-monitor',
                'title' => 'Fitbit Flex 2 Activity Monitor',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31JOzSdXRxL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2SfOP9H',
                'price' => 59.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'new-kindle-paperwhite-e-book',
                'title' => 'New Kindle Paperwhite E-Book (Waterproof)',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41uUB-BFIvL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Tk3kXm',
                'price' => 149.99,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'alexa-echo-smart-speaker',
                'title' => 'Alexa Echo (2nd Generation) Smart speaker',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51TFnR7AtGL._AC_US320_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2TnneR5',
                'price' => 89.99,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'wacaco-portable-expresso-machine',
                'title' => 'Wacaco Minipresso GR, Portable Espresso Machine',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/410q+rnf5DL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MMPOco',
                'price' => 49.90,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'nintendo-switch-console',
                'title' => 'Nintendo Switch – Neon Red and Neon Blue Console',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41R9FArsBDL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2WwsMuu',
                'price' => 299.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
        ]);
    }
}
