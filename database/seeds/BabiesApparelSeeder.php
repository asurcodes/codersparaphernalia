<?php

use App\Category;
use Illuminate\Database\Seeder;

class BabiesApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'babies-apparel')->first();
        $category->products()->createMany([
            [
                'slug' => 'hello-world-baby-tee',
                'title' => 'Hello World Baby Tee',
                'image' => 'https://ih0.redbubble.net/image.734699380.7978/ra%2Cbaby_tee%2Cx520%2CFFFFFF%3A97ab1c12de%2Cfront-pad%2C420x460%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/onrcnoz/works/36607978-hello-world-programmer-baby-newborn?p=kids-clothes',
                'price' => 19.04,
                'tags' => ['funny', 'new-born'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'future-computer-programmer-tee',
                'title' => 'Future Computer Programmer Baby Tee',
                'image' => 'https://ih1.redbubble.net/image.176926121.5463/ra%2Cbaby_tee%2Cx520%2CFFFFFF%3A97ab1c12de%2Cfront-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/reallyawesome/works/20155463-future-computer-programmer-like-my-daddy?p=kids-clothes',
                'price' => 19.74,
                'tags' => ['new-born', 'daddy'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'son-of-a-coder-baby-tee',
                'title' => 'Son Of A Coder Baby Tee',
                'image' => 'https://ih0.redbubble.net/image.397051594.5483/ra%2Cbaby_tee%2Cx520%2CFFFFFF%3A97ab1c12de%2Cfront-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/lukassfr/works/27155483-son-of-a-coder-baby?p=kids-clothes',
                'price' => 16.92,
                'tags' => ['new-born', 'funny'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'qr-cell-phone-cams-are-bad-for-babies-baby-tee',
                'title' => 'QR - "Cell Phone Cams Are Bad For Babies!" Baby Tee',
                'image' => 'https://ih0.redbubble.net/image.641557889.1285/ra%2Cbaby_tee%2Cx520%2CFFFFFF%3A97ab1c12de%2Cfront-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/the-end/works/34001285-qr-cell-phone-cams-are-bad-for-babies?p=kids-clothes',
                'price' => 16.92,
                'tags' => ['new-born', 'funny'],
                'vendor' => 'redbubble'
            ],
        ]);
    }
}
