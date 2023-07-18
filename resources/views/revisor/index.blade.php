<x-main>
<!-- ======= Revisor Section ======= -->

    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>{{ $ad_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}</h2>
            </div>
        </div>


{{-- Show annuncio da revisionare --}}

        @if ($ad_to_check)
        <div class="m-4 row">

            <div id="show-carousel" class="carousel slide col-12 col-md-8 mb-3 position-relative">
                <div class="carousel-inner">
                    @if ($ad_to_check->images)
                    @foreach ($ad_to_check->images as $image)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <img src="{{Storage::url($image->path)}}" class="rounded-5 d-block m-auto p-4 w-50" alt="...">
                        <div class="container row rounded-4 ps-5">
                            <div class="py-4 col rounded-start-4" style="background-color: #00624340;">
                                <table class="d-flex justify-content-center">
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><p class="fs-3 accenti2">Revisione</p></td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Adulti:</td>
                                            <td><span class="{{$image->adult}}"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Satira:</td>
                                            <td><span class="{{$image->spoof}}"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Medicina:</td>
                                            <td><span class="{{$image->medical}}"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">Violenza:</td>
                                            <td><span class="{{$image->violence}}"></span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">VM18:</td>
                                            <td><span class="{{$image->racy}}"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                            <div class="py-4 col rounded-end-4" style="background-color: #00624340;">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><p class="fs-3 accenti2">Tags</p></td>
                                        </tr>
                                        <tr>
                                            <td class="text-black">
                                                @if ($image->labels)
                                                <p>
                                                @foreach ($image->labels as $label)
                                                    {{$label}},
                                                @endforeach 
                                                </p>                                       
                                                @endif
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                           
                    @endforeach
                    @else
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/id/237/300/300" class="d-block w-100" alt="...">
                    </div>
                    @endif
                </div>
                <button class="carousel-control-next" type="button" data-bs-target="#show-carousel" data-bs-slide="next">
                    <i class="fs-1 bi bi-arrow-right-square-fill accenti" style="right: 15rem"></i>
                    <span class="visually-hidden">Next</span>
                </button>
                <button class="carousel-control-prev" type="button" data-bs-target="#show-carousel" data-bs-slide="prev">
                    <i class="fs-1 bi bi-arrow-left-square-fill accenti" style="left: 15rem;"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                
                
            </div>

            <div class="d-flex justify-content-start align-items-center col-12 col-md-4">
                <div class="container m-3">
                    <div class="row">
                        <div class="m-3">
                            <h2>{{ $ad_to_check->title }}</h2>
                            <p class="text-black">{{ $ad_to_check->description }}</p>
                            <br>
                            <p class="text-black" style="line-height: 1rem"><span class="accenti">Utente:</span>
                                {{ $ad_to_check->user->name }}</p>
                            <p class="text-black" style="line-height: 1rem"> <span class="accenti">Categoria:</span>
                                {{ $ad_to_check->category->name }}</p>
                            <p class="text-black" style="line-height: 1rem"> <span class="accenti">Prezzo:</span>
                                € {{number_format($ad_to_check->price, 2)}}</p>
                            </div>
                            {{-- Bottoni accetta e rifuta --}}
                            <div class="row mt-2">
                                <div class="col-12 col-md-6 d-flex justify-content-end">
                                    <form action="{{ route('revisor.accept_ad', ['ad' => $ad_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-presto rounded-4">Accetta</button>
                                    </form>
                                </div>
                                <div class="col-12 col-md-6 d-flex justify-content-start">
                                    <form action="{{ route('revisor.reject_ad', ['ad' => $ad_to_check]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn rounded-4 text-white"
                                            style="background-color:#D2360F">Rifiuta</button>
                                    </form>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (Auth::user()->last_ad_revised)
        <div class="d-flex justify-content-center m-5 pt-5">
            <form action="{{ route('revisor.restore_ad', ['ad' => Auth::user()->last_ad_revised]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-presto rounded-4">Cambiato idea? Rivaluta annuncio precedente</button>
            </form>
        </div>
    @endif





    
    </section>

</x-main>
