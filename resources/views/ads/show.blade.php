<x-main>
    <br>

    <div class="container d-flex justify-content-evenly m-5">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="width: 20rem">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="d-flex justify-content-center">
            <div class="container m-3">
                <div class="row">
                    <div>
                        <h2>{{ $ad->title }}</h2>
                        <p class="text-black">{{ $ad->description }}</p>
                        <br>
                        <p class="text-black" style="line-height: 1rem"><span class="accenti">Utente:</span> {{ $ad->user->name }}</p>
                        <p class="text-black" style="line-height: 1rem"> <span class="accenti">Categoria:</span> {{ $ad->category->name }}</p>
                        <p class="text-black" style="line-height: 1rem"> <span class="accenti">Prezzo:</span> {{$ad->price}}</p>
                    </div>
                
                    {{-- se l'utente id che è loggato è lo stesso che ha creato l'annuncio --}}
                @if ($ad->user_id == Auth::user()->id)
                    <div class="d-flex mt-3">
                        <a class="btn btn-presto" href="{{ route('ads.edit', ['ad' => $ad['id']]) }}">Modifica</a>
                        <form action="{{ route('ads.delete', ['ad' => $ad['id']]) }}" method='POST'>
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-presto ms-3">Elimina</button>
                        </form>
                    </div>
                @else
                @endif
                </div>
            </div>

        </div>
    </div>
    </div>
</x-main>
