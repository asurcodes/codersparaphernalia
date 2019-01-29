<?php

use App\Category;
use Illuminate\Database\Seeder;

class BagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'bags')->first();
        $category->products()->createMany([
            [
                'slug' => 'code-mandala-react-tote-bag',
                'title' => 'Code Mandala - React Framework Tote Bag',
                'image' => 'https://ih0.redbubble.net/image.470867188.7650/tb%2C850x840%2Csmall-c%2C0%2C30%2C0%2C0-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/charline-m/works/29137650-code-mandala-react-framework?p=tote-bag',
                'price' => 20.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'give-me-a-br-bag',
                'title' => 'Give Me A <BR> Bag',
                'image' => 'https://ih0.redbubble.net/image.218853753.1653/drawstring_bag%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u5.jpg',
                'url' => 'https://www.redbubble.com/people/coolfuntees/works/21921653-give-me-a-br-break?p=drawstring-bag',
                'price' => 30.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'bug-hunter-bag',
                'title' => 'Bug Hunter Bag',
                'image' => 'https://ih0.redbubble.net/image.201348264.0690/drawstring_bag%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u13.jpg',
                'url' => 'https://www.redbubble.com/people/ramiro/works/14160690-bug-hunter-with-keyboard-design-for-test-engineers-white-font?p=drawstring-bag',
                'price' => 31.25,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'it-bunneh-tote-bag',
                'title' => 'IT Bunneh Tote Bag',
                'image' => 'https://ih1.redbubble.net/image.623001989.6654/tb%2C850x840%2Csmall-c%2C0%2C30%2C0%2C0-pad%2C420x460%2Cf8f8f8.lite-1u6.jpg',
                'url' => 'https://www.redbubble.com/people/cutiefulc/works/33416654-it-bunneh?&p=tote-bag',
                'price' => 20.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-tote-bag',
                'title' => 'Programmer Tote Bag',
                'image' => 'https://ih1.redbubble.net/image.410454984.4236/tb%2C850x840%2Csmall-c%2C0%2C30%2C0%2C0-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/angleatrinh/works/27534236-programmer?p=tote-bag',
                'price' => 22.67,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-no-body-knows-pouch-bag',
                'title' => 'Programmer - No Body Knows Pouch',
                'image' => 'https://ih0.redbubble.net/image.380738370.8093/pr%2C150x100%2C420x-c%2C0%2C40%2C420%2C460-bg%2Cf8f8f8.2.jpg',
                'url' => 'https://www.redbubble.com/people/elinamamask/works/26698093-programmer-no-body-knows?p=pouch',
                'price' => 14.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'will-code-for-beer-bag',
                'title' => 'Will Code For Beer Bag',
                'image' => 'https://ih0.redbubble.net/image.645816372.3271/drawstring_bag%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/behindurshades/works/34133271-programmer?p=drawstring-bag',
                'price' => 40.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'wq-vim-tote-bag',
                'title' => 'WQ Vim Tore Bag',
                'image' => 'https://ih0.redbubble.net/image.502992671.0210/tb%2C850x840%2Csmall-c%2C0%2C30%2C0%2C0-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/nomeinteresa/works/30050210-programmer?p=tote-bag',
                'price' => 20.00,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
        ]);
    }
}
