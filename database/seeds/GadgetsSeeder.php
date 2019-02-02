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
                'tags' => ['health', 'therapy'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'dji-spark-mini-drone',
                'title' => 'DJI Spark Mini Drone',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41z-9tNZTiL._AC_AA400_.jpg',
                'url' => 'https://amzn.to/2MIGrKM',
                'price' => 315.00,
                'tags' => ['drone', 'pilot'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'monoprice-select-mini-pro-3d-printer',
                'title' => 'Monoprice Select Mini Pro 3D Printer',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41aWbTej2OL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2RZPLQ3',
                'price' => 219.99,
                'tags' => ['3d', 'pla'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'fitbit-flex-2-activity-monitor',
                'title' => 'Fitbit Flex 2 Activity Monitor',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31JOzSdXRxL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2SfOP9H',
                'price' => 59.00,
                'tags' => ['health', 'fitness', 'monitor', 'sport'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'new-kindle-paperwhite-e-book',
                'title' => 'New Kindle Paperwhite E-Book (Waterproof)',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41uUB-BFIvL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Tk3kXm',
                'price' => 149.99,
                'tags' => ['e-reader', 'amazon', 'waterproof'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'alexa-echo-smart-speaker',
                'title' => 'Alexa Echo (2nd Generation) Smart speaker',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51TFnR7AtGL._AC_US320_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2TnneR5',
                'price' => 89.99,
                'tags' => ['iot', 'echo', 'amazon'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'wacaco-portable-expresso-machine',
                'title' => 'Wacaco Minipresso GR, Portable Espresso Machine',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/410q+rnf5DL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MMPOco',
                'price' => 49.90,
                'tags' => ['coffee', 'portable'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'rocketbook-wave-reusable-smart-notebook',
                'title' => 'Rocketbook Wave Reusable Smart Notebook',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41yJlMdy9OL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Wu4Bgm',
                'price' => 27.00,
                'tags' => ['environmentally-friendly', 'reusable', 'smart'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'levoit-air-purifier',
                'title' => 'LEVOIT Air Purifier with HEPA Filter, Odor, Allergies Smoke, Dust, Mold Eliminator',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41QTAu6KexL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2DRukIt',
                'price' => 89.99,
                'tags' => ['health'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'nintendo-switch-console',
                'title' => 'Nintendo Switch – Neon Red and Neon Blue Console',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41R9FArsBDL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2WwsMuu',
                'price' => 299.00,
                'tags' => ['console', 'portable'],
                'vendor' => 'amazon'
            ],
        ]);
    }
}
