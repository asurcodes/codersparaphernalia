<?php

use App\Category;
use Illuminate\Database\Seeder;

class MugsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'mugs')->first();
        $category->products()->createMany([
            [
                'slug' => 'hello-world-mug',
                'title' => 'Hello World Mug',
                'image' => 'https://ih1.redbubble.net/image.429012651.2283/mug%2Cstandard%2C420x460%2Cright-pad%2C420x460%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/hyperlexia/works/28042283-hello-world-2?p=mug',
                'price' => 15.60,
                'tags' => ['programming'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'look-of-disapproval-try-to-reset-travel-mug',
                'title' => 'Look of Disapproval Try to Reset Travel Mug',
                'image' => 'https://ih0.redbubble.net/image.195829480.9361/mug%2Ctravel%2C420x460%2Ccenter-pad%2C420x460%2Cf8f8f8.lite-2u13.jpg',
                'url' => 'https://www.redbubble.com/people/ramiro/works/19689361-look-of-disapproval-have-you-tried-turning-it-off-and-on-again?p=travel-mug',
                'price' => 26.04,
                'tags' => ['reset', 'donger', 'funny'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'im-a-purrgrammer-tall-mug',
                'title' => 'I\'m a Purrgrammer Tall Mug',
                'image' => 'https://ih1.redbubble.net/image.292626597.5603/mug%2Ctall%2C420x460%2Ccenter-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/offensivefun/works/24185603-im-a-purrgrammer?p=mug',
                'price' => 16.25,
                'tags' => ['cat', 'cute'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'code-for-mug-use',
                'title' => 'Code for Mug Use',
                'image' => 'https://ih0.redbubble.net/image.34862236.0178/mug%2Cstandard%2C420x460%2Cleft-pad%2C420x460%2Cf8f8f8.lite-1u4.jpg',
                'url' => 'https://www.redbubble.com/people/adthebad/works/12930178-code-for-mug-use-tea?p=mug',
                'price' => 15.60,
                'tags' => ['refill', 'code'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'documentation-is-like-sex-travel-mug',
                'title' => 'Documentation Is Like Sex Travel Mug',
                'image' => 'https://ih1.redbubble.net/image.422995484.3135/mug%2Ctravel%2C420x460%2Ccenter-pad%2C420x460%2Cf8f8f8.lite-2u1.jpg',
                'url' => 'https://www.redbubble.com/people/springforce/works/27883135-documentation-is-like-sex-funny-programming-jokes-light-color?p=travel-mug',
                'price' => 25.00,
                'tags' => ['funny', 'nsfw'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-mug',
                'title' => 'Programmer-mug',
                'image' => 'https://ih0.redbubble.net/image.597408604.8616/mug%2Cstandard%2C420x460%2Cright-pad%2C420x460%2Cf8f8f8.lite-1u3.jpg',
                'url' => 'https://www.redbubble.com/people/developer-gifts/works/32648616-programmer?p=mug',
                'price' => 16.64,
                'tags' => ['minimal'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'eight-bit-open-source-sorcerer-mug',
                'title' => '8-bit Open Source Sorcerer Mug',
                'image' => 'https://ih0.redbubble.net/image.429378891.9941/mug%2Cstandard%2C210x230%2Cleft-pad%2C210x230%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/blushingcrow/works/28049941-8-bit-open-source-sorcerer-programming?p=mug',
                'price' => 16.58,
                'tags' => ['wizard', 'cute', 'funny'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'galaxy-travel-mug',
                'title' => 'Galaxy Travel Mug',
                'image' => 'https://ih0.redbubble.net/image.200785598.3296/mug%2Ctravel%2C420x460%2Ccenter-pad%2C420x460%2Cf8f8f8.lite-2.jpg',
                'url' => 'https://www.redbubble.com/people/castielcat/works/21253296-galaxy-space-nebula-stars-print?p=travel-mug',
                'price' => 25.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ]
        ]);
    }
}
