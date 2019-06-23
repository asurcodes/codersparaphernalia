<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#c21e41">
        <meta name="robots" content="noindex,follow">
        <link rel="shortcut icon" href="{{url('favicon.ico')}}">
        <title>CodersParaphernalia | You are offline! 😱</title>

        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom>
            body{text-align:center;}img{width:90%;}h1,h2,p{color:#333;font-family: sans-serif;font-weight: 300;}
        </style>
    </head>

    <body>
        <main>
            <img src="{{url('images/splash-og.png')}}">
            <h1>Looks like your ISP is taking a break!</h1>
            <h2>¯\_(ツ)_/¯</h2>
            <p>Try going back to the <a href="{{route('home')}}">homepage</a></p>
        </main>
    </body>
</html>
