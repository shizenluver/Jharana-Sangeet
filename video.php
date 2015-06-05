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
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/socialshare.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <style>
      @font-face {
        font-family: myFirstFont;
        src: url(fonts/Overcome.ttf);
        font-weight: bold;
      }
      @font-face {
        font-family: myFirstFont2;
        src: url(fonts/twentysingles.ttf);
        font-weight: bold;
      }
       @font-face {
        font-family: myFirstFont3;
        src: url(fonts/lithos-regular.ttf);
        font-weight: bold;
      }
    #div1 {
       font-family: myFirstfont;
     }
     #div2 {
       font-family: myFirstfont2;
     }
     #div3 {
       font-family: myFirstfont3;
     }
   </style>

</head><!--/head-->

<body class="videopage">
  <?php include_once 'includes\header.php' ?>

<!--main body -->
<div class="search-area">
    <div class="search-text">
      <h3 id="div2">WATCH YOUR FAVOURITE VIDEOS</h3>
    </div>
    <div class="search-box">
       <form method="get" action="/search" id="search">
          <input name="q" type="text" size="40" placeholder="Enter a name or aartist.." />
      </form>
    </div>
</div>

<div class="container">
    <div class="row">
      <h2 class="videopage-head" id="div3">featured <img src="images/featured.png" class="img-responsive"></h2>
    </div>
    <div class="row">
      <div class="col-md-7 videopage-content-bg">
        <div class="video-container-videopage">
               <iframe id="main-iframe" width="420" height="315" src="https://www.youtube.com/embed/FFZEV3SHSaY" frameborder="0" onload="disableContextMenu()" allowfullscreen>
                 <iframe id="main-iframe" src="//www.youtube.com/embed/t6q80hYy7sk" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
      </div>
      <div class="col-md-4 videopage-content-bg margin10pxrt">
        <h3>TOP CHARTS</h3>
     </div>
    </div>
</div>

<div class="container">
    <div class="row">
      <h2 class="videopage-head" id="div3">popular videos<img src="images/video.png" class="img-responsive"></h2>
    </div>
    <div class="row">
       <?php include_once 'includes\video_detailed.php' ?>
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
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- // <script src="js/main.js"></script> -->
</body>
</html>