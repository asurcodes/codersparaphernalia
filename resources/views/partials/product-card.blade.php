<div class="card card--product">
    <a class="outbound"
        href="{{route('product.show', $product->slug)}}"
        rel="nofollow"
        target="_blank"
        aria-label="Buy {{$product->title}}">
            @switch($product->vendor)
                @case('amazon')
                    <amp-img src="{{$product->image}}"
                        width="480"
                        height="480"
                        layout="responsive"
                        alt="{{$product->title}}">
                    @break
                @case('redbubble')
                    <amp-img src="{{$product->image}}"
                        width="420"
                        height="460"
                        layout="responsive"
                        alt="{{$product->title}}">
                    @break
                @case('humblebundle')
                    <amp-img src="{{$product->image}}"
                        width="470"
                        height="269"
                        layout="responsive"
                        alt="{{$product->title}}">
                    @break
                @case('udemy')
                    <amp-img src="{{$product->image}}"
                        width="480"
                        height="270"
                        layout="responsive"
                        alt="{{$product->title}}">
                    @break
                @case('etsy')
                    <amp-img src="{{$product->image}}"
                        width="340"
                        height="270"
                        layout="responsive"
                        alt="{{$product->title}}">
                    @break
                @default
                    <amp-img src="{{$product->image}}"
                        width="420"
                        height="420"
                        layout="responsive"
                        alt="{{$product->title}}">
                    @break
            @endswitch
    </a>
    <div class="card__price"><b>${{$product->price}}</b></div>
    <div class="card__content">
        <a class="outbound"
            href="{{route('product.show', $product->slug)}}"
            rel="nofollow"
            target="_blank">
                {{$product->title}}
        </a>
    </div>
</div>

