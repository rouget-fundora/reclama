var $j = $.noConflict();

$j(function () {

    $j("#slides1").responsiveSlides({
        auto: true,
        pagination: true,
        speed: 1000,
        timeout: 8000,
        nav: false,
        fade: 5,
    });

});