
$(document).ready(function () {


    //faq items mechanics
    $('.faq_item_content').not('.faq_item.active .faq_item_content').slideUp(0);

    $('.faq_item_head a').click(function (e) {
        e.preventDefault();
        $(this).closest('.faq_block').find('.faq_item').not($(this).closest('.faq_item')).removeClass('active');
        $(this).closest('.faq_block').find('.faq_item').not($(this).closest('.faq_item')).find('.faq_item_content').slideUp();

        $(this).closest('.faq_item').toggleClass('active');
        $(this).closest('.faq_item').find('.faq_item_content').slideToggle();
    });


    $('.zeen-slider-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        cssEase: 'ease',
        focusOnSelect: true,
        dots: false,
        autoplay: false,
        slide: ".zeen-item",
        appendArrows: $('.zeen-slider-buttons'),
        prevArrow: '<button class="zeen-prev" aria-label="Previous" type="button" style="">Previous</button>',
        nextArrow: '<button class="zeen-next" aria-label="Next" type="button" style="">Next</button>',
        //asNavFor: '.zeen-slider-wrapper .zeen-item .slick-flex .btn',
        respondTo: 'slider',
        swipeToSlide: true,
        variableWidth: false,
        touchThreshold: 25,
        pauseOnHover: false,
    });

    $('.zeen-slider-wrapper-mobile').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        cssEase: 'ease',
        focusOnSelect: true,
        dots: false,
        autoplay: false,
        slide: ".zeen-item",
        appendArrows: $('.zeen-slider-buttons-mobile'),
        prevArrow: '<button class="zeen-prev" aria-label="Previous" type="button" style="">Previous</button>',
        nextArrow: '<button class="zeen-next" aria-label="Next" type="button" style="">Next</button>',
        //asNavFor: '.zeen-slider-wrapper .zeen-item .slick-flex .btn',
        respondTo: 'slider',
        swipeToSlide: true,
        variableWidth: false,
        touchThreshold: 25,
        pauseOnHover: false,
    });

    setInterval(function () { $('.svg-glitch').toggleClass('glitch-active') }, 4000);


    $(".action-buttons a").click(function () {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 500);
        return false;
    });

    /*$(document).on('submit', function (e) {
        e.preventDefault();
        Swal.fire(
            'Поздравляем!',
            'Форма отправлена, мы свяжемся с вами!',
            'success'
        )
        //f.submit();
        //window.location.reload();
    });*/


});

function message(f) {
    //редирект window.open("http://ya.ru"); window.history.back();
    /*(Swal.fire(
        'Good job!',
        'Функция message сработала c условием!',
        'success'
    ))*/
    //f.submit();
    Swal.fire({
        title: 'Спасибо за обращение!',
        text: "Мы с вами свяжемся в ближайшее время",
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Продолжить просмотр'
    }).then((result) => {
        if (result.value) {
            /*Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )*/
            //window.history.back()
            window.location.href = '/'
        }
    })
} 