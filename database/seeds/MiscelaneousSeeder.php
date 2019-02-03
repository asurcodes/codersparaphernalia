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
                'tags' => ['duck', 'rubber', 'explain'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'nerf-n-strike-elite-nerf-gun',
                'title' => 'Nerf N-Strike Elite Strongarm Blaster Nerf Gun',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41S49cwqn8L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2TojleR',
                'price' => 12.99,
                'tags' => ['nerf', 'play', 'fun'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'sitting-tux-stress-toy',
                'title' => 'Sitting Tux Stress Toy',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41oBMrVyYQL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2sUjVp4',
                'price' => 6.50,
                'tags' => ['linux', 'health', 'squish'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'cards-against-humanity-game',
                'title' => 'Cards Against Humanity Game',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41-EhqlLSEL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2SlowPe',
                'price' => 25.00,
                'tags' => ['game', 'fun', 'nsfw'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'brass-fidget-spinner',
                'title' => 'Brass High Quality Fidget Spinner',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41uELO6PWPL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2G3E7NX',
                'price' => 7.99,
                'tags' => ['anti-ansiety', 'focus', 'health'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'reusable-fastening-cable-ties',
                'title' => 'Reusable Fastening Cable Ties',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Seo61Gq1L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2t1GiJ9',
                'price' => 7.99,
                'tags' => ['cable-management', 'order'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'arduino-official-starter-kit',
                'title' => 'Arduino Starter Kit - Official',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/414essH-EwL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2SgBdeg',
                'price' => 76.50,
                'tags' => ['electronics', 'starter-kit'],
                'vendor' => 'amazon'
            ]
        ]);
    }
}
