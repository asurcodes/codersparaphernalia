<?php

use App\Category;
use Illuminate\Database\Seeder;

class StickersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::where('slug', 'stickers')->first();
        $category->products()->createMany([
            [
                'slug' => 'it-works-on-my-machine-sticker',
                'title' => 'It works on my machine sticker',
                'image' => 'https://ih0.redbubble.net/image.121551245.2521/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u13.jpg',
                'url' => 'https://www.redbubble.com/people/ramiro/works/17472521-shrug-it-works-on-my-machine-programmer-excuse-design-grey-text?p=sticker',
                'price' => 3.09,
                'tags' => ['on-my-machine', 'meme'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'offline-chrome-trex-sticker',
                'title' => 'Offline Chrome T-Rex sticker',
                'image' => 'https://ih1.redbubble.net/image.420697501.0033/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/devtee/works/27820033-offline?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'beta-ribbon-sticker',
                'title' => 'Beta ribbon sticker',
                'image' => 'https://ih0.redbubble.net/image.199188173.6366/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u7.jpg',
                'url' => 'https://www.redbubble.com/people/kentliau/works/21126366-beta-ribbon?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'will-code-for-pizza-sticker',
                'title' => 'Will code for pizza sticker',
                'image' => 'https://ih1.redbubble.net/image.430930246.2066/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/blushingcrow/works/28092066-will-code-for-pizza-programming?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'css-is-awesome-sticker',
                'title' => 'CSS is awesome sticker',
                'image' => 'https://ih1.redbubble.net/image.168622455.1528/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/corvatu/works/19761528-css-is-awesome?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'gopher-programming-sticker',
                'title' => 'Gopher programming Golang sticker',
                'image' => 'https://ih0.redbubble.net/image.572092947.2253/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u8.jpg',
                'url' => 'https://www.redbubble.com/people/wolfcok/works/31962253-golang-go?p=sticker',
                'price' => 3.03,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'dont-touch-my-laptop-sticker',
                'title' => 'Dont touch my laptop sticker',
                'image' => 'https://ih1.redbubble.net/image.329536825.2075/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/caomicc/works/25272075-dont-touch-my-laptop?p=sticker',
                'price' => 2.97,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'docker-attacks-sticker',
                'title' => 'Docker attack sticker',
                'image' => 'https://ih0.redbubble.net/image.499056330.8889/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/xilmen/works/29938889-docker?p=sticker',
                'price' => 2.27,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'github-contributions-sticker',
                'title' => 'Github contributions sticker',
                'image' => 'https://ih1.redbubble.net/image.594516104.9462/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u5.jpg',
                'url' => 'https://www.redbubble.com/people/hellkni9ht/works/32569462-github-logo-contributions?p=sticker',
                'price' => 3.82,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'digital-middle-finger-sticker',
                'title' => 'Digital middle finger sticker',
                'image' => 'https://ih0.redbubble.net/image.319527454.7974/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u5.jpg',
                'url' => 'https://www.redbubble.com/people/djbalogh/works/24977974-digital-middle-finger?p=sticker',
                'price' => 2.78,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'code-is-my-poetry-sticker',
                'title' => 'Code is my poetry sticker',
                'image' => 'https://ih1.redbubble.net/image.12131942.2574/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/pencilplus/works/9022574-code-is-my-poetry?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'fork-me-on-github-ribbon-sticker',
                'title' => 'Fork me on Github ribbon sticker',
                'image' => 'https://ih1.redbubble.net/image.338701799.4836/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u7.jpg',
                'url' => 'https://www.redbubble.com/people/kentliau/works/25544836-fork-me-on-github-ribbon-red?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'im-a-developer-not-a-wizard-sticker',
                'title' => 'Im a developer, not a wizard sticker',
                'image' => 'https://ih0.redbubble.net/image.429404716.2304/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u2.jpg',
                'url' => 'https://www.redbubble.com/people/blushingcrow/works/28052304-im-a-developer-not-a-wizard-programming?p=sticker',
                'price' => 2.73,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'i-love-unicode-sticker',
                'title' => 'I love unicode sticker',
                'image' => 'https://ih1.redbubble.net/image.422132432.9538/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/springforce/works/27859538-i-love-unicode-funny-programming-jokes-light-color?p=sticker',
                'price' => 3.09,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'full-snack-developer-sticker',
                'title' => 'Full snack developer sticker',
                'image' => 'https://ih0.redbubble.net/image.467512370.2137/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/nicholasolsen/works/29062137-coffee-and-code-fullsnack-developer?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'code-with-me-senpai-sticker',
                'title' => 'Code with me sempai sticker',
                'image' => 'https://ih0.redbubble.net/image.325726123.9371/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/findingnull/works/25159371-code-with-me-senpai?p=sticker',
                'price' => 2.16,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'programmer-best-friend-sticker',
                'title' => 'Software programmer best friend sticker',
                'image' => 'https://ih0.redbubble.net/image.421321768.7111/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/rababau/works/27837111-programmers-duck?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'we-do-test-driven-development-sticker',
                'title' => 'We do test driven development sticker',
                'image' => 'https://ih0.redbubble.net/image.546656398.5173/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1.jpg',
                'url' => 'https://www.redbubble.com/people/likescurving/works/31255173-we-do-test-driven-development?p=sticker',
                'price' => 2.78,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'product-nineteen',
                'title' => 'Show me the code sticker',
                'image' => 'https://ih0.redbubble.net/image.562567869.4397/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/barou064/works/31694397-show-me-the-code-t-shirt?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ],
            [
                'slug' => 'really-no-errors-sticker',
                'title' => 'Really? No errors!? Sticker',
                'image' => 'https://ih0.redbubble.net/image.429949453.6640/st%2Csmall%2C420x460-pad%2C420x460%2Cf8f8f8.lite-1u1.jpg',
                'url' => 'https://www.redbubble.com/people/tamagothings/works/28066640-really-no-error?p=sticker',
                'price' => 2.47,
                'tags' => ['foo'],
                'vendor' => 'redbubble'
            ]
        ]);
    }
}
