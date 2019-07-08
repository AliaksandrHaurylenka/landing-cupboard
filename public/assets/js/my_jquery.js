$(document).ready(function () {

  $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");


  //Обновление Капчи
  $('#refresh').on('click',function(){
      let captcha = $('img.captcha-img');
      let config = captcha.data('refresh-config');
      $.ajax({
        method: 'GET',
        url: '/get_captcha/' + config,
      }).done(function (response) {
        captcha.prop('src', response);
      });
    });

});