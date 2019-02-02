<?php

use App\Category;
use Illuminate\Database\Seeder;

class LaptopCasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'laptop-cases')->first();
        $category->products()->createMany([
            [
                'slug' => 'binary-is-easy-laptop-sleeve',
                'title' => 'Binary Is Easy Laptop Sleeve',
                'image' => 'https://ih0.redbubble.net/image.202994874.7978/ls%2C13inch%2C520x560-pad%2C420x460%2Cf8f8f8.lite-2u3.jpg',
                'url' => 'https://www.redbubble.com/people/bkdesign/works/21347978-programmer?p=laptop-sleeve',
                'price' => 36.98,
                'tags' => ['funny'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'there-are-ten-type-of-people-laptop-sleeve',
                'title' => 'There are 10 Types Of People In the World Laptop Sleeve',
                'image' => 'https://ih0.redbubble.net/image.257301329.8232/ls%2C13inch%2C520x560-pad%2C420x460%2Cf8f8f8.lite-2u1.jpg',
                'url' => 'https://www.redbubble.com/people/keepers/works/23138232-those-who-understand-binary-and-those-who-dont?p=laptop-sleeve',
                'price' => 35.50,
                'tags' => ['funny'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-planetary-laptop-sleeve',
                'title' => 'Programmer Planetary Laptop Sleeve',
                'image' => 'https://ih1.redbubble.net/image.409142276.6533/ls%2C13inch%2C520x560-pad%2C420x460%2Cf8f8f8.lite-2.jpg',
                'url' => 'https://www.redbubble.com/people/haydenthu/works/27496533-programmer?p=laptop-sleeve',
                'price' => 39.93,
                'tags' => ['cute', 'space'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'braces-not-a-chance-laptop-sleece',
                'title' => 'Braces Not a Chance Laptop Sleeve',
                'image' => 'https://ih0.redbubble.net/image.104791618.4404/ls%2C13inch%2C520x560-pad%2C420x460%2Cf8f8f8.lite-2u13.jpg',
                'url' => 'https://www.redbubble.com/people/ramiro/works/14414404-braces-not-a-chance-humorous-design-for-python-programmers-white-font?p=laptop-sleeve',
                'price' => 36.98,
                'tags' => ['funny'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'stay-focused-laptop-skin',
                'title' => 'Stay Focused Laptop Skin',
                'image' => 'https://ih1.redbubble.net/image.620384359.1306/pd%2C380x420%2Cmacbook_air_13-pad%2C420x460%2Cf8f8f8.lite-1u5.jpg',
                'url' => 'https://www.redbubble.com/people/ericzelinski/works/33271306-stay-focused?p=laptop-skin',
                'price' => 25.00,
                'tags' => ['focus'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'think-twice-code-once-laptop-skin',
                'title' => 'Think Twice, Code Once Laptop Skin',
                'image' => 'https://ih0.redbubble.net/image.189923420.8247/pd%2C380x420%2Cmacbook_air_13-pad%2C420x460%2Cf8f8f8.lite-1u3.jpg',
                'url' => 'https://www.redbubble.com/people/bkdesign/works/20788247-programmer?p=laptop-skin',
                'price' => 26.04,
                'tags' => ['concentration'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'computer-generated-graphics-laptop-skin',
                'title' => 'Computer Generated Graphics Laptop Skin',
                'image' => 'https://ih1.redbubble.net/image.587325367.3221/pd%2C380x420%2Cmacbook_air_13-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/fotokatt/works/16503221-computer-generated-graphics?p=laptop-skin',
                'price' => 25.00,
                'tags' => ['chip', 'logic-board'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-awesome-looks-like-laptop-skin',
                'title' => 'This Is What An Awesome Programmer Looks Like Laptop Skin',
                'image' => 'https://ih1.redbubble.net/image.667214076.9388/pd%2C380x420%2Cmacbook_air_13-pad%2C420x460%2Cf8f8f8.lite-1u4.jpg',
                'url' => 'https://www.redbubble.com/people/smily-tees/works/34709388-programmer-awesome-looks-birthday-christmas-funny?p=laptop-skin',
                'price' => 25.00,
                'tags' => ['funny'],
                'vendor' => 'redbubble'
            ]
        ]);
    }
}
