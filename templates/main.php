<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="generator" content="php-proxy.com">
  <meta name="version" content="<?= $version; ?>">
  <title>Mobile Web App</title>
  <link rel="stylesheet" href="css/framework7.css">
  <link rel="stylesheet" href="style.css">
  <link type="text/css" rel="stylesheet" href="css/swipebox.css" />
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>
</head>

<body id="mobile_wrap">

  <div class="statusbar-overlay"></div>

  <div class="panel-overlay"></div>

  <div class="panel panel-left panel-cover">
    <nav class="list-nav">
      <ul>
        <li class="home-icon"><a href="index.html" class="close-panel">Home</a></li>
        <li class="about-icon"><a href="index.php" class="close-panel">Proxy Server</a></li>
        <li class="features-icon"><a href="location.html" class="close-panel">IP Location</a></li>

      </ul>
    </nav>
  </div>

  <div class="views">

    <div class="view view-main">

      <div class="navbar">
        <div class="navbar-inner">
          <div class="left sliding">
            <div class="logo_title">P.Server</div>
          </div>
          <div class="right menu_open_icon"><a href="#" data-panel="left" class="link icon-only open-panel"></a></div>
        </div>
      </div>

      <div class="pages navbar-through toolbar-through">

        <div data-page="index" class="page homepage">
          <div class="page-content">

            <!-- Slider -->
            <div class="swiper-container swiper-init" data-effect="coverflow" data-pagination=".swiper-pagination" data-paginationClickable="true" data-autoplay="false">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <span>Surf-Anonymous</span>


                  <span class="subtitle">Enter Your URL</span> <br>

                  <?php if (isset($error_msg)) { ?>

                    <div id="error">
                      <p><?php echo strip_tags($error_msg); ?></p>
                    </div>

                  <?php } ?>


                  <div class="ads_from">

                    <form action="index.php" method="post">
                      <input type="text" autocomplete="off" placeholder="https://" name="url">

                      <input type="submit" value="Go" name="submit1">

                    </form>
                    <script type="text/javascript">
                      document.getElementsByName("url")[0].focus();
                    </script>

                  </div>

                  <!-- ads_end -->

                  <!-- other button start -->
                  <br>

                  <div class="links">
                    <a href="#" class="btn1">Encrypt URL</a>
                    <a href="#" class="btn2">Encrypt Page</a>
                    <a href="#" class="btn3">Allow Cookies</a>
                    <a href="#" class="btn4">Remove Scripts</a>
                    <a href="#" class="btn5">Remove Objects</a>

                  </div>

                  <!-- Bottom Toolbar-->
                  <div class="buttom_text">

                    <h3>Proxy Directories</h3>
                    <br>


                    <ul class="proxy_links">
                      <li><a href="https://www.youtube.com" target="_blank"><img src="images/icons/1.png" height="30px" width="40px" />
                          Youtube.com</a></li>

                      <li><a href="https://www.xhamster.com" target="_blank"><img src="images/icons/2.png" height="40px" width="40px" />

                          Xhamster.com</a></li>
                      <li><a href="https://www.xnxx.com" target="_blank"><img src="images/icons/3.png" height="40px" width="40px" />

                          Xnxx.com</a></li>
                      <li><a href="https://www.xvedios.com" target="_blank"><img src="images/icons/4.png" height="35px" width="40px" />

                          Xvedios.com</a></li>
                      <li><a href="https://www.redtube.com" target="_blank"><img src="images/icons/5.png" height="35px" width="40px" />

                          Redtube.com</a></li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script> -->
  <script src="js/jquery.validate.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/framework7.js"></script>
  <script type="text/javascript" src="js/my-app.js"></script>
  <script type="text/javascript" src="js/jquery.swipebox.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/email.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
</body>

</html>