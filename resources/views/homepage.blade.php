<x-main>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>{{ __('messages.homepageH2') }} <span style="color: #006243;" class="presto">Presto</span><span style="color:#D2360F;" class="presto">.</span><span style="color: #006243;" class="presto">it</span></h2>
                    <p>{{ __('messages.slogan') }}</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('ads.create') }}" class="btn-get-started">{{ __('messages.start') }}</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('storage\img\Ecommerce.png') }}" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        <x-box/>
    </section>

    <!-- End Hero Section -->

    {{-- Ultimi aggiunti --}}
    

    <section id="latest" class="bg-white">
        <div class="section-header">
            <h2>{{ __('messages.last_ads') }}</h2>
        </div>

        <div class="m-auto row container latest">
            @foreach ($ads as $ad)
                <div class="col-12 col-md-4">
                    <x-card :ad="$ad"/>
                </div>
            @endforeach
        </div>
    </section>



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials bg-white">
        <div class="container col-6" data-aos="fade-up">

            <div class="section-header">
                <h2>{{ __('messages.review') }}</h2>
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper row d-flex justify-content-center">
                    <x-reviews />
                </div>
            </div>
        </div>
    </section>

</x-main>
