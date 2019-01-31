<?php

use App\Category;
use Illuminate\Database\Seeder;

class ComputersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'computers')->first();
        $category->products()->createMany([
            [
                'slug' => 'dell-xps-9570-laptop',
                'title' => 'Dell XPS 9570 15.6" FHD, i7-8750H CPU, 16GB RAM, 512GB SSD, GTX 1050Ti',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51oGvT3hsOL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Ti5dne',
                'price' => 1379.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'dell-xps-13-2019-laptop',
                'title' => 'Dell XPS 13 13.3" FHD, i5-8250U, 8GB RAM',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51BNg1YayGL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MDVdSW',
                'price' => 799.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'razer-blade-15-laptop',
                'title' => 'Razer Blade 15, FHD 60 Hz, i7-8750H, 16GB RAM, 256GB SSD, GTX 1060 Max-Q',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/413Mo11zRjL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2WvkqDJ',
                'price' => 1799.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'apple-macbook-air-128-laptop',
                'title' => 'Apple MacBook Air 128GB',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41N8wIjGrwL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2S9fYLv',
                'price' => 1099.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'lenovo-ideapad-330s-laptop',
                'title' => 'Lenovo Ideapad 330s 15.6", i7-8550U, 8GB, 128GB SSD',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/313UBpBtYiL._AC_US400_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2WvlK9F',
                'price' => 759.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'lenovo-thinkpad-x1-carbon-laptop',
                'title' => 'Lenovo ThinkPad X1 Carbon Multi-Touch, i7-8650U, 16GB, 256GB SSD',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41Wra8PrJhL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2G8gH9d',
                'price' => 1795.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'acer-aspire-1-14-laptop',
                'title' => 'Acer Aspire 1, 14" FHD, Celeron N4000, 4GB DDR4, 64GB eMMC',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41krVfYQn2L._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2WsqM6F',
                'price' => 249.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'asus-vivobook-s-14-laptop',
                'title' => 'ASUS VivoBook S, 14" FHD, i7-8550U, 8GB RAM, 256GB SSD, GeForce MX150',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41ARzdDxdFL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2WtiQSw',
                'price' => 799.00,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'raspberry-pi-3-b-mini-computer',
                'title' => 'Raspberry Pi 3 Model B',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Vt9f26ryL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2CWb4HW',
                'price' => 34.49,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'intel-compute-stick-computer',
                'title' => 'Intel Compute Stick CS325 Intel Core m3',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Vt9f26ryL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2CUbv5I',
                'price' => 340.99,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'synology-ds218plus-nas',
                'title' => 'Synology 2 bay NAS DiskStation DS218+ (Diskless)',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41ew6gtQQZL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2MKirqr',
                'price' => 299.99,
                'tags' => [],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'dell-poweredge-t30-server',
                'title' => 'Dell PowerEdge T30 Server, Xeon E3-1225 v5, 8GB RAM, 1TB HDD',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/413G+Sg-x0L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2D0WQW7',
                'price' => 360.89,
                'tags' => [],
                'vendor' => 'amazon'
            ],
        ]);
    }
}
