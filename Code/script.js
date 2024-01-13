$(document).ready(function () {
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function (event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });

    // Highlight the current section in the navbar
    $(window).scroll(function () {
        var scrollDistance = $(window).scrollTop();

        $('div[class^="d"]').each(function () {
            var sectionTop = $(this).offset().top;
            var sectionBottom = sectionTop + $(this).outerHeight();

            if (scrollDistance >= sectionTop && scrollDistance < sectionBottom) {
                $('.navbar-nav a.active').removeClass('active');
                $('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
        });
    }).scroll();
});
