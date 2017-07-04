(function ($) {
            $('.up').bind('inview', function (event, visible) {
                if (visible) {
                    $(this).addClass('animated fadeInUp');
                }
            });
            $('.foot').bind('inview', function (event, visible) {
                if (visible) {
                    $(this).addClass('animated fadeInLeft');
                }
            });
            $('.sub').bind('inview', function (event, visible) {
                if (visible) {
                    $(this).addClass('animated fadeInUp')
                }
            });
            $('.ads').bind('inview', function (event, visible) {
                if (visible) {
                    $(this).addClass('animated fadeInUp')
                }
            });
        }(jQuery));