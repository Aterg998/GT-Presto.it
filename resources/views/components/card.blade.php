<div class="row gy-4 portfolio-container">
  <div class="col-xl-4 col-md-6 portfolio-item filter-app">
    <div class="portfolio-wrap">
      <a href="{{route('ads.show', $ad->id)}}" data-gallery="portfolio-gallery-app" class="glightbox">
        <img src="storage\img\lARB5G9GdsVR5kpjFp9ftxQuOLfIR09Blq60ejI6.jpg" class="img-fluid" alt="">
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