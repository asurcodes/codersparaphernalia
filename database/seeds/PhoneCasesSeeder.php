<?php

use App\Category;
use Illuminate\Database\Seeder;

class PhoneCasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'phone-cases')->first();
        $category->products()->createMany([
            [
                'slug' => 'eat-sleep-code-repeat-phone-case',
                'title' => 'Eat Sleep Code Reapeat Phone Case',
                'image' => 'https://ih1.redbubble.net/image.203303654.1478/mwo%2C420x420%2Ciphone_6_skin-pad%2C420x460%2Cf8f8f8.lite-2u1.jpg',
                'url' => 'https://www.redbubble.com/people/varthjader/works/21361478-eat-sleep-code-repeat-software-engineer-programmer-app-developer?p=iphone-case',
                'price' => 18.75,
                'tags' => ['passion'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'floppy-disc-retro-phone-case',
                'title' => 'Floppy Disk Retro Phone Case',
                'image' => 'https://ih1.redbubble.net/image.415024250.9209/mwo%2C420x420%2Ciphone_6_skin-pad%2C420x460%2Cf8f8f8.lite-2u2.jpg',
                'url' => 'https://www.redbubble.com/people/fabledcreative/works/23709209-floppy-disc-tech-retro-art?p=iphone-case',
                'price' => 18.75,
                'tags' => ['vintage', 'storage'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'apple-ascii-logo-phone-case',
                'title' => 'Apple ASCII Logo Phone Case',
                'image' => 'https://ih0.redbubble.net/image.376686514.4152/mwo%2C420x420%2Ciphone_xs_soft-pad%2C420x460%2Cf8f8f8.4u7.jpg',
                'url' => 'https://www.redbubble.com/people/kentliau/works/26584152-wwdc-2016-ascii-logo-dark-version-large-font-size?p=iphone-case',
                'price' => 19.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'css-ninja-phone-case',
                'title' => 'Css Ninja Phone Case',
                'image' => 'https://ih0.redbubble.net/image.373247610.3610/mwo%2C420x420%2Ciphone_xs_soft-pad%2C420x460%2Cf8f8f8.4u1.jpg',
                'url' => 'https://www.redbubble.com/people/manolimerch/works/25613610-css-ninja-software-development-humour-humor-webdev-coding?p=iphone-case',
                'price' => 19.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
        ]);
    }
}
