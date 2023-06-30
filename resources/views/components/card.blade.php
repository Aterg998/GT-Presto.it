<div class="gy-4 portfolio-container m-5">
  <div class="portfolio-item filter-app">
    <div class="portfolio-wrap">
      <a href="{{route('ads.show', $ad->id)}}" data-gallery="portfolio-gallery-app" class="glightbox">
        <img src="{{$ad->image}}" class="img-fluid" alt="">
      </a>
      <div class="portfolio-info">
        <h4><a href="{{route('ads.show', $ad->id)}}" title="title">{{$ad->title}}</a></h4>
        <p>Prezzo: {{$ad->price}}</p>
        <p>Categoria: {{$ad->category->name}}</p>
        <p>{{$ad->description}}</p>
      </div>
    </div>
  </div>
</div>