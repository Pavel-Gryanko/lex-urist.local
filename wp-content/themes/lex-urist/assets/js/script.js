$(document).ready(function () {
/**
  // Маска телефона в форме
  $(".phone_inp").mask("+7 (999) 999-99-99");

  // Обертка таблицы wp
  $('figure.wp-block-table').children().unwrap();
  $(".container-page table").addClass('content-table');

  // gallery wp standart
  $("a.gallery-fancybox").fancybox();
  $("ul.wp-block-gallery li a").fancybox();
  $("ul.blocks-gallery-grid li a").fancybox();
  $("figure.wp-block-image a").fancybox();
  $('ul.blocks-gallery-grid li a').attr("data-fancybox","gallery");
  $('.wp-block-media-text__media a').attr("data-fancybox","gallery");
 */
    var show = true;
    var countbox = ".show-count";
    $(window).on("scroll load resize", function () {
        if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
        var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
        var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
        var w_height = $(window).height(); // Высота окна браузера
        var d_height = $(document).height(); // Высота всего документа
        var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
        if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
            $('.sec-about-numbers__count').css('opacity', '1');
            $('.sec-about-numbers__count').spincrement({
                thousandSeparator: "",
                duration: 1200
            });
            show = false;
        }
    });
 
  // Кнопка мобильного меню header
  $("a.header__menu-btn-mob").on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('header__menu-btn-mob_active');
    $(".main-navbar").toggleClass('main-navbar_active');
  });

});
// END READY

//Кнопка вверх
var linkTop = $('a.link-up');
$(window).scroll(function () {
    if ($(window).scrollTop() > 1100) {
        linkTop.addClass('link-up_show');
    } else {
        linkTop.removeClass('link-up_show');
    }
});
linkTop.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});

// Фиксированное меню
/*
var options = {
    offset: 350
}
var header = new Headhesive('.header__top-menu', options);
*/ 


