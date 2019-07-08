<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto smooth-scroll">
        @if(isset($menus))
          @foreach($menus as $menu)
            <li class="nav-item">
              <a class="nav-link" href='#{{"$menu->slug"}}' data-offset="90">{{$menu->title}}</a>
            </li>
          @endforeach
        @endif
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
<!-- <div id="glavnaya" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-size: cover; background: url({{asset('assets/img/5-1.jpg')}}) no-repeat center center;"> -->
<div id="glavnaya" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-size: cover; background: url({{asset('img/'.$slide->photo)}}) no-repeat center center;">
  <div class="mask">
    <!-- <div class="mask rgba-indigo-light"> -->
    <div class="container h-100 d-flex justify-content-center align-items-center">
      <div class="row smooth-scroll">
        <div class="col-md-12 text-center">
          <div class="text-white wow fadeInDown">
            <h1 class="display-4 text-uppercase font-weight-bold">Шкафы-купе</h1>
            <hr class="hr-light my-4">
            <h4 class="h4-responsive subtext-header white-text mb-3">{!!$slide->text!!}</h4>
          </div>
          <a href="#features" data-offset="100" class="btn blue-gradient btn-rounded wow fadeInUp" data-wow-delay="0.2s">Welcome</a>
        </div>
      </div>
    </div>
  </div>
</div>