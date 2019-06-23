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
                'html_description' => '
                <p>
                    If there is something programmers love is to put stickers on everything, our laptop, our screen or our water bottle, this is one of the best categories for it\'s incredible variety and affordability, there is no chance of failure.
                </p>
                <p>
                    We offer different sticker sizes through <a href="https://www.redbubble.com/">Redbubble</a>, small, medium, large and extra large, <b>being the small size price which is listed below</b> and the most suitable for most of cases.
                </p>
                ',
                'related' => json_encode(['office', 'gadgets', 'games', 'mugs'])
            ],
            [
                'slug' => 'office',
                'name' => 'Office',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Get the best gear and decor for your small sanctuary',
                'meta_title' => 'The best selection of products for the office to gift programmers',
                'meta_description' => 'Get the best gear and decor for your small sanctuary',
                'html_description' => '
                <p>
                    Our office is our sanctuary, our fortress of solitude, make your long working days more comfortable with the best gear and decor.
                </p>
                <p>
                    Also, don\'t forget about ergonomics and working hygiene, having cool items is important but since we are normally a bit workaholic is important to get ergonomic gear to avoid injuries due to prolonged bad practices. Get yourself a standing desk, raise your screens to view height and correct your back position with a cushion.
                </p>
                ',
                'related' => json_encode(['computers', 'gadgets', 'miscelaneous', 'mugs'])
            ],
            [
                'slug' => 'books',
                'name' => 'Books',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Knownledge is power, books are a great way to acquire it',
                'meta_title' => 'The best selection of books to gift programmers',
                'meta_description' => 'Knownledge is power, books are a great way to acquire it',
                'html_description' => '
                <p>
                    Knowledge is power, the more you know, the more you can succeed in every single aspect of your life, books are a great way to acquire it. These are mostly theoretical but they include practice as well. Remember leaders are readers.
                </p>
                <p>
                    These references are for <b>e-books exclusively</b> to promote sustainability, they are also an instant download, cheaper and digitalized so you can copy code snippets, it\'s a win-win. ᕕ( ՞ ᗜ ՞ )ᕗ
                </p>
                ',
                'related' => json_encode(['courses', 'accessories', 'gadgets', 'miscelaneous'])
            ],
            [
                'slug' => 'courses',
                'name' => 'Courses',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Couses allow you to progress at a faster rate in your pursuit of excellence',
                'meta_title' => 'The best selection of courses to gift programmers',
                'meta_description' => 'Couses allow you to progress at a faster rate in your pursuit of excellence',
                'html_description' => '
                <p>
                    Books are really cool but self-taught knowledge takes more time and don\'t forget about practising, courses allow you to progress at a faster rate in your pursuit of excellence. If you are a seeing leaner or reading is not your thing this is the best choice.
                </p>
                <p>
                    We refer to Udemy for it\'s variety and quality catalogue, due to the platform offers rotations we recommend you to wait for these courses to get in sale for $9.99, it may take a couple of weeks but it\'s definitely worth it.
                </p>
                ',
                'related' => json_encode(['books', 'office', 'computers', 'accessories'])
            ],
            [
                'slug' => 'gadgets',
                'name' => 'Gadgets',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Discover new useful and cool items that make our lifes more fun',
                'meta_title' => 'The best selection of gadgets to gift programmers',
                'meta_description' => 'Discover new useful and cool items that make our lifes more fun',
                'html_description' => '
                <p>
                    We love to tinker around and discover new useful and cool items (well, not always that useful) that make our lives more fun and enjoyable. This category embodies the original motto of this website, and as so we take special care with items end up here, you won\'t be disappointed.
                </p>
                ',
                'related' => json_encode(['peripherals', 'computers', 'games', 'stickers'])
            ],
            [
                'slug' => 'games',
                'name' => 'Games',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Let\'s face it, many of us still carry a kid inside, and kids love their videogames',
                'meta_title' => 'The best selection of games to gift programmers',
                'meta_description' => 'Let\'s face it, many of us still carry a kid inside, and kids love their videogames',
                'html_description' => '
                <p>
                    Let\'s face it, many of us still carry a kid inside, and kids love their videogames and can also be used to get rid of us for several hours. All advantages.
                </p>
                <p>
                    We offer <b>PC games only</b>, since every programmer already has a computer, if you want to check out if a game supports your OS search for <b>windows/linux/macos game</b> on the search form.
                </p>
                <p>
                    We use <b>HumbleBundle</b> as a vendor, they are a fair priced and developer friendly platform, you can also choose the percentage you donate to charity, developers, HumbleBundle and this very site at checkout.
                </p>
                ',
                'related' => json_encode(['peripherals', 'computers', 'stickers', 'laptop-cases'])
            ],
            [
                'slug' => 'peripherals',
                'name' => 'Peripherals',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Any professional needs the right tools to perform at it\'s fullest potential, gift some hardware.',
                'meta_title' => 'The best selection of peripherals to gift programmers',
                'meta_description' => 'Any professional needs the right tools to perform at it\'s fullest potential, gift some hardware and periferals.',
                'html_description' => '
                <p>
                    Any professional needs the right tools to perform at it\'s fullest potential, look here for the stuff required to do so, gift some hardware.
                </p>
                ',
                'related' => json_encode(['computers', 'gadgets', 'laptop-cases', 'miscelaneous'])
            ],
            [
                'slug' => 'miscelaneous',
                'name' => 'Miscelaneous',
                'image' => 'https://placehold.it/600x600',
                'description' => 'These are the products that we love but we don\'t really have a category for',
                'meta_title' => 'The best selection of miscelaneous items to gift programmers',
                'meta_description' => 'These are the products that we love but we don\'t really have a category for',
                'html_description' => '
                <p>
                    These are the products that we love but we don\'t really have a category for.
                </p>
                ',
                'related' => json_encode(['stickers', 'gadgets', 'games', 'books'])
            ],
            [
                'slug' => 'men-apparel',
                'name' => 'Men Apparel',
                'image' => 'https://placehold.it/600x600',
                'description' => 'We aren\'t really well known for our good styling skills, here you have the solution',
                'meta_title' => 'The best selection of men clothes and accesories to gift programmers',
                'meta_description' => 'We aren\'t really well known for our good styling skills, here you have the solution',
                'html_description' => '
                <p>
                    We aren\'t really well known for our good styling skills, here you have the solution.
                </p>
                <p>
                    The sizes range available goes from XS to XL. You can also find variations like tanktop, sweaters, or long sleeves.
                </p>
                ',
                'related' => json_encode(['games', 'gadgets', 'women-apparel', 'babies-apparel'])
            ],
            [
                'slug' => 'women-apparel',
                'name' => 'Women Apparel',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Level up your game and show off with these trendy clothes',
                'meta_title' => 'The best selection of women clothes and accesories to gift programmers',
                'meta_description' => 'Level up your game and show off with these trendy clothes',
                'html_description' => '
                <p>
                    Level up your game and show off with these trendy clothes
                </p>
                <p>
                    The sizes range available goes from XS to XL. You can also find variations like tanktop, sweaters, or long sleeves.
                </p>
                ',
                'related' => json_encode(['accessories', 'mugs', 'men-apparel', 'babies-apparel'])
            ],
            [
                'slug' => 'babies-apparel',
                'name' => 'Babies Apparel',
                'image' => 'https://placehold.it/600x600',
                'description' => 'The earlier they start the better, put them on some clothes and let it start soaking in',
                'meta_title' => 'The best selection of baby clothes and accesories to gift programmers',
                'meta_description' => 'The earlier they start the better, put them on some clothes and let it start soaking in',
                'html_description' => '
                <p>
                    The earlier they start the better, put them on some clothes and let it start soaking in.
                </p>
                <p>
                    We offer a range of sizes from newborn to 18 months old.
                </p>
                ',
                'related' => json_encode(['women-apparel', 'men-apparel', 'courses', 'books'])
            ],
            [
                'slug' => 'accessories',
                'name' => 'Accessories',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Pearls to shout to the world what your passion is',
                'meta_title' => 'The best selection of accessories to gift programmers',
                'meta_description' => 'Pearls to shout to the world what your passion is',
                'html_description' => '
                <p>
                    Pearls to shout to the world what your passion is.
                </p>
                ',
                'related' => json_encode(['men-apparel', 'women-apparel', 'mugs', 'books'])
            ],
            [
                'slug' => 'computers',
                'name' => 'Computers',
                'image' => 'https://placehold.it/600x600',
                'description' => 'What would we do without our trusty daily computer? A selection of laptops in all price ranges',
                'meta_title' => 'The best selection of computers to gift programmers',
                'meta_description' => 'What would we do without our trusty daily computer? A selection of laptops in all price ranges with specs thoughtfully chosen with programming in mind.',
                'html_description' => '
                <p>
                    What would we do without our trusty daily computer? A selection of laptops in all price ranges with specs thoughtfully chosen with programming in mind.
                </p>
                ',
                'related' => json_encode(['laptop-cases', 'stickers', 'peripherals', 'gadgets'])
            ],
            [
                'slug' => 'phone-cases',
                'name' => 'Phone cases',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Now a days our entire life is on our smartphone, protecting it is important, do it with style',
                'meta_title' => 'The best selection of phone cases to gift programmers',
                'meta_description' => 'Now a days our entire life is on our smartphone, protecting it is important, do it with style',
                'html_description' => '
                <p>
                    Now a days our entire life is on our smartphone, protecting it is important, do it with style
                </p>
                ',
                'related' => json_encode(['laptop-cases', 'computers', 'gadgets', 'miscelaneous'])
            ],
            [
                'slug' => 'laptop-cases',
                'name' => 'Laptop cases',
                'image' => 'https://placehold.it/600x600',
                'description' => 'Cool looking cases and skins for a programmers best friend',
                'meta_title' => 'The best selection of laptop cases to gift programmers',
                'meta_description' => 'Cool looking cases and skins for a programmers best friend',
                'html_description' => '
                <p>
                    Cool looking cases and skins for a programmers best friend
                </p>
                ',
                'related' => json_encode(['phone-cases', 'computers', 'gadgets', 'miscelaneous'])
            ],
            [
                'slug' => 'mugs',
                'name' => 'Mugs',
                'image' => 'https://placehold.it/600x600',
                'description' => 'We love our coffee, we don\'t get paid with it tho, those designs are JOKES',
                'meta_title' => 'The best selection of mugs to gift programmers',
                'meta_description' => 'We love our coffee, we don\'t get paid with it tho, those designs are JOKES',
                'html_description' => '
                <p>
                    We love our coffee, we don\'t get paid with it tho, those designs are JOKES
                </p>
                ',
                'related' => json_encode(['stickers', 'accessories', 'office', 'phone-cases'])
            ],
        ]);
    }
}
