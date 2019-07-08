<section id="kontakty" class="section mb-5">

  <!-- Section heading -->
  <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-4 pt-5 wow fadeIn" data-wow-delay="0.2s">Контакты</h3>

  <!-- Section description -->
  <p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>

  <!-- Grid row -->
  <div class="row wow fadeIn" data-wow-delay="0.4s">

    <!-- Grid column -->
    <div class="col-md-8 col-lg-9">
      <form action="" method="post">
      {{ csrf_field() }}
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

        <div class="row">
          <div class="col-3">
            <a href="" id="refresh"><img src="{{ Captcha::src('math') }}" alt="captcha" class="captcha-img" data-refresh-config="default"></a>
          </div>
        </div>

        <div class="row">
          <div class="col md-form">
            <input class="form-control" type="text" placeholder="Капча*" name="captcha">
          </div>
        </div>
      </form>

      <div class="text-center text-md-left mb-5 mt-4">
        <button type="submit" class="btn btn-rounded btn-orange-2 white-text">Send</button>
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