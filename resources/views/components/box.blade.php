
<div class="icon-boxes position-relative">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-easel"></i></div>
            @foreach ( $categories as $category )
            <h4 class="title"><a href="" class="stretched-link">{{$category->name}}</a></h4>
            @endforeach
          </div>
        </div><!--End Icon Box -->
      </div>
    </div>
  </div>