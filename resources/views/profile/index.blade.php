<x-main>
    
    <!-- ======= Annunci Section ======= -->
 <section id="portfolio" class="portfolio sections-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Articoli</h2>
      
      {{-- <livewire:ad-index-list/> --}}

      <div class="container row">
        @forelse ($ads as $ad)
        <span class="col-12 col-md-4">
            <x-card :ad="$ad"/>
        </span>
        @empty
        <div class="col-12">
            <div class="alert alert-warning py-3 shadow">
                <p class="lead">Non ci sono annunci per questa ricerca. Prova a cambiare i parametri.</p>
            </div>
        </div>
        @endforelse
      </div>
    </div>
    </div>

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

    {{--   <div>
        <ul class="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-product">Product</li>
          <li data-filter=".filter-branding">Branding</li>
          <li data-filter=".filter-books">Books</li>
        </ul><!-- End Portfolio Filters -->
      </div> --}}
    </section>
</x-main>