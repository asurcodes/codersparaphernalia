<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'slug' => 'stickers',
                'name' => 'Stickers',
                'image' => 'https://placehold.it/600x600',
                'description' => 'If there is something programmers love is to put sticker on everything.',
                'meta_title' => 'The best selection of stickers to gift programmers',
                'meta_description' => 'If there is something programmers love is to put sticker on everything, buy a bunch of these and they will love you forever.',
                'long_description' => 'If there is something programmers love is to put sticker on everything, our laptop, our screen or our water bottle, this is one of the best categories for it\'s incredible variety and affordability, there is no chance of failure',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'posters',
                'name' => 'Posters',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Hang them on the wall to remind you always who you are and what your passion is',
                'meta_title' => 'The best selection of posters to gift programmers',
                'meta_description' => 'Hang them on the wall to remind you always who you are and what your passion is',
                'long_description' => 'Hang them on the wall to remind you always who you are and what your passion is. These are cool and colorful posters that can make a simple gift but always on display, making sure you get remembered every time they look at it.',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'periferals',
                'name' => 'Periferals',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Any professional needs the right tools to perform at it\'s fullest potential, gift some hardware.',
                'meta_title' => 'The best selection of periferals to gift programmers',
                'meta_description' => 'Any professional needs the right tools to perform at it\'s fullest potential, gift some hardware.',
                'long_description' => 'Any professional needs the right tools to perform at it\'s fullest potential, look here for the stuff required to do so, gift some hardware.',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'books',
                'name' => 'Books',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Knownledge is power, books are a great way to acquire it',
                'meta_title' => 'The best selection of books to gift programmers',
                'meta_description' => 'Knownledge is power, books are a great way to acquire it',
                'long_description' => 'Knownledge is power, the more you know, the more you can succeed in every single aspect of your life, books are a great way to acquire it. Remember leaders are readers.',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'gadgets',
                'name' => 'Gadgets',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Discover new useful and cool items (well, not always that useful) that make our lifes more fun',
                'meta_title' => 'The best selection of gadgets to gift programmers',
                'meta_description' => 'Discover new useful and cool items (well, not always that useful) that make our lifes more fun',
                'long_description' => 'We love to tinker around and discover new useful and cool items (well, not always that useful) that make our lifes more fun and enjoyable. This category embodies the original motto of this website, and as so we have a special care with items end up here, you won\'t be disappointed.',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'games',
                'name' => 'Games',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Let\'s face it, many of us still carry a kid inside, and kids love their videogames',
                'meta_title' => 'The best selection of games to gift programmers',
                'meta_description' => 'Let\'s face it, many of us still carry a kid inside, and kids love their videogames',
                'long_description' => 'Let\'s face it, many of us still carry a kid inside, and kids love their videogames and can also be used to get rid of us for several hours. All advantages.',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'courses',
                'name' => 'Courses',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Couses allow you to progress at a faster rate in your pursuit of excellence',
                'meta_title' => 'The best selection of courses to gift programmers',
                'meta_description' => 'Couses allow you to progress at a faster rate in your pursuit of excellence',
                'long_description' => 'Books are really cool but self-taught knowledge takes more time and don\'t forget about practicing, couses allow you to progress at a faster rate in your pursuit of excellence.',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'miscelaneous',
                'name' => 'Miscelaneous',
                'image' => 'https://placehold.it/600x600',
                'description' => 'These are the products that we love but we don\'t really have a category for',
                'meta_title' => 'The best selection of miscelaneous items to gift programmers',
                'meta_description' => 'These are the products that we love but we don\'t really have a category for',
                'long_description' => 'Lorem ipsum',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'bags',
                'name' => 'Bags',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Finally a way to empty your pockets and carry all your stuff in an ordered manner',
                'meta_title' => 'The best selection of bags to gift programmers',
                'meta_description' => 'Finally a way to empty your pockets and carry all your stuff in an ordered manner',
                'long_description' => 'Finally a way to empty your pockets and carry all your stuff in an ordered manner. You can carry your laptop, headphones and glasses on your back, no more looking like a Christmas tree in front of your pears!',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'men-apparel',
                'name' => 'Men Apparel',
                'image' => 'https://placehold.it/600x600',
                'description' => 'We aren\'t really well known for our good styling skills, here you have the solution',
                'meta_title' => 'The best selection of men clothes and accesories to gift programmers',
                'meta_description' => 'We aren\'t really well known for our good styling skills, here you have the solution',
                'long_description' => 'We aren\'t really well known for our good styling skills, here you have the solution',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'women-apparel',
                'name' => 'Women Apparel',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Level up your game and show off with these trendy clothes',
                'meta_title' => 'The best selection of women clothes and accesories to gift programmers',
                'meta_description' => 'Level up your game and show off with these trendy clothes',
                'long_description' => 'Level up your game and show off with these trendy clothes',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'babies-apparel',
                'name' => 'Babies Apparel',
                'image' => 'https://placehold.it/600x600',
                'description' => 'The earlier they start the better, put them on some clothes and let it start soaking in',
                'meta_title' => 'The best selection of baby clothes and accesories to gift programmers',
                'meta_description' => 'The earlier they start the better, put them on some clothes and let it start soaking in',
                'long_description' => 'The earlier they start the better, put them on some clothes and let it start soaking in',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'phone-cases',
                'name' => 'Phone cases',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Now a days our entire life is on our smartphone, protecting it is important, do it with style',
                'meta_title' => 'The best selection of phone cases to gift programmers',
                'meta_description' => 'Now a days our entire life is on our smartphone, protecting it is important, do it with style',
                'long_description' => 'Now a days our entire life is on our smartphone, protecting it is important, do it with style',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'laptop-cases',
                'name' => 'Laptop cases',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Cool looking cases and skins for a programmers best friend',
                'meta_title' => 'The best selection of laptop cases to gift programmers',
                'meta_description' => 'Cool looking cases and skins for a programmers best friend',
                'long_description' => 'Cool looking cases and skins for a programmers best friend',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'mugs',
                'name' => 'Mugs',
                'image' => 'https://placehold.it/600x600',
                'description' => 'We love our coffee, we don\'t get paid with it tho, those designs are JOKES',
                'meta_title' => 'The best selection of mugs to gift programmers',
                'meta_description' => 'We love our coffee, we don\'t get paid with it tho, those designs are JOKES',
                'long_description' => 'We love our coffee, we don\'t get paid with it tho, those designs are JOKES',
                'related' => json_encode([1, 2, 3, 4])
            ],
            [
                'slug' => 'computers',
                'name' => 'Computers',
                'image' => 'https://placehold.it/600x600',
                'description' => 'What would we do without our trusty daily computer? A selection of laptops in all price ranges',
                'meta_title' => 'The best selection of computers to gift programmers',
                'meta_description' => 'What would we do without our trusty daily computer? A selection of laptops in all price ranges with specs carely chosen with programming in mind.',
                'long_description' => 'What would we do without our trusty daily computer? A selection of laptops in all price ranges with specs carely chosen with programming in mind.',
                'related' => json_encode([1, 2, 3, 4])
            ],
        ]);
    }
}
