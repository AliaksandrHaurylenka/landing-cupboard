<!-- Section: Features -->
<section id="features" class="section feature-box my-md-3 py-md-3 my-5 py-5">

  <!-- Section heading -->
  <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-4 wow fadeIn" data-wow-delay="0.2s">Наши преимущества</h3>
  <!-- Section description -->
  <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Шкаф-купе вариант мебели, который дает максимум места для хранения одежды, при этом не отнимает минимум жилого пространства. Такие шкафы приобретают большую востребованность благодаря высокой функциональности и надежности.</p>


  <!-- Grid row -->
  <div class="d-flex flex-md-row flex-column justify-content-around text-center">
    <!-- Grid column -->
    @if(isset($advantages))
      @foreach($advantages as $advantage)
        <div class="mb-1 mt-1 wow fadeIn" data-wow-delay="0.4s">
          <img src="{{asset('img/'.$advantage->photo)}}" class="img-fluid mb-4" alt="">
          <p class="mb-4 p-advantage">{{$advantage->title}}</p>
        </div>
      @endforeach
    @endif
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features -->