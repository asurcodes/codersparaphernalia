<!doctype html>
<html ⚡ lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#c21e41">
        <link rel="shortcut icon" href="{{url('favicon.ico')}}">
        <link rel="manifest" href="{{url('manifest.json')}}">
        <link rel="dns-prefetch" href="//www.google-analytics.com">
        <link rel="dns-prefetch" href="//cdn.ampproject.org">

        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0/amp-form-0.1.js">

        <title>CodersParaphernalia - Search results for: {{$query}}</title>

        <meta name="description" content="The best selection of our products found by {{$query}}">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow">
        <meta http-equiv="content-language" content="en">
        <link rel="canonical" href="{{request()->fullUrl()}}}">
        <meta property="og:title" content="CodersParaphernalia - Search results for: {{$query}}">
        <meta property="og:url" content="{{request()->fullUrl()}}">
        <meta property="og:description" content="The best selection of our products found by {{$query}}">
        <meta property="og:image" content="{{url('images/logo-512x512.png')}}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="CodersParaphernalia">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="CodersParaphernalia - Search results for: {{$query}}">
        <meta name="twitter:description" content="The best selection of our products found by {{$query}}">
        <meta name="twitter:image" content="{{url('images/logo-512x512.png')}}">
        <meta name="twitter:image:src" content="{{url('images/logo-512x512.png')}}">
        <meta name="twitter:url" content="{{request()->fullUrl()}}">

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
        <amp-install-serviceworker
            src="https://codersparaphernalia.com/serviceworker.js"
            data-iframe-src="https://codersparaphernalia.com/install-serviceworker.html"
            layout="nodisplay">
        </amp-install-serviceworker>
        @include('partials.header', [
            'title' => 'Search results for: ' . $query,
        ])
        <main>
            <div class="container">
                <div class="cards">
                    @each('partials.product-card', $products, 'product', 'partials.empty-search')
                </div>
            </div>
            <div class="container">
                {!!$products->links()!!}
            </div>
        </main>
        @include('partials.footer')
    </body>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "CoderParaphernalia",
            "url": "{{route('home')}}",
            "logo": "{{url('images/logo-512x512.png')}}"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "ItemList",
            "name": "Search results for {{$query}}",
            "description": "The best selection of our products found by {{$query}}",
            "itemListElement": {!! json_encode(App\Product::generateItemListArray($products)) !!}
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
