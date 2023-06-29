<x-main>
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Vendi  e cerca tutto <span style="color: #006243">Presto</span></h2>
          <p>Su Presto compri e vendi di tutto, a distanza e in tutta sicurezza. Con l'usato, ci guadagni tu e ci guadagna anche il Pianeta.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{route('ads.create')}}" class="btn-get-started">Inizia a vendere</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div> 

    </div>
    <div class=" d-flex justify-content-center">
      <div class="container row">
        @foreach ($categories as $category)
        <span class="col-4">
          <button class="btn m-3 border rounded-4 homepage-box">
            <h4 class="fs-4">{{$category->name}}</h4>
          </button>
        </span>
        @endforeach
      </div>
    </div>
  </section>
  
  <!-- End Hero Section -->
</x-main>