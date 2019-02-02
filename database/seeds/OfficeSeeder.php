<?php

use App\Category;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'office')->first();
        $category->products()->createMany([
            [
                'slug' => 'vivo-height-adjustable-standing-desk',
                'title' => 'VIVO Height Adjustable Standing Desk',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/5124YEYvRJL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2ToeaeZ',
                'price' => 189.99,
                'tags' => ['desk', 'health', 'ergonomic', 'manual'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'bekant-ikea-hydraulic-standing-desk',
                'title' => 'Bekant Ikea Hydraulic Standing Desk',
                'image' => 'https://www.ikea.com/PIAimages/0687372_PE722066_S3.JPG',
                'url' => 'https://www.ikea.com/us/en/catalog/products/S49022538/#/S99282086',
                'price' => 449.00,
                'tags' => ['desk', 'health', 'ergonomic', 'electric'],
                'vendor' => 'other'
            ],
            [
                'slug' => 'wooden-monitor-riser-shelf',
                'title' => 'Wooden Monitor Riser Shelf with Storage',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41yFemZrX2L._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2WBhq8x',
                'price' => 36.99,
                'tags' => ['organization', 'desk', 'screen', 'ergonomic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'vivo-dual-monitor-mount',
                'title' => 'VIVO Dual Monitor Mount',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31Zj01ONnKL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2S417Cw',
                'price' => 29.99,
                'tags' => ['organization', 'desk', 'screen', 'ergonomic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'gaiam-classic-balance-ball-chair',
                'title' => 'Gaiam Classic Ergonomic Balance Ball Chair',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41nhvTOvU2L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2sXz354',
                'price' => 59.99,
                'tags' => ['health', 'ergonomic', 'back'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'modway-articulate-ergonomic-mesh-office-chair',
                'title' => 'Modway Articulate Ergonomic Mesh Office Chair',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41qGeW2dOvL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2TqIqpu',
                'price' => 135.50,
                'tags' => ['health', 'ergonomic', 'back'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'sleekform-ergonomic-kneeling-office-chair',
                'title' => 'Sleekform Ergonomic Kneeling Office Chair',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31OpSrwO05L._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2DNwmck',
                'price' => 27.99,
                'tags' => ['health', 'ergonomic', 'back'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'ergodriven-standing-desk-antifatigue-mat',
                'title' => 'ErgoDriven Standing Desk Anti-Fatigue Mat',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/51gf2EfwKuL._AC_US320_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Bf615k',
                'price' => 99.00,
                'tags' => ['health', 'ergonomic'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'dry-erase-whiteboard',
                'title' => 'Dry Erase Whiteboard, Non-Magnetic, 36"x24"',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31l2vPnXARL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2WB86Sd',
                'price' => 29.99,
                'tags' => ['board'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'quartet-tempered-glass-white-board',
                'title' => 'Quartet Tempered Glass Whiteboard 3\'x2\'',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/31Kj21QuWhL._AC_US436_QL65_.jpg',
                'url' => 'https://amzn.to/2Uuwini',
                'price' => 56.45,
                'tags' => ['board', 'schematics'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'rocketbook-wave-reusable-smart-notebook',
                'title' => 'Rocketbook Wave Reusable Smart Notebook',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41yJlMdy9OL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2Wu4Bgm',
                'price' => 27.00,
                'tags' => ['environmentally-friendly', 'reusable', 'smart'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'levoit-air-purifier',
                'title' => 'LEVOIT Air Purifier with HEPA Filter, Odor, Allergies Smoke, Dust, Mold Eliminator',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/41QTAu6KexL._AC_US436_FMwebp_QL65_.jpg',
                'url' => 'https://amzn.to/2DRukIt',
                'price' => 89.99,
                'tags' => ['health'],
                'vendor' => 'amazon'
            ],
            [
                'slug' => 'original-gameboy-patent-poster',
                'title' => 'Original GameBoy Patent Poster 24"x36"',
                'image' => 'https://i.etsystatic.com/15445335/d/il/16a9a1/1479397463/il_340x270.1479397463_4rla.jpg?version=0',
                'url' => 'https://www.etsy.com/listing/581168900/gameboy-patent-print-gameboy-inventions?ga_order=most_relevant&ga_search_type=all&ga_view_type=gallery&ga_search_query=gameboy+patent&ref=sr_gallery-1-3&frs=1&col=1',
                'price' => 37.95,
                'tags' => ['decoration', 'vintage', 'gameboy', 'patent'],
                'vendor' => 'etsy'
            ],
            [
                'slug' => 'shhhh-im-thinking-poster',
                'title' => 'Shhhh I\'m Thinking Poster 24"x36"',
                'image' => 'https://i.etsystatic.com/14740316/c/931/740/334/234/il/0c505e/1216444973/il_340x270.1216444973_eaas.jpg',
                'url' => 'https://www.etsy.com/listing/505772670/cubicle-decor-office-wall-art-office',
                'price' => 34.52,
                'tags' => ['decoration', 'silence'],
                'vendor' => 'etsy'
            ],
            [
                'slug' => 'the-only-place-vintage-art-print',
                'title' => 'The only place success comes before work Vintage Art Print',
                'image' => 'https://i.etsystatic.com/16526343/d/il/45c053/1455191184/il_340x270.1455191184_auvb.jpg?version=0',
                'url' => 'https://www.etsy.com/listing/587454380/vintage-dictionary-art-print-the-only',
                'price' => 10.00,
                'tags' => ['decoration', 'motivational'],
                'vendor' => 'etsy'
            ],
            [
                'slug' => 'programmer-street-sign',
                'title' => 'Programmer Street Sign',
                'image' => 'https://i.etsystatic.com/15308963/d/il/2ce1e6/1295840734/il_340x270.1295840734_edgt.jpg?version=0',
                'url' => 'https://www.etsy.com/listing/543976668/programmer-programmer-gift-programmer',
                'price' => 16.99,
                'tags' => ['decoration', 'sing'],
                'vendor' => 'etsy'
            ],
        ]);
    }
}
