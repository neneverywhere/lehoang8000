// Slide toggle login
$(document).ready(function(){
    $("header .top .login-info .fa").click(function(){
        $(this).parent().children(".action").slideToggle(200);
    });
});


// Fancybox khi kích vào các hình đại diện của tin
$(document).ready(function(){
    $('.fancybox').on('click', function(){
      var modalImage = $(this).attr('src');
      $.fancybox.open(modalImage);
    });
});

//Hiển thị hình sideimage khi chọn hình đại diện
function responsive_filemanager_callback(field_id){
    $value = $('#'+field_id).val();
    $('#side'+field_id).attr('src',$value);

}

// Hiển thị hộp select menu cấp 2 khi đã click chọn menu cấp 1
$(document).ready(function(){
    $("#parent").change(function(){
    var idparent=$(this).val();
    $('#getmenu').empty();
    $("#getmenu").load('getmenu/'+idparent);
    });
});

// Fancybox lúc chọn hình đại diện của sản phẩm (bài viết)
$(document).ready(function(){
  $('.iframe-btn').fancybox({ 
      width     : 1000,
      height    : 500,
      fitToView : false,
      autoSize : false,
      type      : 'iframe',
  });    
});

//tool tip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
