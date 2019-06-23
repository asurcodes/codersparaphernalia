<header>
    <div class="container">
        <a href="{{route('home')}}">
            <amp-img src="{{url('images/header.png')}}"
                class="header-image"
                width="1960"
                height="430"
                layout="responsive"
                alt="{{$title}}">
            </amp-img>
        </a>
    </div>
    <div class="container">
        <form id="search" method="get" action="{{route('product.search')}}" target="_top">
            <input name="query" type="input" placeholder="Search for what you want" aria-label="Search for products">
            <input type="submit" value="SEARCH">
        </form>
    </div>
    <div class="container">
        <h1>{!!$title!!}</h1>
        @if(isset($description))
            {!!$description!!}
        @endif
    </div>
</header>
