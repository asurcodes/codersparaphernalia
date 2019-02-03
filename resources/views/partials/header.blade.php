<header>
    <div class="container">
        <h1>{!!$title!!}</h1>
        <form id="search" method="get" action="{{route('product.search')}}" target="_top">
            <input name="query" type="input" placeholder="Search for what you want" aria-label="Search for products">
            <input type="submit" value="SEARCH">
        </form>
        @if(isset($description))
            {!!$description!!}
        @endif
    </div>
</header>
