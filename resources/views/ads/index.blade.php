<x-main>
    
    <!-- ======= Annunci Section ======= -->
 <section id="portfolio" class="portfolio sections-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Articoli</h2>
      
      {{-- <livewire:ad-index-list/> --}}
         <!-- Start Filter Bar -->
         <div class="filter-bar d-flex justify-content-center rounded-3">
          <div class="mt-2">
            <select class="rounded-3 p-1 border-white">
              <option class="" value="1">Ordinamento predefinito</option>
              <option value="1">Ultimi Arrivi</option>
              <option value="1">Primi Aggiunti</option>
            </select>
          </div>
          <div class="mx-4 mt-2">
            <select class="rounded-3 p-1 border-white">
              <option value="1">Show 12</option>
              <option value="1">Show 12</option>
              <option value="1">Show 12</option>
            </select>
          </div>
          <div>
              <form action="{{ route('ads.search') }}" method="GET" class="d-flex mt-2">
                  <input type="search" name="searched" class="form-control me-2 border-white" placeholder="Cerca"
                      aria-label="Cerca">
              </form>
            </div>
          </div>
        </div>
        <!-- End Filter Bar -->

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