// toogle angle in sidebar
$(document).ready(function(){
    $(".sidebar ul li").click(function(){
        $(this).children(".sub").slideToggle(200);
        if($(this).children('a').children('i').hasClass('fa fa-chevron-down')){
            $(this).children('a').children('i').removeClass('fa fa-chevron-down').addClass('fa fa-chevron-up');
        }
        else{
            $(this).children('a').children('i').removeClass('fa fa-chevron-up').addClass('fa fa-chevron-down');
        }
    });
});

$('.slider').owlCarousel({
    loop:true,
    autoplayHoverPause: true,
    autoplay: true,
    autoplaySpeed: 1500,
    autoplayTimeout: 3000,
    nav: false,
    items: 1,
    responsive:{
        0:{
        	dots: false
        },
        1000:{
        	dots: true
        }
    }
})

$('.nslider').owlCarousel({
    loop:true,
    autoplayHoverPause: true,
    autoplay: true,
    autoplaySpeed: 1500,
    autoplayTimeout: 3000,
    nav: false,
    items: 1,
	  autoHeight:true,
})

$('.banner').owlCarousel({
    //loop:true,
    autoplay: true,
    autoplayHoverPause: true,
    //autoplaySpeed: 1500,
    //autoplayTimeout: 3000,
    nav: false,
	  autoHeight:true,
    responsive:{
        0:{
            items:1,
        },
        1000:{
            items:2,
            margin: 25
        }
    }
})

$('.sale-slider').owlCarousel({
    loop:true,
    autoplayHoverPause: true,
    autoplay: true,
    autoplaySpeed: 1500,
    autoplayTimeout: 3000,
    nav: true,
    navText: ['<i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>','<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>'],
	  autoHeight:true,
	  responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        768:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
})

$('.similar-slider').owlCarousel({
    loop:true,
    autoplayHoverPause: true,
    nav: true,
    navText: ['<i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>','<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>'],
	  autoHeight:true,
	  responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        768:{
            items:3,
        },
        1000:{
            items:5,
        }
    }
})



$(document).ready(function(){
	var row = $('.pslider .item-small').size();
	//alert (row);
	for(var i=0; i<row; i+=4){
	$('.pslider .item-small').slice(i,i+4).wrapAll("<div class='item'>")
	};

	$('.pslider').owlCarousel({
	    loop:true,
	    // autoplayHoverPause: true,
	    // autoplay: true,
	    autoHeight:true,
	    autoplaySpeed: 1500,
	    autoplayTimeout: 3000,
	    nav: true,
	    navText: ['<i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>','<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>'],
	    items: 1,
	})
});

$(document).ready(function(){
	var row = $('.new-slider .item').size();
	//alert (row);
	for(var i=0; i<row; i+=2){
	$('.new-slider .item').slice(i,i+2).wrapAll("<div>")
	};

	$('.new-slider').owlCarousel({
	    autoplay: true,
	    autoplayHoverPause: true,
	    // autoHeight:true,
	    // autoplaySpeed: 1500,
	    // autoplayTimeout: 3000,
	    responsive:{
	        0:{
	            items:1,
	        },
	        768:{
	            items:2,
	        },
	        1000:{
	            items:4,
	        }
	    }
	})
});

$(document).ready(function(){
	var row = $('.access-slider .item').size();
	//alert (row);
	for(var i=0; i<row; i+=3){
	$('.access-slider .item').slice(i,i+3).wrapAll("<div>")
	};

	$('.access-slider').owlCarousel({
	    autoplay: true,
	    // autoHeight:true,
	    // autoplaySpeed: 1500,
	    // autoplayTimeout: 3000,
	    autoplayHoverPause: true,
	    responsive:{
	        0:{
	            items:1,
	        },
	        768:{
	            items:2,
	        },
	        1000:{
	            items:3,
	        }
	    }
	})
});

$('.content div:has(img)').css('text-align','center').css('margin','20px 0');

$("[data-fancybox]").fancybox({
		// Options will go here
});

$( ".product .simg ul li" ).click(function() {
  var url = $(this).children('img').attr('src');
  $(".product .limg a").attr('href',url);
  $(".product .limg img").attr('src',url);

});

var hsidebar = $('.sidebar').height();
var wwin = $(window).width();
if(wwin>1200){
	$('.slider').height(hsidebar);
}

jQuery(document).ready(function( $ ) {
	$menu = $('.menu').html();
	$('#menu-mobi ul').html($menu);
  $("#menu-mobi").mmenu({
      extensions  : [ "fx-panels-slide-100", "fx-listitems-slide", "fx-menu-slide", "pagedim-black"],
      offCanvas   : {
          position    : "right"
      },
  });
 });
