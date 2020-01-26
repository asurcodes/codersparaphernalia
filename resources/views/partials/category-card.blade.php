<div class="card card--category">
    <a href="{{route('category.show', $category->slug)}}" aria-label="View more items in {{$category->name}}">
        <amp-img src="{{$category->image}}"
            width="900"
            height="600"
            layout="responsive"
            alt="{{$category->name}}">
    </a>
    <div class="card__content">
        <a href="{{route('category.show', $category->slug)}}">{{$category->name}}</a>
        <p>{{$category->description}}</p>
    </div>
</div>
