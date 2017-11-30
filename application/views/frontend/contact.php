<!DOCTYPE html>
<html lang="en">
<?=$this->load->view('frontend/_head')?>
<body>

<div class="page">
  <div class="header-mobi">
    <a href="#menu-mobi"><i class="fa fa-bars fa-2x"></i></a>
  </div>

  <?=$this->load->view('frontend/_header')?>

  <main>
    <div class="contact">
      <div class="container">
        <h1 class="text-center">Liên hệ</h1>
        <p class="text-center">Điền thông tin và yêu cầu của quý khách vào form sau, chúng tôi sẽ liên hệ lại trong thời gian sớm nhất. Xin cảm ơn!</p>
        <p class="text-center"><i>(Những dòng có dấu * là bắt buộc)</i></p>
        <form id="sendmail" class="form-horizontal" action="<?=base_url()?>frontend/c_contact/SendMail" method="post">
          <div class="form-group">
            <label class="col-sm-2 control-label">Tên *</label>
            <div class="col-sm-10">
            <input name="name" type="text" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">ĐT *</label>
            <div class="col-sm-10">
            <input name="phone" type="text" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email *</label>
            <div class="col-sm-10">
            <input name="email" type="text" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tiêu đề *</label>
            <div class="col-sm-10">
            <input name="subject" type="text" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Lời nhắn</label>
            <div class="col-sm-10">
              <textarea name="content" class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12 text-center">
              <button type="submit" name="submit" class="btn"><i class="fa fa-paper-plane" aria-hidden="true"></i>Gửi mail</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.110293425824!2d106.70638931422657!3d10.802863992303624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528bba85b21c9%3A0xe6ec0a4280461488!2zMTQ1IELhuqFjaCDEkOG6sW5nLCBQaMaw4budbmcgMTUsIELDrG5oIFRo4bqhbmgsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1483522926598" width="1400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </main>


  <!-- Spinner -->
  <div id="loader" class="loader text-center">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
    <p>Đang thực hiện gửi mail liên hệ, xin đợi trong vài giây!!!</p>
  </div>


  <?=$this->load->view('frontend/_footer')?>


  <nav id="menu-mobi">
    <ul><!-- Đoạn này đã dùng jquery đổ menu ở trên vào, nên để nguyên thế này, ko xóa thẻ ul -->
    </ul>
  </nav>
</div>



<script type="text/javascript">
  $(document).ready(function() {
    $( "#sendmail" ).submit(function() {
        $('#loader').css('display','block');
    });    
  });
</script>


</body>
</html>