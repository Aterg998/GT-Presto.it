<x-main>
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative bg-image-hero">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Vendi  e cerca tutto <span style="color: #006243;" class="presto">Presto</span></h2>
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


    <x-box></x-box>

  </section>

  <!-- End Hero Section -->


  <!-- card annunci -->
  @foreach ($ads as $ad) 
  <x-card :title="$ad->title" :price="$ad->price" :description="$ad->description"/>
  @endforeach


  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Testimonials</h2>
        <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <div class="d-flex align-items-center">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <!-- End testimonial item -->
</x-main>