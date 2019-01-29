<div class="card card--product">
    <a class="outbound"
        href="{{route('product.show', $product->slug)}}"
        rel="nofollow"
        target="_blank"
        aria-label="Buy {{$product->title}}">
            @switch($product->vendor)
                @case('g2a')
                    <amp-img src="{{$product->image}}"
                        width="350"
                        height="466"
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
                @case('amazon')
                    <amp-img src="{{$product->image}}"
                        width="480"
                        height="480"
                        layout="responsive"
                        alt="{{$product->title}}">
                    @break
                @default
                    <amp-img src="{{$product->image}}"
                        width="420"
                        height="460"
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

