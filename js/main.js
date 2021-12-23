$(document).ready(function() {

  $('.phone-field').inputmask("+7(999)999-9999");

    // добавляем правило для валидации телефона
    jQuery.validator.addMethod("checkMaskPhone", function(value, element) {
        return /\+\d{1}\(\d{3}\)\d{3}-\d{4}/g.test(value);
    });

    // получаем нашу форму по class
    var form = $('#contact');

    // включаем валидацию в форме
    form.validate();

    // вешаем валидацию на поле с телефоном по классу
    $.validator.addClassRules({
        'phone-field': {
            checkMaskPhone: true,
        }
    });

    // Проверка на валидность формы при отправке, если нужно
    form.submit(function(e){
        e.preventDefault();
        if (form.valid()) {
            alert('Форма отправлена');
        }
        return;
    });




    $('.useful__btn___articles').click(function() {
      $('.useful__content__articles').addClass('useful__item__active');
      $('.useful__content__news').removeClass("useful__item__active");
      $('.useful__content__court').removeClass("useful__item__active");

      $('.useful__btn___articles').addClass('useful__btn__active');
      $('.useful__btn___news').removeClass("useful__btn__active");
      $('.useful__btn___court').removeClass("useful__btn__active");
    });

    $('.useful__btn___news').click(function() {
      $('.useful__content__articles').removeClass('useful__item__active');
      $('.useful__content__news').addClass("useful__item__active");
      $('.useful__content__court').removeClass("useful__item__active");

      $('.useful__btn___articles').removeClass('useful__btn__active');
      $('.useful__btn___news').addClass("useful__btn__active");
      $('.useful__btn___court').removeClass("useful__btn__active");
    });

    $('.useful__btn___court').click(function() {
      $('.useful__content__articles').removeClass('useful__item__active');
      $('.useful__content__news').removeClass("useful__item__active");
      $('.useful__content__court').addClass("useful__item__active");

      $('.useful__btn___articles').removeClass('useful__btn__active');
      $('.useful__btn___news').removeClass("useful__btn__active");
      $('.useful__btn___court').addClass("useful__btn__active");
    });

    document.querySelector('.header__nav__services').addEventListener('click', function(){
      document.querySelector('.menu').classList.add("animate");
    });
    document.querySelector('.close').addEventListener('click', function(){
      document.querySelector('.menu').classList.remove("animate");
    });


    $('.main__phone').click(function() {
      $('.main__phone').toggleClass('main__phone__active');
      $('.main__social__items').toggleClass('main__social__items__active');
    });

    $(".btn__feedback").click(function() {
      $([document.documentElement, document.body]).animate({
        scrollTop: $(".feedback__wrapper").offset().top
      }, 500);
    });

});
