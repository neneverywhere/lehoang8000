<!DOCTYPE html>
<html lang="vi">
<?=$this->load->view('frontend/_head')?>
<?php 
  $frontend_url = $this->config->item('frontend_url');
?>
<body>

<div class="page">
   <div class="header">
      <a href="#menu-mobi"><i class="fa fa-bars fa-2x"></i></a>
   </div>

  <?=$this->load->view('frontend/_header')?>

<main>
    <div class="policy">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-3 item">
            <div class="img"><img src="<?=$frontend_url?>images/policy_1_image.png" alt=""></div>
            <div class="info">
              <h4>Miễn phí vận chuyển</h4>
              <p>Trong bán kính 50 km</p>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-3 item">
            <div class="img"><img src="<?=$frontend_url?>images/policy_2_image.png" alt=""></div>
            <div class="info">
              <h4>Đổi trả miễn phí</h4>
              <p>Đổi trả sản phẩm trong 24h</p>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-3 item">
            <div class="img"><img src="<?=$frontend_url?>images/policy_3_image.png" alt=""></div>
            <div class="info">
              <h4>Thanh toán đa dạng</h4>
              <p>Tiền mặt, thẻ tín dụng ...</p>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-3 item">
            <div class="img"><img src="<?=$frontend_url?>images/policy_4_image.png" alt=""></div>
            <div class="info">
              <h4>Tư vấn 24/7</h4>
              <p>Hotline: <span class="red">1900 6750</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3 hmobi">
        <div class="sidebar">
            <h4 class="title"><i class="fa fa-bars" aria-hidden="true"></i>Danh mục sản phẩm</h4>
            <ul class="list-unstyled">
              <?php foreach ($sidebar as $sidebar) { ?>
                <li class="has-sub">
                  <a 
                  <?php if($sidebar['child']==array()) echo 'href="'.base_url().$sidebar['Product_Catalog_Link'].'"'?>>
                    <?=$sidebar['Product_Catalog_Name']?>
                    <?php if($sidebar['child']!=array()) { ?>
                      <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <?php } ?>
                  </a>
                  <?php if($sidebar['child']!=array()) { ?>
                  <ul class="list-unstyled sub">
                  <?php foreach ($sidebar['child'] as $child) { ?>
                    <li><a href="<?=base_url().$child['Product_Catalog_Link']?>"><?=$child['Product_Catalog_Name']?></a></li>
                  <?php } ?>
                  </ul>
                  <?php } ?>
                </li>
              <?php } ?>
              </ul>
          </div>



          <div class="hot-product sblock">
            <h4 class="part-title"><span>Sản phẩm bán chạy</span></h4>
            <div class="pslider">
            <?php foreach ($Hotproduct as $Hotproduct) { ?>
              <div class="item-small clearfix">
                <div class="img"><a href="<?=$this->m_product_catalog->GetLinkCatalog($Hotproduct['Product_Catalog_ID'])?>/<?=$Hotproduct['Product_Alias']?>.html"><img src="<?=$Hotproduct['Product_Image']?>" alt=""></a></div>
                <div class="info">
                  <h5><a href="<?=$this->m_product_catalog->GetLinkCatalog($Hotproduct['Product_Catalog_ID'])?>/<?=$Hotproduct['Product_Alias']?>.html"><?=$Hotproduct['Product_Name']?></a></h5>
                  <div class="price">
                    <span class="new-price"><?=number_format($Hotproduct['Product_Price'],0,',','.')?>₫</span>
                    <span class="old-price"><del><?php if ($Hotproduct['Product_Price_Before']!=0) {?><?=number_format($Hotproduct['Product_Price_Before'],0,',','.')?>₫ <?php } ?></del></span>
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
          <div class="support-online sblock">
            <h4 class="part-title"><span>Hỗ trợ trực tuyến</span></h4>
            <div class="main">
              <strong>Hỗ trợ bán hàng</strong>
              <p>Mrs. Quyên : <span class="red bold">(04) 6674 2332</span></p>
              <div class="fbplugins"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FcongtyDKT%2F&tabs=timeline&width=340&height=300px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=862911627219570" width="340" height="300px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
            </div>
          </div>
          <div class="home-news sblock">
            <h4 class="part-title"><span>Tin tức</span></h4>
            <div class="nslider">

<?php foreach ($Newnews as $Newnews) { ?>
              <div class="item">
                <div class="img"><a href="#!"><img src="images/n1.jpg" alt=""></a></div>
                <div class="info">
                  <h5><a href="#!"><?=$Newnews['News_Name']?></a></h5>
                  <div class="ad">
                    <span><i class="fa fa-user" aria-hidden="true"></i> Nguyễn Ngọc Dũng</span>
                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 20/11/2017</span>
                  </div>
                  <p class="des">Máy ảnh số loại phổ thông dành cho những người mới bắt đầu làm quen với máy ảnh số, thích đơn giản, gọn nhẹ...</p>
                  <a href="#!" class="plus">[Xem thêm...]</a>
                </div>
              </div>
<?php } ?>

            </div>
          </div>
        </div>
        <div class="col-lg-9 col-xs-12">
          <div class="slider">
            <?php foreach ($slider as $slider) { ?>
            <div class="item"> <img src="<?=$slider['Slider_Image']?>" alt=""></div>       
            <?php } ?>
          </div>
          <div class="sale-product sblock">
            <h4 class="part-title"><span>Sản phẩm khuyến mãi</span></h4>
            <div class="sale-slider">
              

            <?php foreach ($Khuyenmai as $Khuyenmai) { ?>
              <div class="item text-center">
                <div class="img"><a href="<?=$this->m_product_catalog->GetLinkCatalog($Khuyenmai['Product_Catalog_ID'])?>/<?=$Khuyenmai['Product_Alias']?>.html"><img src="<?=$Khuyenmai['Product_Image']?>" alt="<?=$Khuyenmai['Product_Name']?>"></a></div>
                <div class="info">
                  <p class="name"><a href="<?=$this->m_product_catalog->GetLinkCatalog($Khuyenmai['Product_Catalog_ID'])?>/<?=$Khuyenmai['Product_Alias']?>.html"><?=$Khuyenmai['Product_Name']?></a></p>
                  <p class="price">
                    <span class="bold red"><?=number_format($Khuyenmai['Product_Price'],0,',','.')?>₫</span>
                    <span><del><?=number_format($Khuyenmai['Product_Price_Before'],0,',','.')?>₫</del></span>
                  </p>
                </div>
                <div class="percent">KM</div>
              </div>
             <?php } ?>
            </div>
          </div>
          <div class="banner sblock">
            <div class="item"><a href="#!"><img src="images/b1.png" alt=""></a></div>
            <div class="item"><a href="#!"><img src="images/b2.png" alt=""></a></div>
          </div>
          <div class="new-product sblock">
            <h4 class="part-title"><span>Sản phẩm mới</span></h4>
            <div class="new-slider">


                   <?php foreach ($Newproduct as $Newproduct) { ?>

              <div class="item text-center">
                <div class="img"><a href="<?=$this->m_product_catalog->GetLinkCatalog($Newproduct['Product_Catalog_ID'])?>/<?=$Newproduct['Product_Alias']?>.html"><img src="<?=$Newproduct['Product_Image']?>" alt="<?=$Newproduct['Product_Name']?>"></a></div>
                <div class="info">
                  <p class="name"><a href="<?=$this->m_product_catalog->GetLinkCatalog($Newproduct['Product_Catalog_ID'])?>/<?=$Newproduct['Product_Alias']?>.html"><?=$Newproduct['Product_Name']?></a></p>
                  <p class="price">
                    <span class="bold red"><?=number_format($Newproduct['Product_Price'],0,',','.')?>₫</span>
                    <span><del><?php if ($Newproduct['Product_Price_Before']!=0) {?>
                      
                      <?=number_format($Newproduct['Product_Price_Before'],0,',','.')?>₫ <?php } ?></del></span>
                  </p>
                </div>
                <?php if ($Newproduct['Product_Price_Before']!=0) {?><div class="percent">KM</div> <?php } ?>

                
              </div>
          <?php } ?>


            </div>
          </div>
          <div class="big-banner sblock">
            <a href="#!"><img src="images/bigbanner.png" alt=""></a>
          </div>
          <div class="access sblock">
            <h4 class="part-title"><span>Phụ kiện bán kèm</span></h4>
            <div class="access-slider">

            
            <?php foreach ($Phukien as $Phukien) { ?>
              <div class="item clearfix">
                <div class="img"><a href="<?=$this->m_product_catalog->GetLinkCatalog($Phukien['Product_Catalog_ID'])?>/<?=$Phukien['Product_Alias']?>.html"><img src="<?=$Phukien['Product_Image']?>" alt="<?=$Phukien['Product_Name']?>"></a></div>
                <div class="info">
                  <p class="name"><a href="<?=$this->m_product_catalog->GetLinkCatalog($Phukien['Product_Catalog_ID'])?>/<?=$Phukien['Product_Alias']?>.html"><?=$Phukien['Product_Name']?></a></p>
                  <p class="price">
                    <span class="bold red"><?=number_format($Phukien['Product_Price'],0,',','.')?>₫</span>
                    <span><del><?php if ($Phukien['Product_Price_Before']!=0) {?>
                      
                      <?=number_format($Phukien['Product_Price_Before'],0,',','.')?>₫ <?php } ?></del></span>
                  </p>
                </div>
              </div>
            <?php } ?>
        


            </div>
          </div>
        </div>
        <div class="col-lg-3 smobi">
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <div class="hot-product sblock">
                <h4 class="part-title"><span>Sản phẩm bán chạy</span></h4>
                <div class="pslider">

             
                  
                  
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="support-online sblock">
                <h4 class="part-title"><span>Hỗ trợ trực tuyến</span></h4>
                <div class="main">
                  <strong>Hỗ trợ bán hàng</strong>
                  <p>Mrs. Quyên : <span class="red bold">(04) 6674 2332</span></p>
                  <div class="fbplugins"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FcongtyDKT%2F&tabs=timeline&width=340&height=300px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId=862911627219570" width="340" height="300px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
                </div>
              </div>
            </div>
          </div>
          <div class="home-news sblock">
            <h4 class="part-title"><span>Tin tức</span></h4>
            <div class="nslider">
                  

          

            
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <?=$this->load->view('frontend/_footer')?>

</body>
</html>