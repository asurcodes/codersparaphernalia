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
            [
                'slug' => 'hp-23-fhd-ips-monitor',
                'title' => 'HP 23.8-Inch FHD IPS Monitor with Tilt/Height Adjustment',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51h2G1c5D6L._AC_US320_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2t1Gqsg',
                'price' => 109.99,
                'tags' => ['monitor', 'FHD', 'IPS'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'lg-27ud68-w-4k-monitor',
                'title' => 'LG 27UD68-W 27-Inch 4K UHD IPS Monitor',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51hG-a7giZL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2RXyqqS',
                'price' => 399.00,
                'tags' => ['monitor', '4k', 'UHD', 'IPS'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'bose-companion-2-speakers',
                'title' => 'Bose Companion 2 Series III Multimedia Speakers',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41inrzDQqNL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2WpFxHi',
                'price' => 99.00,
                'tags' => ['speakers'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'logitech-c930e-1080p-webcam',
                'title' => 'Logitech C930e 1080P HD Video Webcam',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41MoYSnfziL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Gml3Kb',
                'price' => 69.20,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'apple-magic-wireless-keyboard',
                'title' => 'Apple magic wireless keyboard',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/21hIjIcPxaL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2CPNQ6r',
                'price' => 89.99,
                'tags' => ['keyboard', 'apple', 'mac'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'microsoft-sculpt-ergonomic-keyboard-mouse',
                'title' => 'Microsoft Sculpt Ergonomic Wireless Keyboard and Mouse',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/316dNcQVjjL._AC_US436_QL65_.jpg',
                'url' => 'https://www.amazon.com/Microsoft-Ergonomic-Wireless-Desktop-Keyboard/dp/B00CYX54C0',
                'price' => 88.00,
                'tags' => ['keyboard', 'microsoft', 'ergonomic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'rosewill-mechanical-brown-switches-keyboard',
                'title' => 'Rosewill Mechanical Keyboard Cherry Brown',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/4154YUGkFZL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2Sh43ek',
                'price' => 82.90,
                'tags' => ['keyboard', 'mechanical'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'hyperx-alloy-fps-pro-blue-switches-keyboard',
                'title' => 'HyperX Alloy FPS Pro - Tenkeyless Cherry Blue Mechanical Keyboard',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41NIvQMviEL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2MOD3hu',
                'price' => 59.99,
                'tags' => ['keyboard', 'mechanical'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'anker-wireless-vertical-mouse',
                'title' => 'Anker Wireless Vertical Ergonomic Optical Mouse',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41hz+c0V7gL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2ScDqav',
                'price' => 19.99,
                'tags' => ['mouse', 'vertical', 'ergonomic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'logitech-mx-master-2S-mouse',
                'title' => 'Logitech MX Master 2S Wireless Mouse',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/314itkiZ9RL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2MCNO6g',
                'price' => 74.50,
                'tags' => ['mouse', 'ergonomic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'logitech-m720-triathalon-mouse',
                'title' => 'Logitech M720 Triathalon Mouse',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/310n92wazTL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2SgBFZW',
                'price' => 32.95,
                'tags' => ['mouse'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'logitech-mx-ergo-trackball-mouse',
                'title' => 'Logitech MX Ergo Wireless Trackball Mouse',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41CEbfQCAAL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2MGerah',
                'price' => 73.86,
                'tags' => ['mouse', 'trackball', 'ergonomic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'beats-urbeats-3-earphones',
                'title' => 'Beats urBeats3 Earphones',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31svh73A3bL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MOvveA',
                'price' => 59.95,
                'tags' => ['headphones', 'sound-cancelling', 'confortable'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'apple-airpods-earphones',
                'title' => 'Apple AirPods',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31-72hgtdrL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2WuPvqP',
                'price' => 147.00,
                'tags' => ['earphones', 'wireless'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'bose-qc-35-headphones',
                'title' => 'Bose QuietComfort 35 II Wireless Headphones',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51VjLdXPp-L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2WuPvqP',
                'price' => 349.00,
                'tags' => ['headphones', 'sound-cancelling', 'confortable'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'audio-technica-ath-m50x-professional-headphones',
                'title' => 'Audio-Technica ATH-M50x Professional Studio Headphones',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41ztmfSfzWL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2B3CbAP',
                'price' => 149.00,
                'tags' => ['headphones', 'studio', 'professional'],
                'vendor' => 'amazon'
            ],
        ]);
    }
}
