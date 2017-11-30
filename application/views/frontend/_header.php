<?php 
  $frontend_url = $this->config->item('frontend_url');
  $logo = $this->m_header->Logo();
  $menu = $this->m_header->Menu();
  $footer = $this->m_footer->Footer();
?>

<header>
    <div class="top d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="hidden-xs col-sm-6 col-md-8">
            <div class="text">
              <img src="images/icon_open.png" alt="">
              <span>Giờ mở cửa: 8:00 - 20:00</span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 sbox">
            <div class="top-search">
              <form action="" method="post">
                <input type="text" class="form-control" maxlength="70" name="query" id="search" placeholder="Nhập từ khóa tìm kiếm..." required="">
                <button class="btn btn-default" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="container">
        <div class="row">
          <div class="logo col-9 col-md-6 col-lg-3">
            <a href="/"><img src="<?=$logo?>" alt=""></a>
          </div>
          <div class="d-none d-lg-block col-md-9 text-right">
            <div class="cart">
              <a href="#!"><i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i>Giỏ hàng</a>
            </div>
            <ul class="list-unstyled list-inline menu">
            <li class="list-inline-item"><a href="/">Trang chủ</a></li>
            <?php foreach ($menu as $menulv1) { ?>
             <li class="list-inline-item has-sub">
                <a target="<?=$menulv1['Menu_Target']?>" <?php if(strpos($menulv1['Menu_Link'],'#!')===false) echo 'href="'.$menulv1['Menu_Link'].'"'?>><?=$menulv1['Menu_Name']?></a>
                <?php if($menulv1['menulv2']!=array()) { ?>
                <i class="fa fa-caret-down" aria-hidden="true"></i>
                  <ul class="sub list-unstyled">
                    <?php foreach ($menulv1['menulv2'] as $menulv2) { ?>
                      <li class="has-sub2">
                        <a target="<?=$menulv2['Menu_Target']?>" <?php if(strpos($menulv2['Menu_Link'],'#!')===false) echo 'href="'.$menulv2['Menu_Link'].'"'?>><?=$menulv2['Menu_Name']?></a>
                        <?php if($menulv2['menulv3']!=array()) { ?>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                          <ul class="sub2 list-unstyled">
                          <?php foreach ($menulv2['menulv3'] as $menulv3) { ?>
                            <li><a target="<?=$menulv3['Menu_Target']?>" <?php if(strpos($menulv3['Menu_Link'],'#!')===false) echo 'href="'.$menulv3['Menu_Link'].'"'?>><?=$menulv3['Menu_Name']?></a></li>
                          <?php } ?>
                          </ul>
                        <?php } ?>
                      </li>
                    <?php } ?>
                  </ul>
                <?php } ?>
              </li>
            <?php } ?>
          </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
