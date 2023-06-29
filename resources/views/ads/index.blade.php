<x-main>


    <div class="section-header">
        <livewire:ad-index-list />
        <h2>Articoli</h2>
        <p>non so cosa scrivere</p>
      </div>

      @foreach ($ads as $ad )
          
    
      <div class="col-xl-4 col-md-6 portfolio-item filter-product">
        <div class="portfolio-wrap">
          <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
          <div class="portfolio-info">
            <h4><a href="{{route('ads.show')}}" title="title">{{$ad->title}}</a></h4>
            <p>Prezzo {{$ad->price}}</p>
            <p>{{$ad->description}}</p>
          </div>
        </div>
      </div>
      @endforeach
</x-main>