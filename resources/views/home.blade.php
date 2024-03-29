<!doctype html>
<html ⚡ lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#c21e41">
        <link rel="shortcut icon" href="{{url('favicon.ico')}}">
        <link rel="manifest" href="{{url('manifest.json')}}">
        <link rel="dns-prefetch" href="//cdn.ampproject.org">
        <link rel="dns-prefetch" href="//www.google-analytics.com">
        <link rel="dns-prefetch" href="//stats.g.doubleclick.net">
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0/amp-form-0.1.js">

        <title>CodersParaphernalia | Gift ideas for programmers and alike! 🤓</title>

        <meta name="description" content="The place where you can find anything a programmers heart can desire. We offer a curated list of the best gifts ideas made for devs by devs">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow">
        <meta http-equiv="content-language" content="en">
        <link rel="canonical" href="{{route('home')}}">
        <meta property="og:title" content="CodersParaphernalia | Gift ideas for programmers and alike! 🤓">
        <meta property="og:url" content="{{route('home')}}">
        <meta property="og:description" content="The place where you can find anything a programmers heart can desire. We offer a curated list of the best gifts ideas made for devs by devs">
        <meta property="og:image" content="{{url('images/splash-og.png')}}">
        <meta property="og:image:width" content="1650">
        <meta property="og:image:height" content="1000">
        <meta property="og:image:type" content="image/png">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="CodersParaphernalia">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="CodersParaphernalia | Gift ideas for programmers and alike! 🤓">
        <meta name="twitter:description" content="The place where you can find anything a programmers heart can desire. We offer a curated list of the best gifts ideas made for devs by devs">
        <meta name="twitter:image" content="{{url('images/splash-og.png')}}">
        <meta name="twitter:image:src" content="{{url('images/splash-og.png')}}">
        <meta name="twitter:image:alt" content="CodersParaphernalia">
        <meta name="twitter:url" content="{{route('home')}}">
        <link rel="apple-touch-icon" href="{{url('images/touch/apple-touch-icon-192x192.png')}}">

        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
        <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
        <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
        <script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>

        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom>
            {!! $customStyles !!}
        </style>
    </head>

    <body>
        <amp-install-serviceworker
            src="{{ url('serviceworker.js') }}"
            data-iframe-src="{{ url('install-serviceworker.html') }}"
            layout="nodisplay">
        </amp-install-serviceworker>
        @include('partials.header', [
            'title' => 'The programmers favourite gifts online store',
            'description' => '
                <p>
                Welcome to CodersParphernalia, the place where you can find anything a programmers heart can desire. Here you have a curated list of the best gifts with style and character made <b>for devs by devs</b>.
                </p>
                <p>
                Whether the thing you are looking for is for an aspiring computer engineer, a student or an established experienced professional in this site you are guaranteed to discover the best products for that individual.
                </p>
                '
            ])
        <main>

            <div class="container">
                <h2>Top 16 gift ideas for computer programmers!</h2>
                <p>
                    These are our top picks for computer geeks, all our products are cool but these are definitely the best. These are also <b>generic</b> so you don't need to know anything about what the person is exactly working on (don't worry, this is really common), the perfect selection for non computer savvies.
                </p>
            </div>
            <div class="container">
                <div class="cards">
                    @each('partials.product-card', $topProducts, 'product')
                </div>
            </div>

            <div class="container">
                <h2>Our gift selection any coder will love</h2>
                <p>
                    Is your kid the youngest Facebook programmer being 2 years old? Don't worry, we have stylish bodysuits. Got a geeky boyfriend/girlfriend and want to surprise him/her with a nice present? We got you covered. Do you have a sticker fetish? Welcome home, my friend.
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
                    We are a simple site with a simple goal: improve presents for coders all over the world. We are programmers ourselves and we have experienced tryhard gifts people make us, although we appreciate the effort they are usually not what we really want, so we curated a list of products from all over the internet that we love and other colleagues would too.
                </p>
                <p>
                    If you got lost browsing for a Christmas present on Etsy or frustrated looking for a cool design in RedBubble don't worry, we have made all the scouting job for you. Anything here is a warrantied like for you or anyone you wish well to.
                </p>
                <p>
                    <b>Disclaimer:</b> We use some referral links to support the site, but we care more about quality of products than monetization so if you have a suggestion or have seen any outdated product, hit us up.
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
            "name": "CodersParaphernalia",
            "url": "{{route('home')}}",
            "logo": "{{url('images/logo-512x512.png')}}"
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
                        "eventCategory": "outbound-link",
                        "eventAction": "click"
                    }
                }
            }
        }
        </script>
    </amp-analytics>
</html>
