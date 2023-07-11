<div class="gy-4 portfolio-container m-5">
  <div class="portfolio-item filter-app">
    <div class="portfolio-wrap">
      <a href="{{route('ads.show', $ad->id)}}" data-gallery="portfolio-gallery-app" class="glightbox">
        <img src="{{'storage/'.$ad->images()->pluck('path')->first()}}" class="img-fluid" style="width: 300px; height: 300px" alt="">
      </a>
      <div class="portfolio-info mt-3">
        <h4><a href="{{route('ads.show', $ad->id)}}" title="title" class="accenti2 fw-medium">{{$ad->title}}</a></h4>
        <p class="text-black" style="line-height: 1em"> <span class="accenti">{{__('messages.price')}}: </span> € {{$ad->price}}</p>
        <p class="text-black" style="line-height: 1.4em"><span class="accenti">{{__('messages.category')}}:</span> {{$ad->category->name}}</p>
        <p class="text-black" style="line-height: 1em"><span class="accenti">{{__('messages.description')}}: </span>{{$ad->description}}</p>
      </div>
    </div>
  </div>
</div>