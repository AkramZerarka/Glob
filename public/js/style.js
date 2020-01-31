$(document).ready(function () {
    var scrolltop = $(window).scrollTop();
    var resize = $(window).width();
    var image = $('#img');
    if (resize < 1000 || scrolltop >= 60) {
        image.attr('src', '/images/logo/medsol_logo03.svg').width(200);
        $('#navtrans').addClass('bg-white');
        $('#navtrans').addClass('shadow');
    } else {
        image.attr('src', '/images/logo/logo.svg').width(150);
        $('#navtrans').removeClass('shadow');
        $('#navtrans').removeClass('bg-white');
    }
    $(window).scroll(function () {
        scrolltop = $(window).scrollTop();
        if (scrolltop >= 60) {
            image.attr('src', '/images/logo/medsol_logo03.svg').width(200);
            $('#navtrans').addClass('bg-white');
            $('#navtrans').addClass('shadow');
        } else {
            if ($(window).width() >= 1000) {
                image.attr('src', '/images/logo/logo.svg').width(150);
                $('#navtrans').removeClass('shadow');
                $('#navtrans').removeClass('bg-white');
            }
        }
    });
    $(window).resize(function () {
        resize = $(window).width();
        if (resize < 1000) {
            image.attr('src', '/images/logo/medsol_logo03.svg').width(200);
            $('#navtrans').addClass('bg-white');
            $('#navtrans').addClass('shadow');
        } else {
            image.attr('src', '/images/logo/logo.svg').width(150);
            $('#navtrans').removeClass('shadow');
            $('#navtrans').removeClass('bg-white');
        }
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    var currentName = window.location.pathname;
    currentName = currentName.split("/")[1];
    if (currentName == '') {
        $('#accueil').addClass('active');
        $('#accueil').parent().addClass('show');
    } else {
        $('#' + currentName).addClass('active');
        $('#' + currentName).parent().addClass('show');
    }
    window.addEventListener('load', function () {
        if (currentName == '') {
            new Glider(document.querySelector('.glider'), {
                slidesToShow: 1,
                slidesToScroll: 1,
                scrollLock: true,
                dots: '#resp-dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                },
                responsive: [{
                    breakpoint: 775,
                    settings: {
                        slidesToShow: 'auto',
                        slidesToScroll: 'auto',
                        itemWidth: 150,
                        duration: 0.25
                    }
                }, {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        itemWidth: 150,
                        duration: 0.25
                    }
                }]
            });
        }
    });
    $('#inputfile').on('change', function () {
        var fileName = $(this).val();
        $(this).next('.custom-file-label').html(fileName);
    })
    $('#myCropper').attr('name', 'pic');
    $('#Cropper').attr('name', 'pic');
    $('[data-fancybox]').fancybox({
        protect: true,
        buttons: [
            'zoom',
            "thumbs",
            'close'
        ]
    });
    $('.js-example-basic-multiple').select2();
});
$(document).ready(function () {
    $('#myTable_filter').addClass('form-group');
    $("#myTable_filter :input").addClass('form-control');
    $('#myTable_length').addClass('form-group');
    $("#myTable_length :input").addClass('form-control');
});
