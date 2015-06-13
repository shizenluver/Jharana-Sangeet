<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home | Jharana Sangeet</title>

  <!-- core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/preloader.css">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/socialshare.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <link rel="shortcut icon" href="images/favicon.gif">
  <link href="css/font.css" rel="stylesheet">


</head><!--/head-->

<body class="homepage">
  <?php include_once 'includes\header.php' ?>

<!--main body -->
  <div class="main-body-aboutus page-bg">
    <div class="container">
      <div class="row main-body-margin-top">
        <div class="indexbg col-md-7">
          <img src="images/videobg.png" class="video-bg img-responsive">
        <div class="embed-responsive video-container embed-responsive-16by9">
           <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xQr_c4UfCNk?autoplay=1" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-5 discover-text">
          <h3 id="Overcome" class="discover-text1">DISCOVER</h3>
          <h2 id="Trench" class="discover-text2">All<br>our songs and videos<br>in one place</h2>
        </div>
      </div>
    </div>
  </div>

  <!--main body ends-->
  <!--footer-->

  <?php include_once 'includes\footer.php' ?>
<!--footer ends-->
<script>
    function disableContextMenu(){
      // window.frames["main-iframe"].document.oncontextmenu = function(){ return false;};
      // Or use this
      document.getElementById("main-iframe").contentWindow.document.oncontextmenu = function(){ return false;
       return top.frames;}
    }
</script>
<!-- ScrollUp button start --><link rel="stylesheet" type="text/css" href="css/pluton.css" />
    <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/jquery.inview.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script><!--scroll-->
<script src="js/jquery.jribbble-1.0.1.ugly.js"></script><!--scroll-->
<script src="js/scroll.js"></script><!--scroll-->
</body>
</html>