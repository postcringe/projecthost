$(document).ready(function() {
    // плашка логина
    $(document).click(function(e) {
        let time = 200;
        if ($(e.target).closest(".header-login-toggle").length) {
            if ($(e.target).hasClass("toggle__header") && $(".header-login-toggle.active").length) $(".header-login-toggle").removeClass("active").find(".toggle_toggle-area").fadeOut(time);
            else $(".header-login-toggle").addClass("active").find(".toggle_toggle-area").fadeIn(time);
        }
        else {
            $(".header-login-toggle").removeClass("active").find(".toggle_toggle-area").fadeOut(time);
        }
    });
    // МАСКА НА НОМЕР В ШАПКЕ
    $('#header-search__input').mask('+7 (000) 000-00-00', {'translation': {0: {pattern: /[0-9*]/}}});
    $('.phone').mask('+7 (000) 000-00-00', {'translation': {0: {pattern: /[0-9*]/}}});
    // ПОДСВЕТКА ТЕКУЩЕГО РАЗДЕЛА В МЕНЮ
    $(".header-navigation li").each(function() {
        let href = $($(this).find("a").first()).attr("href");
        let isHome;
        let path = window.location.pathname;
        if (href == "/") isHome = false;
        else isHome = path.startsWith(href);
        if (href == path || isHome) {
            $(this).addClass("current");
            console.log("Текущая позиция выделена в главном меню!");
        }
    });
    // ЗАДАЕМ МИНИМАЛЬНУЮ ВЫСОТУ КОНТЕНТА РАВНОЙ ВЫСОТЕ МОНИТОРА
    let MinContentHeight = $('header.main-header').outerHeight(true) + $('footer.main-footer').outerHeight(true);
    $(".main-wrapper").css("min-height", "calc(100vh - " + MinContentHeight + "px)");
    $(window).resize(function() {
        MinContentHeight = $('header.main-header').outerHeight(true) + $('footer.main-footer').outerHeight(true);
    $(".main-wrapper").css("min-height", "calc(100vh - " + MinContentHeight + "px)");
    });
    // ПРИЛИПАНИЕ ШАПКИ
    $('header.main-header').stickMe({
        // Длительность анимации появления
        transitionDuration: 300,
        // Включает тень у шапки
        shadow: false,
        // Прозрачность тени у шапки
        shadowOpacity: 0.3,
        // Включение анимации при появлении шапки
        animate: true,
        // true: Шапка прилипнет к верху когда окно браузера будет достигнут центр страницы
        // false: Шапка прилипнет к верху как только пропадет из поля зрения при скролинге страницы
        triggerAtCenter: true,
        //  Шапка прилипнет к верху при пролистывании страницы на 200 пикселей
        topOffset: 200,
        // Плавное появление 'fade' или скольжение при появлении 'slide'
        transitionStyle: 'slide',
        //  Шапка прикреплена к верху при загрузке страницы
        stickyAlready: false
      });
});