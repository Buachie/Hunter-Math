$(document).ready(function () {
    $(".faq-item").click(function () {
        $(this).children(".ans").slideToggle();
    });

    $(".dropdown").hover(function () {
        $(this).children(".dropdown-content").slideToggle(300);
    });


    $(".menu").click(function () {
        // $("nav ul").toggleClass("active");
        $(".menu-nav").slideToggle(300);
    });

    $(window).resize(function () {
        if ($(window).width < 700) {
            $("footer.container").toggleClass("container-sm");
        }
    });

});