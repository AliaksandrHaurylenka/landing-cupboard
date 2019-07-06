<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Шкафы</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('assets/favicon.ico') }}">

  <style>
    html,
    body,
    header,
    .jarallax {
      height: 100%;
    }

    @media (min-width: 560px) and (max-width: 740px) {
      html,
      body,
      header,
      .jarallax {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #23242a!important;
      }
      .navbar {
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12) !important;
      }
    }
  </style>
</head>

<body class="construction-lp white">

<!-- Navigation & Intro -->
<header>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto smooth-scroll">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features" data-offset="90">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services" data-offset="90">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio" data-offset="90">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials" data-offset="30">Testimonials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" data-offset="90">Contact</a>
          </li>
        </ul>
        <!-- Social Icon  -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Intro Section -->
  <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}'
       style="background-size: cover; background: url({{asset('img/5-1.jpg')}}) no-repeat center center;">
    <div class="mask">
      <!-- <div class="mask rgba-indigo-light"> -->
      <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row smooth-scroll">
          <div class="col-md-12 text-center">
            <div class="text-white wow fadeInDown">
              <h1 class="display-4 text-uppercase font-weight-bold">Building</h1>
              <hr class="hr-light my-4">
              <h4 class="subtext-header white-text mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <p> Deleniti consequuntur, nihil voluptatem modi nobis veniam.</p></h4>
            </div>
            <a href="#features" data-offset="100" class="btn blue-gradient btn-rounded wow fadeInUp" data-wow-delay="0.2s">Welcome</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
<!-- Navigation & Intro -->

