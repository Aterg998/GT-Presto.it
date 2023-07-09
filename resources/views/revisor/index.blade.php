<x-main>
    <!-- ======= Revisor Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>{{ $ad_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}</h2>
            </div>
        </div>


        @if ($ad_to_check)
            {{-- Show annuncio da revisionare --}}
            <div class="container d-flex justify-content-evenly m-5">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators ">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
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
                                <h2>{{ $ad_to_check->title }}</h2>
                                <p class="text-black">{{ $ad_to_check->description }}</p>
                                <br>
                                <p class="text-black" style="line-height: 1rem"><span class="accenti">Utente:</span>
                                    {{ $ad_to_check->user->name }}</p>
                                <p class="text-black" style="line-height: 1rem"> <span class="accenti">Categoria:</span>
                                    {{ $ad_to_check->category->name }}</p>
                                <p class="text-black" style="line-height: 1rem"> <span class="accenti">Prezzo:</span>
                                    {{ $ad_to_check->price }}</p>

                                {{-- Bottoni accetta e rifuta --}}
                                <div class="row mt-5">
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
