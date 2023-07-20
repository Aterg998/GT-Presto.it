<x-main>
    <div class="mt-4 row">
    <div id="show-carousel" class="carousel slide position-relative col-12 col-md-8 mb-3">
        <div class="container-fluid carousel-inner" style="width: 20rem">
            @if ($ad->images)
            @foreach ($ad->images as $image)
            <div class="carousel-item @if($loop->first) active @endif">
                <img src="{{Storage::url($image->path)}}" class="d-block w-100" alt="...">
            </div>                            
            @endforeach
            @else
            <div class="carousel-item active">
                <img src="https://picsum.photos/id/237/300/300" class="d-block w-100" alt="...">
            </div>
            @endif   
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#show-carousel" data-bs-slide="prev">
            <i class="fs-1 bi bi-arrow-left-square-fill accenti position-absolute" style="left: 15rem"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#show-carousel" data-bs-slide="next">
            <i class="fs-1 bi bi-arrow-right-square-fill accenti position-absolute" style="right: 15rem"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="d-flex justify-content-start align-items-center col-12 col-md-4">
        <div class="container m-3">
            <div class="row">
                <div class="m-3">
                    <h2>{{ $ad->title }}</h2>
                    <p class="text-black">{{ $ad->description }}</p>
                    <br>
                    <p class="text-black" style="line-height: 1rem"><span class="accenti">{{ __('messages.user') }}:</span> {{ $ad->user->name }}</p>
                    <p class="text-black" style="line-height: 1rem"> <span class="accenti">{{ __('messages.category') }}:</span> {{ $ad->category->name }}</p>
                    <p class="text-black" style="line-height: 1rem"> <span class="accenti">{{ __('messages.price') }}:</span> € {{number_format($ad->price, 2)}}</p>
                    <button data-bs-toggle="modal" data-bs-target="#notYetModal" class="btn btn-presto accenti mx-2" >{{__('messages.buy')}}</button>
                </div>
            
            {{-- se l'utente id che è loggato è lo stesso che ha creato l'annuncio --}}

            @if (Auth::user() && $ad->user_id == Auth::user()->id)
                <div class="d-flex mt-3">
                    <a class="btn btn-presto" href="{{ route('ads.edit', ['ad' => $ad['id']]) }}">{{ __('messages.edit') }}</a>
                    <form action="{{ route('ads.delete', ['ad' => $ad['id']]) }}" method='POST'>
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-presto ms-3">{{ __('messages.delete') }}</button>
                    </form>
                </div>
            @else
            @endif
            </div>
        </div>

    </div>
    </div>

    <div class="modal fade" id="notYetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                Funzione non ancora disponibile!
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="https://i.headtopics.com/images/2020/7/14/repubblica/mongolia-caccia-e-poi-mangia-una-marmotta-adolescente-muore-di-peste-bubbonica-1283145254904803329.webp" class="img-fluid">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
</x-main>