<!-- Main content -->
<main>

  <div class="container">
    <!-- Section: Features -->
    <section id="features" class="section feature-box mb-3 mt-5 pt-4 pb-3">

      <!-- Section heading -->
      <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-4 wow fadeIn" data-wow-delay="0.2s">Наши преимущества</h3>
      <!-- Section description -->
      <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>

      <!-- Grid row -->
      <div class="row text-center">

        <!-- Grid column -->
        <div class="col-md-4 mb-1 mt-1 wow fadeIn" data-wow-delay="0.4s">
          <i class="fas fa-cubes orange-text-2 fa-4x mb-4"></i>
          <h5 class="font-weight-bold mb-4">Perfection</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-1 mt-1 wow fadeIn" data-wow-delay="0.4s">
          <i class="fas fa-users orange-text-2 fa-4x mb-4"></i>
          <h5 class="font-weight-bold mb-4">Safety</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-1 mt-1 wow fadeIn" data-wow-delay="0.4s">
          <i class="fas fa-magic orange-text-2 fa-4x mb-4"></i>
          <h5 class="font-weight-bold mb-4">Flexibility</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!-- Section: Features -->

    <!-- <hr class="mt-5 pb-4"> -->
  </div>


  <div class="container-fluid background-grey">

    <div class="container">

      <!-- Section: Testimonials v.1 -->
      <section id="testimonials" class="section mb-0 pt-5 pb-0">

        <!-- Section heading -->
        <h3 class="text-center text-uppercase font-weight-bold mt-5 mb-5 wow fadeIn" data-wow-delay="0.2s">Как мы обеспечиваем доступные цены?</h3>

        <!-- Section description -->
        <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>

        <div class="row align-items-center">
          <div class="col-sm-6">
            <img src="{{asset('img/women.png')}}" class="img-fluid">
          </div>
          <div class="col-sm-6">
            <button type="button" class="btn btn-primary d-block">Primary</button>
            <button type="button" class="btn btn-secondary d-block">Secondary</button>
          </div>
        </div>



      </section>
      <!-- Section: Testimonials v.1 -->

    </div>
  </div>



  <div class="container-fluid orange lighten-1">
    <!-- <div class="container-fluid yellow  darken-1"> -->

    <div class="container">

      <!-- Section: Testimonials v.1 -->
      <section id="testimonials" class="section mb-0 pb-0 pt-5">

        <!-- Section heading -->
        <h3 class="text-center text-uppercase font-weight-bold mt-5 mb-5 wow fadeIn" data-wow-delay="0.2s">Пригласите нашего замерщика совершенно бесплатно</h3>

        <!-- Section description -->
        <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>


        <div class="row align-items-center">
          <div class="col-sm-6">
            <img src="{{asset('img/men.png')}}" class="img-fluid">
          </div>
          <div class="col-sm-6">
            <h3>Что он будет делать:</h3>
            <ul class="">
              <li class="">Dapibus ac facilisis in</li>
              <li class="">Morbi leo risus</li>
              <li class="">Porta ac consectetur ac</li>
              <li class="">Vestibulum at eros</li>
            </ul>
            <button type="button" class="btn btn-secondary d-block">Secondary</button>
          </div>
        </div>



      </section>
      <!-- Section: Testimonials v.1 -->

    </div>
  </div>



  <div class="container">
    <!-- Section: Services -->
    <section id="services" class="section mb-5">

      <!-- Section heading -->
      <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-4 wow fadeIn" data-wow-delay="0.2s">Каталог популярных шкафов-купе 2018 года</h3>

      <!-- Section description -->
      <p class="text-center grey-text mt-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>

      <!-- Grid row -->
      <div class="row wow fadeIn" data-wow-delay="0.4s">

        <!-- Grid column -->
        <div class="col-md-12">

          <!--  Nav tabs  -->
          <ul class="nav md-pills flex-center flex-wrap mx-0 mb-4" role="tablist">
            <li class="nav-item">
              <a class="nav-link active font-weight-bold text-uppercase" data-toggle="tab" href="#panel31" role="tab"><br>construction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel33" role="tab"><br>painting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel32" role="tab"><br>architecture</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel34" role="tab"><br>renovation</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Tab panels -->
        <div class="tab-content pt-0">

          <!-- Panel 1 -->
          <div class="tab-pane fade show in active" id="panel31" role="tabpanel">
            <br>

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <!-- <div class="view overlay z-depth-1 zoom">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%281%29.jpg" class="img-fluid">
                </div> -->

                <div class="card">

                  <!-- Card image -->
                  <div class="view overlay z-depth-1 zoom">
                    <img class="card-img-top img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%281%29.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body text-center">

                    <!-- Title -->
                    <h4 class="card-title">Card title</h4>
                    <!-- Text -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">Button</a>

                  </div>

                </div>
                <!-- Card -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <!-- <div class="view overlay z-depth-1 zoom">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%282%29.jpg" class="img-fluid">
                </div> -->

                <div class="card">

                  <!-- Card image -->
                  <div class="view overlay z-depth-1 zoom">
                    <img class="card-img-top img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%282%29.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body text-center">

                    <!-- Title -->
                    <h4 class="card-title">Card title</h4>
                    <!-- Text -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">Button</a>

                  </div>

                </div>
                <!-- Card -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <!-- <div class="view overlay z-depth-1 zoom">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%283%29.jpg" class="img-fluid">
                </div> -->

                <div class="card">

                  <!-- Card image -->
                  <div class="view overlay z-depth-1 zoom">
                    <img class="card-img-top img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%283%29.jpg" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body text-center">

                    <!-- Title -->
                    <h4 class="card-title">Card title</h4>
                    <!-- Text -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">Button</a>

                  </div>

                </div>
                <!-- Card -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Panel 1 -->

          <!-- Panel 2 -->
          <div class="tab-pane fade" id="panel32" role="tabpanel">
            <br>

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%286%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%285%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%284%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Panel 2 -->

          <!-- Panel 3 -->
          <div class="tab-pane fade" id="panel33" role="tabpanel">
            <br>

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%2810%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%2813%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%2814%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Panel 3 -->

          <!-- Panel 4 -->
          <div class="tab-pane fade" id="panel34" role="tabpanel">
            <br>

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%289%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%288%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-lg-4 col-md-6 mb-5">

                <!-- Featured image -->
                <div class="view overlay z-depth-1 zoom">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%286%29.jpg" class="img-fluid">
                </div>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Panel 4 -->

        </div>
        <!-- Tab panels -->

      </div>
      <!-- Grid row -->

    </section>
    <!-- Section: Services -->
  </div>


  <!-- Streak -->
  <div class="streak streak-photo streak-md" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/City/12-col/img%20%2822%29.jpg');">
    <div class="flex-center mask rgba-indigo-strong">
      <div class="text-center white-text">
        <h2 class="h2-responsive mb-5"><i class="fas fa-quote-left" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <i class="fas fa-quote-right" aria-hidden="true"></i></h2>
        <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Erich Fromm</h5>
      </div>
    </div>
  </div>
  <!-- Streak -->

  <div class="container">



    <!-- Section: Portfolio -->
    <section id="portfolio" class="section mb-3">

      <!-- Section heading -->
      <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Наши проекты</h3>

      <!-- Section description -->
      <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>

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

          <figure class="col-md-3">
            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(1).jpg" data-size="1600x1067">
              <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(1).jpg" class="img-fluid z-depth-1">
            </a>
          </figure>

          <figure class="col-md-3">
            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(136).jpg" data-size="1600x1067">
              <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(136).jpg" class="img-fluid z-depth-1">
            </a>
          </figure>

          <figure class="col-md-3">
            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(7).jpg" data-size="1600x1067">
              <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(7).jpg" class="img-fluid z-depth-1">
            </a>

          </figure>
          <figure class="col-md-3">
            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(137).jpg" data-size="1600x1067">
              <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(137).jpg" class="img-fluid z-depth-1">
            </a>
          </figure>

          <figure class="col-md-3">
            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(132).jpg" data-size="1600x1067">
              <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(132).jpg" class="img-fluid z-depth-1">
            </a>
          </figure>

          <figure class="col-md-3">
            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(131).jpg" data-size="1600x1067">
              <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(131).jpg" class="img-fluid z-depth-1">
            </a>
          </figure>

          <figure class="col-md-3">
            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(3).jpg" data-size="1600x1067">
              <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(3).jpg" class="img-fluid z-depth-1">
            </a>
          </figure>

          <figure class="col-md-3">
            <a href="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(134).jpg" data-size="1600x1067">
              <img src="https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(134).jpg" class="img-fluid z-depth-1">
            </a>
          </figure>
        </div>
        <!-- Full width lightbox -->

      </div>
      <!-- Grid column -->

    </div>

  </div>



  <!-- Streak -->
  <div class="streak streak-photo streak-long-2" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img%20%2818%29.jpg')">
    <div class="mask flex-center rgba-black-strong">
      <div class="container">

        <h3 class="text-center text-white mb-5 text-uppercase font-weight-bold wow fadeIn" data-wow-delay="0.2s">люди нам доверяют</h3>

        <!--First row-->
        <div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s">

          <!--First column-->
          <div class="col-md-3 mb-2">
            <h1 class="amber-text mb-1 font-weight-bold">+950</h1>
            <p>Happy clients</p>
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-3 mb-2">
            <h1 class="amber-text mb-1 font-weight-bold">+150</h1>
            <p>Projects completed</p>
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-3 mb-2">
            <h1 class="amber-text mb-1 font-weight-bold">+85</h1>
            <p>Winning awards</p>
          </div>
          <!--/Third column-->

          <!--Fourth column-->
          <div class="col-md-3">
            <h1 class="amber-text mb-1 font-weight-bold">+246</h1>
            <p>Cups of coffee</p>
          </div>
          <!--/Fourth column-->

        </div>
        <!--/First row-->
      </div>
    </div>
  </div>

  <div class="container">

    <!-- Section: Contact v.2 -->
    <section id="contact" class="section mb-5">

      <!-- Section heading -->
      <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-4 pt-5 wow fadeIn" data-wow-delay="0.2s">Контакты</h3>

      <!-- Section description -->
      <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>

      <!-- Grid row -->
      <div class="row wow fadeIn" data-wow-delay="0.4s">

        <!-- Grid column -->
        <div class="col-md-8 col-lg-9">
          <form>
            <!-- Grid row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form">
                  <div class="md-form">
                    <input type="text" id="form41" class="form-control">
                    <label for="form41" class="">Your name</label>
                  </div>
                </div>
              </div>

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form">
                  <div class="md-form">
                    <input type="text" id="form52" class="form-control">
                    <label for="form52" class="">Your email</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- Grid row -->

            <!-- Second row -->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <input type="text" id="form51" class="form-control">
                  <label for="form51" class="">Subject</label>
                </div>
              </div>
            </div>
            <!-- Second row -->

            <!-- Third row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-md-12">

                <div class="md-form">
                  <textarea type="text" id="form76" class="md-textarea form-control" rows="3"></textarea>
                  <label for="form76">Your message</label>
                </div>

              </div>
            </div>
            <!-- Third row -->
          </form>

          <div class="text-center text-md-left mb-5 mt-4">
            <a class="btn btn-rounded btn-orange-2 white-text">Send</a>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3">
          <ul class="text-center list-unstyled float-md-right">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
              <p>New York, NY 10012, USA</p>
            </li>

            <li><i class="fas fa-phone fa-2x"></i>
              <p>+ 01 234 567 89</p>
            </li>

            <li><i class="fas fa-envelope fa-2x"></i>
              <p>contact@mdbootstrap.com</p>
            </li>
          </ul>
        </div>
        <!-- Grid column -->

      </div>

    </section>
    <!-- Section: Contact v.2 -->

  </div>
  <!-- Fifth container -->

