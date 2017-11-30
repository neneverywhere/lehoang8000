$('.slider').slick({ // slider effect
    fade: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    infinite: true,
    speed: 2000,
    swipe: true,
    touchMove: true,
    draggable: true,
    adaptiveHeight: true,
});

$('.product .similar-product .list').owlCarousel({
    loop:true,
    margin: 10,
    mouseDrag: true,
    touchDrag: true,
    pullDrag: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    smartSpeed: 500,
    autoplaySpeed: 1000,
    responsive:{
        0:{
            items:1,
            dots: false,
        },
        600:{
            items:4,
            dots: false,
        },
        1000:{
            items:6,
            dots: true,
        }
    }
})

$("#home-gallery").justifiedGallery({ // chia hình theo tỉ lệ
    //rowHeight : 200,
    maxRowHeight: '200',
    margins : 10,
    lastRow: 'justify',
    cssAnimation: true,
});

$(document).ready(function(){
    $('.sidebar ul .has-sub').click(function(){ //sidebar effect
        $(this).children('.sub').slideToggle(300);
        if($(this).children('a').children('i').hasClass('fa-plus')){
            $(this).children('a').children('i').removeClass('fa-plus').addClass('fa-minus');
        }else{
            $(this).children('a').children('i').removeClass('fa-minus').addClass('fa-plus');
        };
    });
});

// hover to change image product catalog
$(document).ready(function(){
  $('.product-catalog .item .img img').mouseenter(function(){
    $src = $(this).attr('src');
    $data = $(this).attr('data-src');
    $(this).attr('src',$data);
    $(this).attr('data-src',$src);
  });
  $('.product-catalog .item .img img').mouseleave(function(){
    $src = $(this).attr('src');
    $data = $(this).attr('data-src');
    $(this).attr('src',$data);
    $(this).attr('data-src',$src);
  });
});

// gallery product
$(document).ready(function(){
    $('.product .thumb a:first-child img').addClass('active');
  $('.product .thumb img').click(function(){
    $src = $(this).attr('src');
    $('.product .large img').fadeOut(1);
    $('.product .large img').fadeIn(100);
    $('.product .large img').attr('src',$src);
    $('.product .large a').attr('href',$src);

    $('.product .thumb img').removeClass('active');
    $(this).addClass('active');
  });

  $('.fancybox').fancybox();

  $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function(){
    $('.news .content img').removeAttr('width').removeAttr('height');
    $('.news .content p:has(img)').css('text-align','center');
});

//menu mobile
jQuery(document).ready(function( $ ) {

  // Lấy dữ liệu từ menu bỏ vào menu-mobi
  $a = $(".menu ul").html();
  $("#menu-mobi ul").html($a);

  //Hiêu ứng menu-mobi trượt từ bên phải
  $("#menu-mobi").mmenu({
     "slidingSubmenus": true,
     "extensions": [
        "pagedim-black",
        "theme-dark"
     ],
     "offCanvas": {
        "position": "right"
     }
  });
});