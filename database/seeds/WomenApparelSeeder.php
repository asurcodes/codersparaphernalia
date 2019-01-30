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
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'women-who-code-t-shirt',
                'title' => 'Women Who Code T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.661074988.9683/ra%2Cfitted_scoop%2Cx1950%2C101010%3A01c5ca27c6%2Cfront-c%2C445%2C420%2C420%2C460-bg%2Cf8f8f8.lite-4u1.jpg',
                'url' => 'https://www.redbubble.com/people/nasmed/works/34539683-women-who-code?p=womens-fitted-scoop',
                'price' => 29.50,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'stem-girls-run-the-world-t-shirt',
                'title' => 'STEM Girls Run the World T-Shirt',
                'image' => 'https://ih0.redbubble.net/image.58024135.3377/ra%2Cwomens_tshirt%2Cx2000%2Cfafafa%3Aca443f4786%2Cfront-c%2C475%2C425%2C420%2C460-bg%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/harperhoney/works/11913377-stem-girls-run-the-world?p=t-shirt',
                'price' => 21.25,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'talk-data-to-me-t-shirt',
                'title' => 'Talk Data to Me T-Shirt',
                'image' => 'https://ih1.redbubble.net/image.102926011.8763/ra%2Cfitted_scoop%2Cx1950%2Cfafafa%3Aca443f4786%2Cfront-c%2C445%2C420%2C420%2C460-bg%2Cf8f8f8.lite-4.jpg',
                'url' => 'https://www.redbubble.com/people/flashman/works/16628763-talk-data-to-me?p=womens-fitted-scoop',
                'price' => 29.50,
                'tags' => [],
                'vendor' => 'redbubble'
            ],
        ]);
    }
}
