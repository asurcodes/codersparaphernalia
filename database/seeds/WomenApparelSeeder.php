<?php

use App\Category;
use Illuminate\Database\Seeder;

class WomenApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'women-apparel')->first();
        $category->products()->createMany([
            [
                'slug' => 'baby-inside-t-shirt',
                'title' => 'Baby Inside T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.618337035.0087/ra%2Cfitted_scoop%2Cx1950%2C101010%3A01c5ca27c6%2Cfront-c%2C445%2C420%2C420%2C460-bg%2Cf8f8f8.lite-4u2.jpg',
                'url' => 'https://www.redbubble.com/people/samdesigner/works/33170087-baby-inside-geek-women?p=womens-fitted-scoop',
                'price' => 29.25,
                'tags' => ['pregnant', 'intel'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'women-who-code-t-shirt',
                'title' => 'Women Who Code T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.661074988.9683/ra%2Cfitted_scoop%2Cx1950%2C101010%3A01c5ca27c6%2Cfront-c%2C445%2C420%2C420%2C460-bg%2Cf8f8f8.lite-4u1.jpg',
                'url' => 'https://www.redbubble.com/people/nasmed/works/34539683-women-who-code?p=womens-fitted-scoop',
                'price' => 29.50,
                'tags' => ['feminist'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'stem-girls-run-the-world-t-shirt',
                'title' => 'STEM Girls Run the World T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.58024135.3377/ra%2Cwomens_tshirt%2Cx2000%2Cfafafa%3Aca443f4786%2Cfront-c%2C475%2C425%2C420%2C460-bg%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/harperhoney/works/11913377-stem-girls-run-the-world?p=t-shirt',
                'price' => 21.25,
                'tags' => ['stem', 'feminist'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'talk-data-to-me-t-shirt',
                'title' => 'Talk Data to Me T-Shirt',
                'image' => 'https://ih1.redbubble.net/image.102926011.8763/ra%2Cfitted_scoop%2Cx1950%2Cfafafa%3Aca443f4786%2Cfront-c%2C445%2C420%2C420%2C460-bg%2Cf8f8f8.lite-4.jpg',
                'url' => 'https://www.redbubble.com/people/flashman/works/16628763-talk-data-to-me?p=womens-fitted-scoop',
                'price' => 29.50,
                'tags' => ['funny', 'bigdata', 'data-science'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'i-are-programmer-contrast-tank-top',
                'title' => 'I Are Programmer Contrast Tank Top',
                'image' => 'https://ih1.redbubble.net/image.524088028.1012/ctkr%2Cx1850%2Cfront%2Cblack-c%2C410%2C440%2C420%2C460-bg%2Cf8f8f8.lite-2u1.jpg',
                'url' => 'https://www.redbubble.com/people/thedeltafighter/works/30641012-i-are-programmer?p=contrast-tank',
                'price' => 29.16,
                'tags' => ['cat', 'cute'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'dont-worry-im-from-tech-support-sweatshirt',
                'title' => 'I\'m From Tech Support Sweatshirt',
                'image' => 'https://ih1.redbubble.net/image.292722694.8297/lrs%2Cx1850%2Cblack_lightweight_raglan_sweatshirt%2Cfront%2Cwoman-c%2C385%2C400%2C420%2C460-bg%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/offensivefun/works/24188297-im-from-tech-support?p=lightweight-raglan-sweatshirt',
                'price' => 39.59,
                'tags' => ['cat', 'cute'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'retro-gamer-consoles-chiffon-top',
                'title' => 'Retro Gamer Consoles Chiffon Top',
                'image' => 'https://ih0.redbubble.net/image.348612621.3213/ctr%2Cx2100%2Cfront%2Cblack-c%2C500%2C500%2C420%2C460-bg%2Cf8f8f8.lite-4u4.jpg',
                'url' => 'https://www.redbubble.com/people/jbericat/works/24023213-retro-gamer-video-game-consoles-pcs-controllers-joysticks-and-gamepads?p=chiffon-top',
                'price' => 29.16,
                'tags' => ['vintage', 'consoles', 'atari', 'pacman', 'nintendo64', 'nes'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'github-octocat-relaxed-fit-t-shirt',
                'title' => 'Github Octocat Relaxed Fit T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.722281402.9045/ra%2Crelaxed_fit%2Cx1950%2C101010%3A01c5ca27c6%2Cfront-c%2C439%2C430%2C420%2C460-bg%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/cadcamcaefea/works/36259045-github-octocat-black?p=womens-relaxed-fit',
                'price' => 29.50,
                'tags' => ['github', 'open-source'],
                'vendor' => 'redbubble'
            ]
        ]);
    }
}
