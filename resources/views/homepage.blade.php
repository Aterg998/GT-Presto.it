<x-main>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Vendi e cerca tutto <span style="color: #006243;" class="presto">Presto</span><span style="color:#D2360F;">.</span><span style="color: #006243;" class="presto">it</span></h2>
                    <p>Su Presto compri e vendi di tutto, a distanza e in tutta sicurezza. Con l'usato, ci guadagni tu e
                        ci guadagna anche il Pianeta.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('ads.create') }}" class="btn-get-started">Inizia a vendere</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('storage\img\Ecommerce.png') }}" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>


        <x-box></x-box>

    </section>

    <!-- End Hero Section -->

    {{-- annunci aka ultimi aggiunti --}}

    
    <section id="latest" class="bg-white">
        <div class="section-header">
            <h2>Ultimi annunci</h2>
        </div>
        <div class="m-auto row container latest">
            @foreach ($ads as $ad)
                <span class="col-12 col-md-4">
                    <x-card :ad="$ad" />
                </span>
            @endforeach
        </div>
    </section>



            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials bg-white">
                <div class="container col-6" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Recensioni</h2>
                    </div>

                    <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper row d-flex justify-content-center">
                            <x-reviews />
                        </div>
                    </div>
                </div>
            </section>

</x-main>
