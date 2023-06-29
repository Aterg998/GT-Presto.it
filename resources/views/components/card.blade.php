
        <div class="row gy-4 portfolio-container">

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                @foreach ($ads as $ad )
                <h4><a href="{{route('ads.show',['ad' => $ad->id])}}" title="title">{{$ad->title}}</a></h4>
                <p>Prezzo {{$ad->price}}</p>
                <p>{{$ad->description}}</p>
              </div>
            </div>
            @endforeach
          </div><!-- End Portfolio Item -->
