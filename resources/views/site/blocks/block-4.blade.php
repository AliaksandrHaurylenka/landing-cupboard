<!-- Section: Services -->
<section id="katalog" class="section mb-5">

  <!-- Section heading -->
  <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-4 wow fadeIn" data-wow-delay="0.2s">Каталог популярных шкафов-купе</h3>

  <!-- Section description -->
  {{--<p class="text-center grey-text mt-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>--}}

  <!-- Grid row -->
  <div class="row wow fadeIn" data-wow-delay="0.4s">

    <!-- Grid column -->
    <div class="col-md-12">

      <!--  Nav tabs  -->
      <ul class="nav md-pills flex-center flex-wrap mx-0 mb-4" role="tablist">
        <li class="nav-item">
          <a class="nav-link active font-weight-bold text-uppercase" data-toggle="tab" href="#panel2" role="tab"><br>2-х секционные</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel3" role="tab"><br>3-х секционные</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Tab panels -->
    <div class="tab-content pt-0">

      <!-- Panel 1 -->
      <div class="tab-pane fade show in active" id="panel2" role="tabpanel">
        <br>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          @if(isset($catalog2))
            @foreach($catalog2 as $type2)
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="card">

                  <!-- Card image -->
                  <div class="view overlay z-depth-1 zoom">
                    <img class="card-img-top img-fluid" src="{{$type2->photo}}" alt="{{$type2->title}}">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body text-center">

                    <!-- Title -->
                    <h4 class="card-title">{!!$type2->title!!}</h4>
                    <!-- Text -->
                    <p class="card-text">{!!$type2->description!!}</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">Button</a>

                  </div>

                </div>
                <!-- Card -->

              </div>
              <!-- Grid column -->
            @endforeach  
          @endif

        </div>
        <!-- Grid row -->

      </div>
      <!-- Panel 1 -->

      <!-- Panel 2 -->
      <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>

        <!-- Grid row -->
        <div class="row">
          @if(isset($catalog3))
            @foreach($catalog3 as $type3)
              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="card">

                  <!-- Card image -->
                  <div class="view overlay z-depth-1 zoom">
                    <img class="card-img-top img-fluid" src="{{$type3->photo}}" alt="{{$type3->title}}">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body text-center">

                    <!-- Title -->
                    <h4 class="card-title">{!!$type3->title!!}</h4>
                    <!-- Text -->
                    <p class="card-text">{!!$type3->description!!}</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">Button</a>

                  </div>

                </div>
                <!-- Card -->

              </div>
              <!-- Grid column -->

            @endforeach  
          @endif
        </div>
        <!-- Grid row -->
      </div>
      <!-- Panel 2 -->


    </div>
    <!-- Tab panels -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Services -->