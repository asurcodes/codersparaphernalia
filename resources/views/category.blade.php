<!doctype html>
<html ⚡ lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{url('favicon.ico')}}">

        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0/amp-form-0.1.js">
        <link rel="dns-prefetch" href="//www.google-analytics.com">

        <title>CodersParaphernalia - Top {{strtolower($category->name)}} gift ideas for programmers</title>

        <meta name="description" content="{{$category->meta_description}}">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow">
        <meta http-equiv="content-language" content="en">
        <link rel="canonical" href="{{request()->fullUrl()}}">
        <meta property="og:title" content="CodersParaphernalia - Top {{strtolower($category->name)}} gift ideas for programmers">
        <meta property="og:url" content="{{request()->fullUrl()}}">
        <meta property="og:description" content="{{$category->meta_description}}">
        <meta property="og:image" content="{{url('logo.png')}}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="CodersParaphernalia">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="CodersParaphernalia - Top {{strtolower($category->name)}} gift ideas for programmers">
        <meta name="twitter:description" content="{{$category->meta_description}}">
        <meta name="twitter:image" content="{{url('logo.png')}}">
        <meta name="twitter:image:src" content="{{url('logo.png')}}">
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
        @include('partials.header', [
            'title' => 'Top ' . $category->name . ' gift ideas for programmers',
            'description' => $category->long_description
        ])
        <main>
            <div class="container">
                <div class="cards">
                    @each('partials.product-card', $products, 'product', 'partials.empty-category')
                </div>
            </div>
            <div class="container">
                {!!$products->links()!!}
            </div>
            <div class="container">
                <h2>You may also be interested in:</h2>
                <div class="cards">
                    @each('partials.category-card', $relatedCategories, 'category')
                </div>
            </div>
        </main>
        @include('partials.footer')
    </body>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "CoderParaphernalia",
            "url": "{{request()->fullUrl()}}",
            "logo": "{{url('logo.png')}}"
        }
    </script>
    <script type="application/ld+json">
        {!! $category->generateBreadcrumbsStructuredData() !!}
    </script>
    <script type="application/ld+json">
        {!! $category->generateProductsItemListStructuredData($products) !!}
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
