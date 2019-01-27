<div class="card card--product">
    <a class="outbound"
        href="{{route('product.show', $product->id)}}"
        rel="nofollow"
        target="_blank"
        aria-label="Buy {{$product->title}}">
            <amp-img src="{{$product->image}}"
                width="420"
                height="460"
                layout="responsive"
                alt="{{$product->title}}">
    </a>
    <div class="card__content">
        <a class="outbound"
            href="{{route('product.show', $product->id)}}"
            rel="nofollow"
            target="_blank">
                {{$product->title}}
        </a>
        <span><b>${{$product->price}}</b></span>
    </div>
</div>

