<section id="kontakty" class="section mb-5">

  <!-- Section heading -->
  <h3 class="text-center text-uppercase font-weight-bold mb-5 mt-4 pt-5 wow fadeIn" data-wow-delay="0.2s">Контакты</h3>

  <!-- Section description -->
  {{--<p class="text-center grey-text my-5 w-responsive mx-auto wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia? Autem delectus quod accusamus tempora, aperiam minima assumenda deleniti.</p>--}}

  <!-- Grid row -->
  <div class="row wow fadeIn" data-wow-delay="0.4s">

    <!-- Grid column -->
    <div class="col-md-8 col-lg-9">
      <form action="/message" method="post">
        {{ csrf_field() }}
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form">
              <div class="md-form">
                <input type="text" id="form41" class="form-control" name="name" value="{{old('name')}}" required>
                <label for="form41" class="">Ваше имя*</label>
              </div>
            </div>
          </div>

          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form">
              <div class="md-form">
                <input type="email" id="form52" class="form-control" name="email" value="{{old('email')}}" required>
                <label for="form52" class="">Email*</label>
              </div>
            </div>
          </div>
        </div>
        <!-- Grid row -->

        <!-- Second row -->
        <div class="row">
          <div class="col-md-12">
            <div class="md-form">
              <input type="text" id="form51" class="form-control" name="subject" value="{{old('subject')}}">
              <label for="form51" class="">Тема</label>
            </div>
          </div>
        </div>
        <!-- Second row -->

        <!-- Third row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-12">

            <div class="md-form">
              <textarea type="text" id="form76" class="md-textarea form-control" rows="3" name="message" required>{{old('message')}}</textarea>
              <label for="form76">Ваше сообщение*</label>
            </div>

          </div>
        </div>
        <!-- Third row -->

        <div class="row">
          <div class="col-3">
            <!-- https://itsolutionstuff.com/post/how-to-create-captcha-code-in-laravel-5example.html -->
            <img src="{{ Captcha::src('math') }}" alt="captcha" class="captcha-img" data-refresh-config="default">
          </div>
        </div>

        <div class="row">
          <div class="col md-form">
            <input class="form-control" type="text" placeholder="Капча*" name="captcha" required>
          </div>
        </div>

        <div class="text-center text-md-left mb-5 mt-4">
          <button type="submit" class="btn btn-rounded btn-orange-2 white-text">Отправить</button>
        </div>
      </form>


      {{--<form id="contactform" method="post" action="{{ route('ajax.contact.send') }}">--}}
      {{--<form id="contactform" method="post" action="/sendmail">
        {{ csrf_field() }}

        <div id="sendmessage">
          Ваше сообщение отправлено!
        </div>
        <div id="senderror">
          При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span>{{ env('MAIL_ADMIN') }}</span>
        </div>
        <div class="row">
          <div class="col-lg-4 field">
            <input type="text" name="name" placeholder="* Введите ваше имя" required />
          </div>
          <div class="col-lg-4 field">
            <input type="email" name="email" placeholder="* Введите ваш email" required />
          </div>
          <div class="col-lg-4 field">
            <input type="text" name="subject" placeholder="* Введите тему сообщения" required />
          </div>
          <div class="col-lg-12 margintop10 field">
            <textarea rows="12" name="message" class="input-block-level" placeholder="* Ваше сообщение..." required></textarea>
            <p>
              <button class="btn btn-theme margintop10 pull-left" type="submit">Отправить</button>
              <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
            </p>
          </div>
        </div>
      </form>--}}




    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3">
      <ul class="text-center list-unstyled float-md-right">
        <li><i class="fas fa-map-marker-alt fa-2x"></i>
          <p>{{$contacts->address}}</p>
        </li>

        <a href="tel:{{$contacts->phone}}" class="a-address-contacts">
        <li><i class="fas fa-phone fa-2x"></i>
          <p>{{$contacts->phone}}</p>
        </li>

        <a href="mailto:{{$contacts->email}}" class="a-address-contacts" target="_blank">
          <li><i class="fas fa-envelope fa-2x"></i>
            <p>{{$contacts->email}}</p>
          </li>
        </a>
      </ul>
    </div>
    <!-- Grid column -->

  </div>

</section>