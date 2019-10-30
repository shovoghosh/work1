<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>Mobile Web App</title>
    <link rel="stylesheet" href="css/framework7.css" />
    <link rel="stylesheet" href="style.css" />
    <link type="text/css" rel="stylesheet" href="css/swipebox.css" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900" rel="stylesheet"
        type="text/css" />
</head>

<body id="mobile_wrap">
    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-cover">
        <nav class="list-nav">
            <ul>
                <li class="home-icon">
                    <a href="index.html" class="close-panel">Home</a>
                </li>
                <li class="about-icon">
                    <a href="proxy.html" class="close-panel">Proxy Server</a>
                </li>
                <li class="features-icon">
                    <a href="location.html" class="close-panel">IP Location</a>
                </li>

                <!-- <li class="photos-icon"><a href="photos.html" class="close-panel">Gallery</a></li>
        <li class="video-icon"><a href="videos.html" class="close-panel">Videos</a></li>
        <li class="blog-icon"><a href="blog.html" class="close-panel">Blog</a></li>
        <li class="contact-icon"><a href="contact.html" class="close-panel">Contact</a></li> -->
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
                    <div class="right menu_open_icon">
                        <a href="#" data-panel="left" class="link icon-only open-panel"></a>
                    </div>
                </div>
            </div>

            <div class="pages navbar-through toolbar-through">
                <div data-page="index" class="page homepage">
                    <div class="page-content">
                        <!-- Slider -->
                        <div class="swiper-container swiper-init" data-effect="coverflow"
                            data-pagination=".swiper-pagination" data-paginationClickable="true" data-autoplay="false">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">



                                    <div class="iptop">

                                        <div class="ipicon">
                                            <img src="images/icons/wt/5.PNG" height="50" width="50"
                                                alt="Latitude.png" />
                                        </div>


                                        <div class="iploc">
                                            <h3>IP Location</h3>
                                            <p>64.190.114.23</p>
                                        </div>


                                    </div>




                                    <!-- <a href="about.html" class="swiper_read_more">swipe to see more</a> -->

                                    <div class="flag_info">
                                        <img src="images/icons/flag.png" height="70" width="80" alt="Flag.png" />

                                        <h3>United States</h3>
                                    </div>



                                    <div class="main_map">
                                        <img src="images/icons/loc/4.png" height="180" width="300" alt="Map.png" />
                                    </div>

                                    <div class="map_info">
                                        <ul>
                                            <li>
                                                <img src="images/icons/loc/lat.png" height="50" width="50"
                                                    alt="Latitude.png" />
                                                <h4>123</h4>
                                                <p>Latitude</p>
                                            </li>

                                            <li>
                                                <img src="images/icons/loc/lon.png" height="50" width="50"
                                                    alt="Latitude.png" />
                                                <h4>123</h4>
                                                <p>Longitude</p>
                                            </li>

                                            <li>
                                                <img src="images/icons/loc/tzon.png" height="50" width="50"
                                                    alt="Latitude.png" />
                                                <h4>123</h4>
                                                <p>Time zone </p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="buttom_part">
                                        <div class="loc_ico">
                                            <img src="images/icons/loc.png" height="50" width="50" alt="Location.png" />
                                        </div>

                                        <div class="loc_txt">
                                            <h3>Location</h3>
                                        </div>
                                    </div>

                                    <div class="loc_btm">
                                        <div class="loc_info">
                                            <ul>
                                                <li>ISP</li>
                                                <li>Continent</li>
                                                <li>Country Code</li>
                                                <li>Country</li>
                                                <li>Region</li>
                                            </ul>
                                        </div>

                                        <div class="loc_data">
                                            <ul>
                                                <li>ISP</li>
                                                <li>Continent</li>
                                                <li>Country Code</li>
                                                <li>Country</li>
                                                <li>Region</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="toolbar">
        <div class="toolbar-inner">



          <ul class="toolbar_icons icons_3row">

            <li><a href="#" data-popup=".popup-login" class="open-popup"><img src="images/icons/home.png" height="40px"
                  width="40px" alt="" title="" /></a></li>

            <li><a href="proxy.html"><img src="images/icons/proxy.png" height="40px" width="40px" alt="" title="" /></a>
            </li>

            <li><a href="location.html"><img src="images/icons/ip.png" height="40px" width="40px" alt="" title="" /></a>
            </li>


            
          </ul>


        </div>
      </div> -->
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