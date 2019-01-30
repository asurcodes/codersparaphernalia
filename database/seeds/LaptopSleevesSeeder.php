<?php

use App\Category;
use Illuminate\Database\Seeder;

class LaptopSleevesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'laptop-sleeves')->first();
        $category->products()->createMany([
            [
                'slug' => 'binary-is-easy-laptop-sleeve',
                'title' => 'Binary Is Easy Laptop Sleeve',
                'image' => 'https://ih0.redbubble.net/image.202994874.7978/ls%2C13inch%2C520x560-pad%2C420x460%2Cf8f8f8.lite-2u3.jpg',
                'url' => 'https://www.redbubble.com/people/bkdesign/works/21347978-programmer?p=laptop-sleeve',
                'price' => 36.98,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'there-are-ten-type-of-people-laptop-sleeve',
                'title' => 'There are 10 Types Of People In the World Laptop Sleeve',
                'image' => 'https://ih0.redbubble.net/image.257301329.8232/pd%2C380x420%2Cmacbook_air_13-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/keepers/works/23138232-those-who-understand-binary-and-those-who-dont?p=laptop-sleeve',
                'price' => 35.50,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-planetary-laptop-sleeve',
                'title' => 'Programmer Planetary Laptop Sleeve',
                'image' => 'https://ih1.redbubble.net/image.409142276.6533/ls%2C13inch%2C520x560-pad%2C420x460%2Cf8f8f8.lite-2.jpg',
                'url' => 'https://www.redbubble.com/people/haydenthu/works/27496533-programmer?p=laptop-sleeve',
                'price' => 39.93,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'braces-not-a-chance-laptop-sleece',
                'title' => 'Braces Not a Chance Laptop Sleeve',
                'image' => 'https://ih0.redbubble.net/image.104791618.4404/ls%2C13inch%2C520x560-pad%2C420x460%2Cf8f8f8.lite-2u13.jpg',
                'url' => 'https://www.redbubble.com/people/ramiro/works/14414404-braces-not-a-chance-humorous-design-for-python-programmers-white-font?p=laptop-sleeve',
                'price' => 36.98,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
        ]);
    }
}