</main>
<!-- Main content -->

<!-- Footer -->
<footer class="page-footer footer-tiles text-center text-md-left pt-4 mt-4">

  <!-- Footer Links -->
  <div class="container mt-1 mb-2">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-xl-4 col-lg-4 mt-2 mb-1 wow fadeIn" data-wow-delay="0.3s">
        <!-- About -->
        <h5 class="text-uppercase mb-4"><strong>ABOUT COMPANY</strong></h5>

        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>

        <p class="">Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.</p>

        <div class="footer-socials">

          <!-- Facebook -->
          <a type="button" class="btn-floating orange"><i class="fab fa-facebook-f"></i></a>
          <!-- Dribbble -->
          <a type="button" class="btn-floating orange"><i class="fab fa-dribbble"></i></a>
          <!-- Twitter -->
          <a type="button" class="btn-floating orange"><i class="fab fa-twitter"></i></a>
          <!-- Google + -->
          <a type="button" class="btn-floating orange"><i class="fab fa-google-plus-g"></i></a>
          <!-- Linkedin -->

        </div>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-xl-3 ml-auto col-lg-4 mt-2 mb-1 col-md-6 wow fadeIn" data-wow-delay="0.3s">
        <!-- Search -->
        <h5 class="text-uppercase mb-4"><strong>Search something</strong></h5>

        <ul class="footer-search list-unstyled">
          <li>
            <form class="search-form" role="search">
              <div class="md-form waves-effect">
                <input type="text" class="form-control" placeholder="Search">
              </div>
            </form>
          </li>
        </ul>

        <!-- Info -->
        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-xl-3 ml-auto col-lg-4 mt-2 mb-1 col-md-6 wow fadeIn" data-wow-delay="0.3s">

        <!-- Title -->
        <h5 class="text-uppercase mb-4"><strong>Opening hours</strong></h5>

        <!-- Opening hours table -->
        <table class="table footer-table text-center">
          <tbody>
          <tr>
            <td>Mon - Thu:</td>
            <td>8am - 9pm</td>
          </tr>
          <tr>
            <td>Fri - Sat:</td>
            <td>8am - 1am</td>
          </tr>
          <tr>
            <td>Sunday:</td>
            <td>9am - 10pm</td>
          </tr>
          </tbody>
        </table>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
    <div class="container-fluid">
      © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
    </div>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<!--  SCRIPTS  -->
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>

<script>
  //Animation init
  new WOW().init();

  //Modal
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })

  // Material Select Initialization
  $(document).ready(function() {
    $('.mdb-select').material_select();
  });

  // MDB Lightbox Init
  $(function () {
    $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
  });
</script>

</body>

</html>
