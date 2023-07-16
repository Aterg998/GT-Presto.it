<div class="gy-4 portfolio-container m-5">
  <div class="portfolio-item filter-app">
    <div class="portfolio-wrap position-relative">
      <a class="btn btn-presto btn-sm text-violet position-absolute mt-3 ms-3 z-2" href="{{ Route('ads.search', ['searched' => strtolower($ad->category->name)]) }}">
        </span> {{$ad->category->name}}
      </a>
      <a href="{{route('ads.show', $ad->id)}}" data-gallery="portfolio-gallery-app" class="glightbox">
        <img src="
        @if (!$ad->images()->get()->isEmpty())
          {{$ad->images()->first()->getUrl(300,300)}}
        @else
          https://i.etsystatic.com/31368871/r/il/90f2d7/3312428770/il_300x300.3312428770_bc75.jpg
        @endif" class="img-fluid" alt="">
      </a>
      <div class="portfolio-info">
        <h4 class="mt-3">
          <a href="{{route('ads.show', $ad->id)}}" title="title" class="accenti2">{{$ad->title}}
          </a>
        </h4>
        <p class="text-black" style="line-height: 1em"> <span class="accenti">{{__('messages.price')}}: </span> € {{number_format($ad->price, 2)}}</p>
        <p class="text-black" style="line-height: 1em"><span class="accenti">{{__('messages.description')}}: </span>{{$ad->description}}</p>
      </div>
    </div>
  </div>
</div>