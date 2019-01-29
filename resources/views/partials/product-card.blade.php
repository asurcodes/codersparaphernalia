<div class="card card--product">
    <a class="outbound"
        href="{{route('product.show', $product->slug)}}"
        rel="nofollow"
        target="_blank"
        aria-label="Buy {{$product->title}}">
            <amp-img src="{{$product->image}}"
                width="420"
                height="460"
                layout="responsive"
                alt="{{$product->title}}">
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

