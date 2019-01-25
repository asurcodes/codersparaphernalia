<!doctype html>
<html ⚡ lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{url('favicon.ico')}}">

        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0/amp-analytics-0.1.js">
        <link rel="preconnect dns-prefetch" href="https://fonts.googleapis.com/" crossorigin>
        <link rel="dns-prefetch" href="//www.google-analytics.com">

        <title>CodersParaphernalia - Present ideas for programmers and alike 🗿</title>

        <meta name="description" content="Welcome to CodersParphernalia, the place where you can find anything a programmers heart can desire. Here you have a curated list of the best gifts with style and character made for coders by coders">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow">
        <meta http-equiv="content-language" content="en">
        <link rel="canonical" href="{{url('/')}}">
        <meta property="og:title" content="CodersParaphernalia - Present ideas for programmers and alike 🗿">
        <meta property="og:url" content="{{url('/')}}">
        <meta property="og:description" content="Welcome to CodersParphernalia, the place where you can find anything a programmers heart can desire. Here you have a curated list of the best gifts with style and character made for coders by coders">
        <meta property="og:image" content="https://codersparaphernalia.com/logo.png">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="CodersParaphernalia">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="CodersParaphernalia - Present ideas for programmers and alike 🗿">
        <meta name="twitter:description" content="Welcome to CodersParphernalia, the place where you can find anything a programmers heart can desire. Here you have a curated list of the best gifts with style and character made for coders by coders">
        <meta name="twitter:image" content="https://codersparaphernalia.com/logo.png">
        <meta name="twitter:image:src" content="https://codersparaphernalia.com/logo.png">
        <meta name="twitter:url" content="{{url('/')}}">

        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
        <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

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
            "url": "{{url('/')}}",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://codersparaphernalia.com/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "CoderParaphernalia",
            "url": "https://codersparaphernalia.com",
            "logo": "https://codersparaphernalia.com/logo.png"
        }
    </script>
    <script type="application/ld+json">
        {!! App\Product::generateItemListStructuredData($topProducts)!!}
    </script>
    <script type="application/ld+json">
        {!! App\Category::generateItemListStructuredData($categories)!!}
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
