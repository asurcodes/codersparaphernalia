<div class="card card--product">
    <a class="outbound" href="{{$product->url}}" aria-label="Buy {{$product->title}}">
        <amp-img src="{{$product->image}}"
            width="600"
            height="600"
            layout="responsive"
            alt="{{$product->title}}">
    </a>
    <div class="card__content">
        <a class="outbound" href="{{$product->url}}">{{$product->title}}</a>
        <span><b>${{$product->price}}</b></span>
    </div>
</div>

