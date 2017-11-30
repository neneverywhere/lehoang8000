
<?php 
  $frontend_url = $this->config->item('frontend_url');
  $favicon = $this->m_header->Favicon();
  $codeheader = $this->m_header->CodeHeader();
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="content-language" content="vi" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?=$Title?></title>
  <meta name='description' content="<?=$Description?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="<?=$Keyword?>" />
  <meta name="robots" content="noodp,index,follow" />
  <meta name='revisit-after' content='1 days' />
  <link href="<?=$favicon?>" rel="shortcut icon" type="image/x-icon" />

    <!-- Bootstrap & Font Awesome-->
  <link href="<?=$frontend_url?>css/bootstrap.css" rel="stylesheet">
  <link href="<?=$frontend_url?>css/font-awesome.min.css" rel="stylesheet">


  <!-- plugins -->
  <link href="<?=$frontend_url?>plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?=$frontend_url?>plugins/fancybox/dist/jquery.fancybox.min.css" rel="stylesheet">
  <link href="<?=$frontend_url?>plugins/mobi-menu/jquery.mmenu.all.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=$frontend_url?>css/style.css" rel="stylesheet">

  <!-- file js -->
  <script src="<?=$frontend_url?>js/jquery-2.1.4.js"></script>

</head>
<?=$codeheader?>
