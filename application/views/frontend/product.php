<!DOCTYPE html>
<html lang="vi">
<?=$this->load->view('frontend/_head')?>
<body>

<div class="page">
   <div class="header">
      <a href="#menu-mobi"><i class="fa fa-bars fa-2x"></i></a>
   </div>

<?=$this->load->view('frontend/_header')?>


    <main>
      <div class="breadcrumb">
        <div class="container">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
              <?php foreach ($webcrumb as $webcrumb) { ?>
                  <li class="breadcrumb-item"><a <?php if($webcrumb['link']!='') { ?> href="<?=$webcrumb['link']?>" <?php } ?>><?=$webcrumb['name']?></a></li>
                <?php } ?>
  
            </ol>
          </nav>
        </div>
      </div>

      <div class="product">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4 thumb">
              <div class="limg">
                <a href="<?=$DetailProduct['Product_Image']?>" data-fancybox>
                  <img src="<?=$DetailProduct['Product_Image']?>" alt="<?=$DetailProduct['Product_Name']?>" />
                </a>
              </div>
              <div class="simg">
                <ul class="list-unstyled list-inline">

                   <?php 
                    $gallery = $DetailProduct['Product_Gallery'];
                    $gallery = explode(',', $gallery);
                    foreach ($gallery as $gallery) {
                  ?>
              

                  <li class="list-inline-item"><img src="<?=$gallery?>" alt=""></li>
                    <?php } ?>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-5 info">
              <h1 class="name"><?=$DetailProduct['Product_Name']?></h1>
              <div class="price">
                <span class="bold red"><?=number_format($DetailProduct['Product_Price'],0,',','.')?>₫</span>
                <span class="gtext"><del><?=number_format($DetailProduct['Product_Price_Before'],0,',','.')?>₫</del></span>
              </div>
              <hr>
              <div class="des">
                <label class="bold">Mô tả:</label>
                <p><?=$DetailProduct['Product_Des']?></p>
              </div>
              <hr>
              <div class="book">
                <div class="form-group row">
                  <label for="qa" class="col-sm-3 col-form-label">Số lượng:</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control text-center" id="qa" value="1">
                  </div>
                </div>

                <a href="<?=base_url()?>gio-hang/themsp/<?=$DetailProduct['Product_ID']?>/<?=$DetailProduct['Product_Price']?>" class="plus btn-block btn-success"><i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
              </div>
            </div>
            <div class="col-xs-12 hidden-sm-down col-lg-3">
              <div class="method">
                <div class="item text-center">
                  <div class="icon"><img src="/public/raw/images/icon1.png" alt=""></div>
                  <p>Miễn phí vận chuyển với đơn hàng lớn hơn 1.000.000 đ</p>
                </div>
                <div class="item text-center">
                  <div class="icon"><img src="/public/raw/images/icon2.png" alt=""></div>
                  <p>Giao hàng ngay sau khi đặt hàng (áp dụng với Hà Nội & HCM)</p>
                </div>
                <div class="item text-center">
                  <div class="icon"><img src="/public/raw/images/icon3.png" alt=""></div>
                  <p>Đổi trả trong 3 ngày, thủ tục đơn giản</p>
                </div>
                <div class="item text-center">
                  <div class="icon"><img src="/public/raw/images/icon4.png" alt=""></div>
                  <p>Nhà cung cấp xuất hóa đơn cho sản phẩm này</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="product-info">
        <div class="container">
          <div class="main">
            
            <!-- Tabs NAV -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#tab1" role="tab" aria-controls="pills-home" aria-selected="true">Chi tiết sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#tab2" role="tab" aria-controls="pills-profile" aria-selected="false">Đánh giá sản phẩm</a>
              </li>
            </ul>
            <hr>
            
            <!-- Tabs content -->
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="pills-home-tab">
                <p><?=$DetailProduct['Product_Content']?></p>
              </div>
              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="pills-profile-tab">
                <p><?=$DetailProduct['Product_Des']?></p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="similar-product">
        <div class="container">
          <h4 class="part-title"><span>Sản phẩm khuyến mãi</span></h4>
          <div class="similar-slider">


            <?php foreach ($similar as $similar) { ?>
                <?php if($similar['Product_ID']!=$DetailProduct['Product_ID']) { ?>
                 
              


            <div class="item text-center">
              <div class="img"><a href="<?=$similar['Product_Link']?>"><img src="<?=$similar['Product_Image']?>" alt=""></a></div>
              <div class="info">
                <p class="name"><a href="<?=$similar['Product_Link']?>"><?=$similar['Product_Name']?></a></p>
                <p class="price">
                  <span class="bold red"><?=number_format($similar['Product_Price'],0,',','.')?>₫</span>
                  <span><del>34.000.000₫</del></span>
                </p>
              </div>
              <div class="percent">-53%</div>
            </div>
             <?php } ?>
<?php } ?>


          </div>
        </div>
      </div>

    </main>

 <?=$this->load->view('frontend/_footer')?>


</body>
</html>
