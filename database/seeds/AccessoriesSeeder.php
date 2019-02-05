<?php

use App\Category;
use Illuminate\Database\Seeder;

class AccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'accessories')->first();
        $category->products()->createMany([
            [
                'slug' => 'vaschy-classic-laptop-backpack',
                'title' => 'Vaschy Unisex Classic 14Inch Laptop Backpack',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41iIspM9DyL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2tfog6x',
                'price' => 28.99,
                'tags' => ['schoolbag', 'student'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'thule-paramount-daypack',
                'title' => 'Thule Paramount 15Inch Laptop Daypack',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41K0UHD88fL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2G8JM5n',
                'price' => 129.99,
                'tags' => ['backpack', 'nylon'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'incase-icon-pack',
                'title' => 'Incase 15Inch Icon Pack',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31Mi7D4+WcL._AC_US218_.jpg',
                'url' => 'https://amzn.to/2G8JT0N',
                'price' => 199.95,
                'tags' => ['backpack', 'nylon'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'the-north-face-borealis-backpack',
                'title' => 'The North Face Borealis 15Inch Laptop Backpack',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51ZZObFKWSL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2GavtNy',
                'price' => 88.95,
                'tags' => ['backpack', 'nylon'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'give-me-a-br-bag',
                'title' => 'Give Me A <BR> Bag',
                'image' => 'https://ih0.redbubble.net/image.218853753.1653/drawstring_bag%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u5.jpg',
                'url' => 'https://www.redbubble.com/people/coolfuntees/works/21921653-give-me-a-br-break?p=drawstring-bag',
                'price' => 30.00,
                'tags' => ['html', 'tag', 'funny'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'bug-hunter-bag',
                'title' => 'Bug Hunter Bag',
                'image' => 'https://ih0.redbubble.net/image.201348264.0690/drawstring_bag%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u13.jpg',
                'url' => 'https://www.redbubble.com/people/ramiro/works/14160690-bug-hunter-with-keyboard-design-for-test-engineers-white-font?p=drawstring-bag',
                'price' => 31.25,
                'tags' => ['debug'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'will-code-for-beer-bag',
                'title' => 'Will Code For Beer Bag',
                'image' => 'https://ih0.redbubble.net/image.645816372.3271/drawstring_bag%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/behindurshades/works/34133271-programmer?p=drawstring-bag',
                'price' => 40.00,
                'tags' => ['beer', 'retro', 'funny'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'ada-lovelace-rainbow-of-microchips-bag',
                'title' => 'Ada Lovelace - Rainbow of Microchips Bag',
                'image' => 'https://ih0.redbubble.net/image.208983572.6311/drawstring_bag%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/unitshifter/works/20706311-ada-lovelace-rainbow-of-microchips?p=drawstring-bag',
                'price' => 30.00,
                'tags' => ['ada', 'women', 'lovelace'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'it-bunneh-tote-bag',
                'title' => 'IT Bunneh Tote Bag',
                'image' => 'https://ih1.redbubble.net/image.623001989.6654/tb%2C850x840%2Csmall-c%2C0%2C30%2C0%2C0-pad%2C420x460%2Cf8f8f8.lite-1u6.jpg',
                'url' => 'https://www.redbubble.com/people/cutiefulc/works/33416654-it-bunneh?&p=tote-bag',
                'price' => 20.00,
                'tags' => ['cute', 'apple'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-tote-bag',
                'title' => 'Programmer Tote Bag',
                'image' => 'https://ih1.redbubble.net/image.410454984.4236/tb%2C850x840%2Csmall-c%2C0%2C30%2C0%2C0-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/angleatrinh/works/27534236-programmer?p=tote-bag',
                'price' => 22.67,
                'tags' => ['bussiness', 'idea', 'programmer'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'code-mandala-react-tote-bag',
                'title' => 'Code Mandala - React Framework Tote Bag',
                'image' => 'https://ih0.redbubble.net/image.470867188.7650/tb%2C850x840%2Csmall-c%2C0%2C30%2C0%2C0-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/charline-m/works/29137650-code-mandala-react-framework?p=tote-bag',
                'price' => 20.00,
                'tags' => ['javascript', 'js', 'react', 'budist', 'modern'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'wq-vim-tote-bag',
                'title' => 'WQ Vim Tore Bag',
                'image' => 'https://ih0.redbubble.net/image.502992671.0210/tb%2C850x840%2Csmall-c%2C0%2C30%2C0%2C0-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/nomeinteresa/works/30050210-programmer?p=tote-bag',
                'price' => 20.00,
                'tags' => ['vi', 'vim', 'safe', 'quit'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-no-body-knows-pouch-bag',
                'title' => 'Programmer - No Body Knows Pouch',
                'image' => 'https://ih0.redbubble.net/image.380738370.8093/pr%2C150x100%2C420x-c%2C0%2C40%2C420%2C460-bg%2Cf8f8f8.2.jpg',
                'url' => 'https://www.redbubble.com/people/elinamamask/works/26698093-programmer-no-body-knows?p=pouch',
                'price' => 14.00,
                'tags' => ['disguise'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'kawaii-unicorn-pouch',
                'title' => 'Kawaii Unicorn Pouch',
                'image' => 'https://ih0.redbubble.net/image.727718246.6997/pr%2C150x100%2C420x-c%2C0%2C40%2C420%2C460-bg%2Cf8f8f8.2u1.jpg',
                'url' => 'https://www.redbubble.com/people/cadcamcaefea/works/36416997-kawaii-unicorn?p=pouch',
                'price' => 12.00,
                'tags' => ['cute'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-ninja-pouch',
                'title' => 'Programmer Ninja Pouch',
                'image' => 'https://ih1.redbubble.net/image.617418535.6488/pr%2C150x100%2C420x-c%2C0%2C40%2C420%2C460-bg%2Cf8f8f8.2u1.jpg',
                'url' => 'https://www.redbubble.com/people/handcraftline/works/33216488-programmer-ninja-programmer?p=pouch',
                'price' => 12.30,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'born-to-code-forced-to-work-pouch',
                'title' => 'Born To Code, Forced to Work Pouch',
                'image' => 'https://ih1.redbubble.net/image.349417758.4788/pr%2C150x100%2C420x-c%2C0%2C40%2C420%2C460-bg%2Cf8f8f8.2.jpg',
                'url' => 'https://www.redbubble.com/people/nomeinteresa/works/25864788-programmer?p=pouch',
                'price' => 12.00,
                'tags' => ['passion'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'developer-source-code-snapback-cap',
                'title' => 'Developer Source Code Snapback Cap',
                'image' => 'https://i.etsystatic.com/13657562/d/il/7c437e/1598351430/il_340x270.1598351430_8q6r.jpg?version=0',
                'url' => 'https://www.etsy.com/listing/624777668/front-end-developer-html-source-code',
                'price' => 34.95,
                'tags' => ['modern', 'swag'],
                'vendor' => 'etsy'
            ],
            [
                'slug' => 'html-web-developer-cap',
                'title' => 'HTML Web Developer Cap',
                'image' => 'https://i.etsystatic.com/17292434/d/il/95a742/1794335857/il_340x270.1794335857_cg3p.jpg?version=0',
                'url' => 'https://www.etsy.com/listing/675284617/html-dad-hat-web-developer-gift',
                'price' => 22.50,
                'tags' => ['dad-hat', 'funny'],
                'vendor' => 'etsy'
            ],
            [
                'slug' => 'i-love-you-binary-dog-tag-necklace',
                'title' => 'I Love You Binary Dog Tag Necklace',
                'image' => 'https://i.etsystatic.com/6253127/c/1000/794/0/147/il/f88007/1684266552/il_340x270.1684266552_qoj5.jpg',
                'url' => 'https://www.etsy.com/listing/185919057/i-love-you-binary-dog-tag-necklace',
                'price' => 39.99,
                'tags' => ['binary', 'romantic'],
                'vendor' => 'etsy'
            ],
            [
                'slug' => 'pcb-brass-necklace',
                'title' => 'PCB Brass Necklace',
                'image' => 'https://i.etsystatic.com/8178914/d/il/61950e/1702689338/il_340x270.1702689338_kq7m.jpg?version=0',
                'url' => 'https://www.etsy.com/listing/572034769/creative-necklace-geeky-pendant-real',
                'price' => 17.00,
                'tags' => ['pcb', 'brass'],
                'vendor' => 'etsy'
            ],
        ]);
    }
}
