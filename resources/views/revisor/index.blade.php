<x-main >

<!-- ======= Revisor Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>{{$ad_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h2>
        </div>
    </div>

    @if ($ad_to_check)
    {{-- Bottoni accetta e rifuta --}}
    <div class="row m-5">
        <div class="col-12 col-md-6 d-flex justify-content-end">
            <form action="{{route('revisor.accept_ad', ['ad' => $ad_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-presto shadow fs-3 rounded-4 fw-bold">Accetta</button>
            </form>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-start">
            <form action="{{route('revisor.reject_ad', ['ad' => $ad_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger shadow fs-3 rounded-4 fw-bold">Rifiuta</button>
            </form>
        </div>
    </div>

    {{-- Show annuncio da revisionare --}}
    <div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 40%; width: 40%">
          <div class="carousel-item active">
            <img src="https://picsum.photos/id/237/300/300" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/410/300/300" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/101/300/300" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="d-flex justify-content-center">
      <div class="container m-3">
        <div class="row">
            <div class="col-8">
                <h2>{{$ad_to_check->title}}</h2>
                <p>{{$ad_to_check->description}}</p>
            </div>
            <div class="col-4">
                <p class="fs-4 fw-bold">Info</p>
                <p><i>Utente:</i> {{$ad_to_check->user->name}}</p>
                <p><i>Categoria:</i> {{$ad_to_check->category->name}}</p>
                <p><i>Prezzo:</i> {{$ad_to_check->price}}€</p>
            </div>
        </div>
      </div>
      </div>    
    @endif

</section>

</x-main>