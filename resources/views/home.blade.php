<!doctype html>
<html ⚡ lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{url('favicon.ico')}}">

        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0/amp-form-0.1.js">
        <link rel="dns-prefetch" href="//www.google-analytics.com">

        <title>CodersParaphernalia - Present ideas for programmers and alike 🗿</title>

        <meta name="description" content="Welcome to CodersParphernalia, the place where you can find anything a programmers heart can desire. Here you have a curated list of the best gifts with style and character made for coders by coders">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow">
        <meta http-equiv="content-language" content="en">
        <link rel="canonical" href="{{route('home')}}">
        <meta property="og:title" content="CodersParaphernalia - Present ideas for programmers and alike 🗿">
        <meta property="og:url" content="{{route('home')}}">
        <meta property="og:description" content="Welcome to CodersParphernalia, the place where you can find anything a programmers heart can desire. Here you have a curated list of the best gifts with style and character made for coders by coders">
        <meta property="og:image" content="{{url('logo.png')}}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="CodersParaphernalia">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="CodersParaphernalia - Present ideas for programmers and alike 🗿">
        <meta name="twitter:description" content="Welcome to CodersParphernalia, the place where you can find anything a programmers heart can desire. Here you have a curated list of the best gifts with style and character made for coders by coders">
        <meta name="twitter:image" content="{{url('logo.png')}}">
        <meta name="twitter:image:src" content="{{url('logo.png')}}">
        <meta name="twitter:url" content="{{route('home')}}">

        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
        <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
        <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>

        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom>
            {!! $customStyles !!}
        </style>
    </head>

    <body>
        @include('partials.header', [
            'title' => 'Programmers presents online store',
            'description' => 'Welcome to CodersParphernalia, the place where you can find anything a programmers heart can desire. Here you have a curated list of the best gifts with style and character made <b>for devs by devs</b>.'
            ])
        <main>
            <div class="container">
                <p>
                    <b>Pro Tip:</b> If you are looking a present but you are not really sure what that person really does (this is really common, you are not alone) search for <b>all</b> in the serach bar, it will display gifts that are valid for the 99.8% of computer geeks out there. You're welcome! ;)
                </p>
            </div>
            <div class="container">
                <h2>Top 2³ presents!</h2>
                <p>
                    This are our top picks for computer geeks, all our products are cool but these have something special.
                </p>
            </div>
            <div class="container">
                <div class="cards">
                    @each('partials.product-card', $topProducts, 'product')
                </div>
            </div>
            <div class="container">
                <h2>Categories for anyone</h2>
                <p>
                    Is your kid the youngest Facebook programmer being 2 years old? Don't worry, we have stylish bodysuits. Got a new geeky partner and want to surprise him/her with some cool underwear? We got you covered. You have a sticker fetish? Welcome home.
                </p>
            </div>
            <div class="container">
                <div class="cards">
                    @each('partials.category-card', $categories, 'category')
                </div>
            </div>
            <div class="container">
                <h2>What is CodersParaphernalia?</h2>
                <p>
                    We are a simple site with a simple goal: improve presents for coders all over the world. We are programmers ourselves and we have experienced tryhard gifts people make us, although we appreciate the effort they are usually not what we really want, so we curated a list of products from all over the internet that we love and others would too.
                </p>
                <p>
                    If you are got lost browsing Etsy or got frustrated looking for something cool in RedBubble don't worry, we have made all the scouting job for you. Anything here is a warrantied like for you or anyone you wish well to.
                </p>
            </div>
        </main>
        @include('partials.footer')
    </body>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "{{route('home')}}",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{{route('home')}}/search?query={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "CoderParaphernalia",
            "url": "{{route('home')}}",
            "logo": "{{url('logo.png')}}"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "ItemList",
            "name" : "CodersParaphernalia categories",
            "description" : "This are our top picks for computer geeks, all our products are cool but these have something special",
            "itemListElement" : {!! json_encode(App\Category::generateItemListArray($categories)) !!}
        }
    </script>
    <amp-analytics type="googleanalytics">
        <script type="application/json">
        {
            "vars": {
                "account": "UA-128498798-2"
            },
            "triggers": {
                "trackPageview": {
                    "on": "visible",
                    "request": "pageview"
                },
                "trackClickOnOutboundLink" : {
                    "on": "click",
                    "selector": ".outbound",
                    "request": "event",
                    "vars": {
                        "eventCategory": "outboud-link",
                        "eventAction": "click"
                    }
                }
            }
        }
        </script>
    </amp-analytics>
</html>
