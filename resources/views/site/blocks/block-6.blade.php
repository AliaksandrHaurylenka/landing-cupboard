<div class="container">
  <!-- Section: Portfolio -->
  <section id="proekty" class="section mb-3">

    <!-- Section heading -->
    <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Наши проекты</h3>

    <!-- Section description -->
    {{--<p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>--}}

  </section>
  <!-- Section: Portfolio -->
</div>

<div class="container-fluid">

  <div class="row mb-5 wow fadeIn" data-wow-delay="0.4s">

    <!-- Grid column -->
    <div class="col-md-12 mb-5">

      <div id="mdb-lightbox-ui"></div>

      <!-- Full width lightbox -->
      <div class="mdb-lightbox">

        @if(isset($catalogs))
          @foreach($catalogs as $catalog)
            <figure class="col-md-3">
              <a href="{{$catalog->photo}}" data-size="1600x1067">
                <img src="{{$catalog->photo}}" class="img-fluid z-depth-1">
              </a>
            </figure>
          @endforeach  
        @endif
      </div>
      <!-- Full width lightbox -->

    </div>
    <!-- Grid column -->

  </div>

</div>