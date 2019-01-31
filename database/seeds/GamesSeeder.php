<?php

use App\Category;
use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'games')->first();
        $category->products()->createMany([
            [
                'slug' => 'metro-last-light-redux-steam-game-key',
                'title' => 'Metro: Last Light Redux',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/f22d1d9a57a2/591269ceae653abc6c1db485',
                'url' => 'https://www.g2a.com/en-us/metro-last-light-redux-steam-key-global-i10000000633010',
                'price' => 8.28,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'metro-2033-redux-game-key',
                'title' => 'Metro 2033 Redux',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/e800245d684e/59120b59ae653af8d30fc406',
                'url' => 'https://www.g2a.com/en-us/metro-2033-redux-steam-key-global-i10000004113009',
                'price' => 10.02,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'fallout-new-vegas-ultimate-edition-game-key',
                'title' => 'Fallout: New Vegas Ultimate Edition',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/66f48e30d32e/590e436e5bafe3f4641590b6',
                'url' => 'https://www.g2a.com/en-us/fallout-new-vegas-ultimate-edition-steam-key-global-i10000002212009',
                'price' => 12.23,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'hollow-knight-game-key',
                'title' => 'Hollow Knight',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/bf1089b97f2a/5912ca775bafe38edc0fe6f6',
                'url' => 'https://www.g2a.com/en-us/hollow-knight-steam-key-global-i10000034437006',
                'price' => 9.19,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'the-elder-scrolls-v-skyrim-game-key',
                'title' => 'The Elder Scrolls V: Skyrim - Legendary Edition',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/d5ca443b5e2f/590e480cae653ae97f0f47de',
                'url' => 'https://www.g2a.com/en-us/the-elder-scrolls-v-skyrim-legendary-edition-steam-key-global-i10000006706011',
                'price' => 13.84,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'doom-game-key',
                'title' => 'DOOM',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/40687a4fba21/5912d667ae653a98cb5745ac',
                'url' => 'https://www.g2a.com/en-us/doom-steam-key-global-i10000002155012',
                'price' => 12.23,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'terraria-game-key',
                'title' => 'Terraria',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/d0cf8e126312/591065f6ae653a5dcf684dca',
                'url' => 'https://www.g2a.com/en-us/terraria-steam-key-global-i10000000238012',
                'price' => 6.70,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'kerbal-space-program',
                'title' => 'Kerbal Space Program',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/0fe36c72b0fa/5aaa8cae5bafe36f357d38a3',
                'url' => 'https://www.g2a.com/en-us/kerbal-space-program-steam-key-global-i10000014989005',
                'price' => 12.56,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'xcom-2',
                'title' => 'XCOM 2',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/8436837947d4/5912da0e5bafe3b24035ea35',
                'url' => 'https://www.g2a.com/xcom-2-steam-key-global-i10000002469011',
                'price' => 11.77,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'dont-starve-together',
                'title' => 'Don\'t Starve Together',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/73734d4694f1/591211a0ae653a05e711d0bf',
                'url' => 'https://www.g2a.com/dont-starve-together-steam-key-global-i10000001104009',
                'price' => 10.36,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'the-witcher-3-wild-hunt',
                'title' => 'The Witcher 3: Wild Hunt',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/06114476276e/59108976ae653aa55c6ac1f2',
                'url' => 'https://www.g2a.com/the-witcher-3-wild-hunt-goty-edition-gogcom-key-global-i10000026141012',
                'price' => 24.67,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ],
            [
                'slug' => 'superhot',
                'title' => 'SUPERHOT',
                'image' => 'https://images.g2a.com/newlayout/323x433/1x1x0/2a53cdcdc7a3/590ec6e95bafe3fc7f0e1a71',
                'url' => 'https://www.g2a.com/superhot-steam-key-global-i10000011436010',
                'price' => 6.20,
                'tags' => ['steam'],
                'vendor' => 'g2a'
            ]
        ]);
    }
}
