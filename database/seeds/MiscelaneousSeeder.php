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
            [
                'slug' => 'arduino-official-starter-kit',
                'title' => 'Arduino Starter Kit - Official',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/414essH-EwL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2SgBdeg',
                'price' => 76.50,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'rocketbook-wave-reusable-smart-notebook',
                'title' => 'Rocketbook Wave Reusable Smart Notebook',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41yJlMdy9OL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Wu4Bgm',
                'price' => 27.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'nerf-n-strike-elite-nerf-gun',
                'title' => 'Nerf N-Strike Elite Strongarm Blaster Nerf Gun',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41S49cwqn8L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2TojleR',
                'price' => 12.99,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'sitting-tux-stress-toy',
                'title' => 'Sitting Tux Stress Toy',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41oBMrVyYQL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2sUjVp4',
                'price' => 6.50,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'pomodoro-timer-hourglass',
                'title' => 'Hourglass Pomodoro Sand Timer - 30 Minute & 5 Minute',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41Qbz0Y7S8L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Toe0Ep',
                'price' => 27.99,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'cards-against-humanity-game',
                'title' => 'Cards Against Humanity Game',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41-EhqlLSEL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2SlowPe',
                'price' => 25.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'vivo-height-adjustable-standing-desk',
                'title' => 'VIVO Height Adjustable Standing Desk ',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/5124YEYvRJL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2ToeaeZ',
                'price' => 189.99,
                'tags' => [],
                'vendor' => 'amazon'
            ]
        ]);
    }
}
