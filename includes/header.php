<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home | Jharana Sangeet</title>
  <script src="js/jquery.js"></script>

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

    <link href="css/font.css" rel="stylesheet">
  <script>
    $(document).ready(function(){
      $(".navbar-nav li").click(function(){
          $("ul li").removeClass("active");
          debugger
          $(this).addClass("active");
      });
    });
  </script>
  </head><!--/head-->

  <body class="homepage ">

    <header id="header fixed-menu">
      <nav class="navbar navbar-inverse" role="banner">

        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.php"><img src="images/jslogo.png" alt="logo" class="imglogo"></a>
          </div>
        </div><!--/.container-->

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="video.php">Videos </i></a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Sign In</a></li>

          </ul>
        </div>

      </nav><!--/nav-->
    </header><!--/header-->

  </body>
</html>