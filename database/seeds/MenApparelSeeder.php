<?php

use App\Category;
use Illuminate\Database\Seeder;

class MenApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'men-apparel')->first();
        $category->products()->createMany([
            [
                'slug' => 'robot-talk-t-shirt',
                'title' => 'Robot Talk T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.286456340.9252/ra%2Cunisex_tshirt%2Cx1850%2C353d77%3A4d8b4ffd91%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1u5.jpg',
                'url' => 'https://www.redbubble.com/people/jarhumor/works/12899252-robot-talk?p=t-shirt',
                'price' => 19.90,
                'tags' => ['robot', 'binary'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'hello-world-t-shirt',
                'title' => 'Hello World - Many Programming Languages T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.357432225.2192/ra%2Cclassic_tee%2Cx1645%2C322e3f%3A696a94a5d4%2Cfront-c%2C365%2C330%2C420%2C460-bg%2Cf8f8f8.lite-2u4.jpg',
                'url' => 'https://www.redbubble.com/people/kiprobinson/works/26082192-hello-world-many-programming-languages-dark?p=classic-tee',
                'price' => 19.90,
                'tags' => ['code'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'may-the-source-be-with-you-tux-t-shirt',
                'title' => 'May The Source Be With You T-Shirt',
                'image' => 'https://ih1.redbubble.net/image.113906836.4084/ra%2Cunisex_tshirt%2Cx1850%2C33281f%3A5b604c86ce%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/refugeek/works/17144084-may-the-source-be-with-you-tux-edition?p=t-shirt',
                'price' => 19.90,
                'tags' => ['star-wars', 'tux', 'linux'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'code-debugger-hoodie',
                'title' => 'Code Debugger Hoodie',
                'image' => 'https://ih0.redbubble.net/image.256093520.9803/ra%2Cunisex_hoodie_mens%2Cx1850%2Ccharcoal_heather%2Cfront-c%2C410%2C400%2C420%2C460-bg%2Cf8f8f8.lite-2.jpg',
                'url' => 'https://www.redbubble.com/people/artlahdesigns/works/23099803-code-debugger?p=t-shirt',
                'price' => 46.80,
                'tags' => ['debug', 'test'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'born-to-code-t-shirt',
                'title' => 'Born To Code T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.572673000.3413/ra%2Cunisex_tshirt%2Cx1850%2C101010%3A01c5ca27c6%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/keeponcoding/works/31978109-born-to-code?p=t-shirt',
                'price' => 19.90,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'i-code-there-for-i-am-t-shirt',
                'title' => 'I Code There For I Am T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.480066551.6190/ra%2Cunisex_tshirt%2Cx1850%2C101010%3A01c5ca27c6%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/abstractee/works/29406190-i-code-therefore-i-am?p=t-shirt',
                'price' => 19.90,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'code-is-strong-with-this-one-t-shirt',
                'title' => 'Code Is Strong With This One T-Shirt',
                'image' => 'https://ih1.redbubble.net/image.380506615.1481/ra%2Clongsleeve%2Cx1850%2Cfafafa%3Aca443f4786%2Cfront-c%2C420%2C360%2C420%2C460-bg%2Cf8f8f8.lite-1u5.jpg',
                'url' => 'https://www.redbubble.com/people/djbalogh/works/26691481-code-is-strong-with-this-one?p=t-shirt',
                'price' => 25.52,
                'tags' => ['star-wars'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'i-have-no-life-t-shirt',
                'title' => 'I Have No Life T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.196660130.5629/ra%2Cunisex_tshirt%2Cx1850%2C101010%3A01c5ca27c6%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1u3.jpg',
                'url' => 'https://www.redbubble.com/people/bkdesign/works/21075629-programmer?p=t-shirt',
                'price' => 20.56,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'maximum-call-stack-size-exceeded-t-shirt',
                'title' => 'Maximum Call Stack Size Exceeded T-Shirt',
                'image' => 'https://ih1.redbubble.net/image.429378322.1168/ra%2Cunisex_tshirt%2Cx1850%2Cheather_grey%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/blushingcrow/works/28051168-maximum-call-stack-size-exceeded-programming?cat_context=all-departments&p=t-shirt',
                'price' => 21.14,
                'tags' => ['bear', 'funny', 'cute'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'mr-developer-t-shirt',
                'title' => 'MR. Developer T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.266527066.3866/ra%2Cunisex_tshirt%2Cx1850%2C101010%3A01c5ca27c6%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1u3.jpg',
                'url' => 'https://www.redbubble.com/people/bkdesign/works/23433866-developer?p=t-shirt',
                'price' => 20.56,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'binary-cloud-t-shirt',
                'title' => 'Binary Cloud T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.494574063.3025/ra%2Cunisex_tshirt%2Cx1850%2C9ec0d5%3A0d26d5c715%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/antoniob/works/29813025-binary-cloud?p=t-shirt',
                'price' => 23.21,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'stages-of-debugging-t-shirt',
                'title' => 'Stages Of Debugging T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.222312308.2101/ra%2Cunisex_tshirt%2Cx1850%2C353d77%3A4d8b4ffd91%2Cfront-c%2C435%2C380%2C420%2C460-bg%2Cf8f8f8.lite-1u3.jpg',
                'url' => 'https://www.redbubble.com/people/bkdesign/works/22032101-programmer?p=t-shirt',
                'price' => 20.56,
                'tags' => ['debug', 'steps'],
                'vendor' => 'redbubble'
            ]
        ]);
    }
}
