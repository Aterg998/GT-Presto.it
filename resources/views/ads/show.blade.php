<x-main>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 400px">
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
                <h2>{{$ad->title}}</h2>
                <p>{{$ad->description}}</p>
            </div>
            <div class="col-4">
                <p class="fs-4 fw-bold">Info</p>
                <p><i>Utente:</i> {{$ad->user->name}}</p>
                <p><i>Categoria:</i> {{$ad->category->name}}</p>
                <p><i>Prezzo:</i> {{$ad->price}}€</p>
            </div>
        </div>
      </div>
      </div>
</x-main>