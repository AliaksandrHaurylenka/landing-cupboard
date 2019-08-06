<div class="row justify-content-center my-4">
  <form id="feedbackForm" method="post" action="/assets/feedback-bootstrap4/process/process.php" enctype="multipart/form-data" novalidate>
    <!--    для var_damp-->
    <!--  <form class="col-6" method="post" action="/process/process.php" enctype="multipart/form-data" novalidate>-->
    <div class="card">
      <div class="card-header">Обратная связь</div>
      <div class="card-block">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form">
              <div class="md-form">
                <input type="text" id="form41" class="form-control" name="name">
                <label for="form41" class="">Ваше имя*</label>
              </div>
            </div>
          </div>

          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form">
              <div class="md-form">
                <input type="email" id="form52" class="form-control" name="email">
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
              <input type="text" id="form51" class="form-control" name="subject">
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
              <textarea type="text" id="form76" class="md-textarea form-control" rows="3" name="message"></textarea>
              <label for="form76">Ваше сообщение*</label>
            </div>

          </div>
        </div>
        <!-- Third row -->
        <? include_once "input-blocks/_captcha.php"?>


        <!-- Пользовательское солашение -->
        <div class="checkbox">
          <label>
            <input type="checkbox" name="agree"> Нажимая кнопку, я принимаю условия
            <a href="#">Пользовательского соглашения</a> и даю своё согласие на обработку моих
            персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О
            персональных
            данных».
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- Индикация загрузки данных формы на сервер -->
        <div class="clearfix"></div>
        <div class="progress" style="display:none; margin-top: 20px;">
          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
               aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
            <span class="sr-only">0%</span>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </form>
  <!-- Сообщение об успешной отправки формы -->
  <div class="alert alert-warning success-message d-none">
    <!-- Сообщение об успешной отправки формы -->
    <div class="card-footer text-muted">
      <!-- Сообщение об успешной отправки формы -->
      Сообщение успешно отправлено. Нажмите на <a class="show-form" href="#">ссылку</a>, чтобы отправить ещё одно сообщение.
    </div>
  </div>
</div>