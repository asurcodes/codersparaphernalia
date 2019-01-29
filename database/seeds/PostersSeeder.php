<?php

use App\Category;
use Illuminate\Database\Seeder;

class PostersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'posters')->first();
        $category->products()->createMany([
            [
                'slug' => 'original-gameboy-patent-poster',
                'title' => 'Original GameBoy patent poster',
                'image' => 'https://i.etsystatic.com/12764879/r/il/80dd37/1747358880/il_1140xN.1747358880_2ynd.jpg',
                'url' => 'https://www.etsy.com/listing/630932852/game-boy-patent-print-patent-patent',
                'price' => 6.66,
                'tags' => ['gameboy', 'patent'],
                'vendor' => 'etsy'
            ],
            [
                'slug' => 'binary-rain-poster',
                'title' => 'Binary rain poster',
                'image' => 'https://ih1.redbubble.net/image.271865433.7314/poster%2C420x415%2Cf8f8f8-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/makpecetet/works/23597314-programmer?p=poster',
                'price' => 12.36,
                'tags' => ['binary', 'cloud'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'ada-lovelace-rainbow-of-microchips-poster',
                'title' => 'Ada Lovelace microhips rainbow poster',
                'image' => 'https://ih0.redbubble.net/image.187891216.6311/poster%2C420x415%2Cf8f8f8-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/unitshifter/works/20706311-ada-lovelace-rainbow-of-microchips?p=poster',
                'price' => 12.36,
                'tags' => ['ada-lovelace'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'i-love-big-data-poster',
                'title' => 'I love Big Data poster',
                'image' => 'https://ih1.redbubble.net/image.207398972.6450/poster%2C420x415%2Cf8f8f8-pad%2C420x460%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/apropas/works/21526450-big-data?p=poster',
                'price' => 12.36,
                'tags' => ['big-data', 'funny', 'pun'],
                'vendor' => 'redbubble'
            ],
        ]);
    }
}
