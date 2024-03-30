$(document).ready(function() {
    $('#continue_btn').click(function() {
        // собираем данные с формы
        var send = $('#u_send').val();
        var receive = $('#u_receive').val();
        var promo = $('#referral_code').val();
        var cr_send = document.getElementById("cr_send");
        var crSend = cr_send.innerText;
        var cr_receive = document.getElementById("cr_receive");
        var crReceive = cr_receive.innerText;




        // отправляем данные

        $.ajax({
            url: "order.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "promo": promo,
                "receive": receive,
                "send": send,
                "crSend": crSend,
                "crReceive": crReceive
            },
            // после получения ответа сервера
            success: function(data) {
                window.location.href = '/';
            },
            error: function(xhr, ajaxOptions, thrownerror) {
                window.location.href = '../order/';

            }
        });
    });
});

  $(".header__link").click(function () {
    $(".header__burger-content").removeClass("header__burger-content_active");
    $(".header__burger").removeClass("header__burger_active");
  });

  $(".header__lang").click(function () {
    $(".header__lang-dropdown").toggleClass("header__lang-dropdown_active");
  });

  $(".header__btn").click(function () {
    $(".header__burger-content").removeClass("header__burger-content_active");
    $(".header__burger").removeClass("header__burger_active");
  });

  $(".header__burger").click(function () {
    $(this).toggleClass("header__burger_active");
    $(".header__burger-content").toggleClass("header__burger-content_active");
  });
