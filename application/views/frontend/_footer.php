<?php 
  $frontend_url = $this->config->item('frontend_url');
  $footer = $this->m_footer->Footer();
  $fmenu = $this->m_footer->MenuFooter();
?>

<!-- The menu -->


<footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 item">
            <h5>Thông tin công ty</h5>
            <ul class="list-unstyled">
               <?php foreach ($fmenu as $fmenu) { ?>
          <li><a <?php if(strpos($fmenu['Menu_Link'],'#!')===false) echo 'href="'.$fmenu['Menu_Link'].'"'?>><?=$fmenu['Menu_Name']?></a></li>
        <?php } ?>
           
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 item">
            <h5>Thông tin công ty</h5>
            <ul class="list-unstyled">
              <li><a href="#!">Trang chủ</a></li>
              <li><a href="#!">Giới thiệu</a></li>
              <li><a href="#!">Sản phẩm</a></li>
              <li><a href="#!">Tin tức</a></li>
              <li><a href="#!">Liên hệ</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 item">
            <h5>Thông tin công ty</h5>
            <ul class="list-unstyled">
              <li><a href="#!">Trang chủ</a></li>
              <li><a href="#!">Giới thiệu</a></li>
              <li><a href="#!">Sản phẩm</a></li>
              <li><a href="#!">Tin tức</a></li>
              <li><a href="#!">Liên hệ</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 item">
            <h5>Kênh thông tin</h5>
            <p>Raw Camera là thương hiệu máy ảnh chuyên nghiệp, nổi tiếng tại Hà Nội và TP Hồ Chí Minh</p>
            <div class="social">
              <a class="fb" href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a class="gg" href="#!"><i class="fa fa-google" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <h3 class="name"><span class="bold red">Công ty TNHH Raw Camera</span></h3>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <p>Trụ sở chính : Tầng 4 - Tòa nhà Hanoi Group - 442 Đội Cấn - Ba Đình - Hà Nội</p>
            <p>Điện thoại : (04) 6674 2332 - (04) 3786 8904</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <p>Văn phòng đại diện : Lầu 3 - Tòa nhà Lữ Gia - Số 70 Lữ Gia - P.15 - Q.11 - TP. HCM</p>
            <p>Điện thoại : (04) 6674 2332 - (04) 3786 8904</p>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="container">
        <p>© Bản quyền thuộc về Avent Team 2017</p>
      </div>
    </div>
  </footer>
  
    <nav id="menu-mobi">
       <ul>
       </ul>
    </nav>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="<?=$frontend_url?>js/bootstrap.min.js"></script>
<script src="<?=$frontend_url?>plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="<?=$frontend_url?>plugins/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="<?=$frontend_url?>plugins/mobi-menu/jquery.mmenu.all.js"></script>
<script src="<?=$frontend_url?>js/app.js"></script>