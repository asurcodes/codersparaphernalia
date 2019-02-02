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
                'slug' => 'metro-last-light-redux-game',
                'title' => 'Metro: Last Light Redux',
                'image' => 'https://hb.imgix.net/3d602bccb5efce636847f2a162926f1f5e971ef5.jpg?auto=compress,format&fit=crop&h=353&w=616&s=660c706170a479bfd869c5f9643f10a6',
                'url' => 'https://www.humblebundle.com/store/metro-last-light-redux',
                'price' => 19.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'drm-free', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'subnautica-game',
                'title' => 'Subnautica',
                'image' => 'https://hb.imgix.net/765127d8dd9293d0e94e7095e731de37a859097d.jpg?auto=compress,format&fit=crop&h=353&w=616&s=7f9d9582c0a0a336acc25dc3bb68efae',
                'url' => 'https://www.humblebundle.com/store/subnautica',
                'price' => 22.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'fallout-new-vegas-game',
                'title' => 'Fallout: New Vegas',
                'image' => 'https://hb.imgix.net/6b5685a0e5ff23b73b05ae218c254cc1b6e13e33.jpg?auto=compress,format&fit=crop&h=353&w=616&s=c0a706e475c75ef78eb29c4bae9ec781',
                'url' => 'https://www.humblebundle.com/store/fallout-new-vegas',
                'price' => 9.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'hollow-knight-game',
                'title' => 'Hollow Knight',
                'image' => 'https://hb.imgix.net/cc1d0425d66cf5c3b6eccb2ded5f005f9e9df399.jpg?auto=compress,format&fit=crop&h=353&w=616&s=b14da2e07384c763ac67047c406548d9',
                'url' => 'https://www.humblebundle.com/store/hollow-knight',
                'price' => 14.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'drm-free', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'the-elder-scrolls-v-skyrim-game',
                'title' => 'The Elder Scrolls V: Skyrim - Legendary Edition',
                'image' => 'https://hb.imgix.net/56c03309642be6d3a455693251d3718f85706063.jpg?auto=compress,format&fit=crop&h=353&w=616&s=cff1e330cce7d86e5c89a96b200f869c',
                'url' => 'https://www.humblebundle.com/store/the-elder-scrolls-v-skyrim',
                'price' => 19.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'doom-game',
                'title' => 'DOOM',
                'image' => 'https://hb.imgix.net/f1145f13ff162ad7fdc206fed0822f68bc1b5359.jpg?auto=compress,format&fit=crop&h=353&w=616&s=25d6483201bd16f973a83ced32a796ad',
                'url' => 'https://www.humblebundle.com/store/doom',
                'price' => 19.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'terraria-game',
                'title' => 'Terraria',
                'image' => 'https://hb.imgix.net/b7c65e77a5f126a1024a8459ec0fd08f879860f1.jpg?auto=compress,format&fit=crop&h=353&w=616&s=50494c285aea6561933ceb819ed96f0b',
                'url' => 'https://www.humblebundle.com/store/terraria',
                'price' => 9.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'shovel-knight-specter-of-torment-game',
                'title' => 'Shovel Knight: Specter of Torment',
                'image' => 'https://hb.imgix.net/d8d810eacaef18b0b611aa34214b75f52bf05074.jpg?auto=compress,format&fit=crop&h=353&w=616&s=de5f6f32feefa95bdeed56960186e0c7',
                'url' => 'https://www.humblebundle.com/store/shovel-knight-specter-of-torment',
                'price' => 9.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'drm-free', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'xcom-enemy-unknown-game',
                'title' => 'XCOM: Enemy Unknown',
                'image' => 'https://hb.imgix.net/0ae5beab7bab769a8c9a3bb2a0d46453a6a2c852.jpg?auto=compress,format&fit=crop&h=353&w=616&s=4d9a704ebd826719bf29ade9e30b510c',
                'url' => 'https://www.humblebundle.com/store/xcom-enemy-unknown',
                'price' => 29.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'dont-starve-game',
                'title' => 'Don\'t Starve',
                'image' => 'https://hb.imgix.net/108faf264228f6cd4aca350beb76b5b0f8a7e6fb.jpg?auto=compress,format&fit=crop&h=353&w=616&s=abf54a535ac0d7ba63a5d536bef034b1',
                'url' => 'https://www.humblebundle.com/store/dont-starve',
                'price' => 14.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'drm-free', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'the-witcher-3-wild-hunt-game',
                'title' => 'The Witcher 3: Wild Hunt',
                'image' => 'https://hb.imgix.net/8d5f890f3135448a594155fa943e4be9bc69ef0d.jpg?auto=compress,format&fit=crop&h=353&w=616&s=85682d9e81bf92ffc686c7dcacd06d33',
                'url' => 'https://www.humblebundle.com/store/the-witcher-3-wild-hunt',
                'price' => 39.99,
                'tags' => ['play', 'gamer', 'pc', 'gog', 'windows'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'superhot',
                'title' => 'SUPERHOT',
                'image' => 'https://hb.imgix.net/cab5a8ce636b1ce89d7cf1e5112b94e2244d3d4e.jpg?auto=compress,format&fit=crop&h=353&w=616&s=d47637871199609ae872f1d05182f2b4',
                'url' => 'https://www.humblebundle.com/store/superhot',
                'price' => 24.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'the-binding-of-isaac-rebirth-game',
                'title' => 'The Binding of Isaac: Rebirth',
                'image' => 'https://hb.imgix.net/30b8f21aab8efcc6150275ddbe29f70566ab020e.jpg?auto=compress,format&fit=crop&h=353&w=616&s=92c0e7e523e500422ffdfd5d4ae82e7a',
                'url' => 'https://www.humblebundle.com/store/the-binding-of-isaac-rebirth',
                'price' => 14.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'moonlighter-game',
                'title' => 'Moonlighter',
                'image' => 'https://hb.imgix.net/2e320cfc8f963eeec76b277fdcda709b9bf832ff.jpg?auto=compress,format&fit=crop&h=353&w=616&s=8e8941ae888d356771511ee558e35496',
                'url' => 'https://www.humblebundle.com/store/moonlighter',
                'price' => 19.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'drm-free', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'the-talos-principle-game',
                'title' => 'The Talos Principle',
                'image' => 'https://hb.imgix.net/1f0658cb1a65b13ea5724ad1527065df13db3192.jpg?auto=compress,format&fit=crop&h=353&w=616&s=26ee793fa856399627ec6c5e0ffc019a',
                'url' => 'https://www.humblebundle.com/store/the-talos-principle',
                'price' => 7.99,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ],
            [
                'slug' => 'factorio-game',
                'title' => 'Factorio',
                'image' => 'https://hb.imgix.net/cb5424b775d4a6ac28320eb5b30dcc7b97963185.jpg?auto=compress,format&fit=crop&h=353&w=616&s=cf3e481fa618c41377308a1ecd902e1d',
                'url' => 'https://www.humblebundle.com/store/factorio',
                'price' => 30.00,
                'tags' => ['play', 'gamer', 'pc', 'steam', 'windows', 'linux', 'macos'],
                'vendor' => 'humblebundle'
            ]
        ]);
    }
}
