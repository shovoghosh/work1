<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
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
        <li class="about-icon"><a href="proxy.html" class="close-panel">Proxy Server</a></li>
        <li class="features-icon"><a href="location.html" class="close-panel">IP Location</a></li>

      </ul>
    </nav>
  </div>

  <div class="views">

    <div class="view view-main">

      <div class="navbar">
        <div class="navbar-inner">
          <div class="left sliding">
            <div class="logo_title">App Title</div>
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

                  <br><br><br><br><br><br><br>
                  <div class="homedes">


                    <div class="iptop">

                      <div class="ipicon">
                        <img src="images/icons/wt/5.PNG" height="50" width="50" alt="Latitude.png" />
                      </div>


                      <div class="iploc">

                        <h3>WELCOME</h3>
                        <br>

                        <p style="text-align: center; padding: 15px; font-size: 20px;">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          Iure sit tenetur nemo esse architecto, voluptas quisquam.
                          Fugiat sint temporibus consectetur in placeat. Explicabo accusamus
                          asperiores tempore et distinctio fuga pariatur.
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          Iure sit tenetur nemo esse architecto, voluptas quisquam.
                          Fugiat sint temporibus consectetur in placeat. Explicabo accusamus
                          asperiores tempore et distinctio fuga pariatur.
                        </p>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
  <script src="js/jquery.validate.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/framework7.js"></script>
  <script type="text/javascript" src="js/my-app.js"></script>
  <script type="text/javascript" src="js/jquery.swipebox.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/email.js"></script>
</body>

</html>