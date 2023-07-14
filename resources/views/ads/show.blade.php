<x-main>
    <div class="mt-4 row">
    <div id="show-carousel" class="carousel slide position-relative col-12 col-md-6">
        <div class="container-fluid carousel-inner d-flex justify-content-center">
            @if ($ad->images)
            @foreach ($ad->images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{Storage::url($image->path)}}" style="width: auto!important" class="d-block w-100" alt="...">
            </div>                            
            @endforeach
            @else
            <div class="carousel-item active">
                <img src="https://picsum.photos/id/237/300/300" class="d-block w-100" alt="...">
            </div>
            @endif   
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#show-carousel" data-bs-slide="prev">
            <i class="fs-1 bi bi-arrow-left-square-fill accenti position-absolute" style="left: 150%"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#show-carousel" data-bs-slide="next">
            <i class="fs-1 bi bi-arrow-right-square-fill accenti position-absolute" style="right: 150%"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="d-flex justify-content-start col-12 col-md-6">
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
</x-main>
