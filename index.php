<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Sandeep Kumar</title>
    <meta name="author" content="Sandeep" />
    <meta name="keywords" content="Sandeep Kumar, Sandeep, Aditya Kumar, Aditya, Aditya76, adi.kmr76, Sandy" />
    <meta name="description" content="Sandeep Kumar" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link type="text/css" media="all" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/css/animate.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/css/style.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/css/switcher.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="data.js" type="text/javascript"></script>
    <link href="assets/css/colour-scheme/color-blue.css" rel="stylesheet" type="text/css" data-color="color-blue" media="all" id="stylesheet-new">
    <link type="text/css" media="all" href="assets/css/respons.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>

</head>
<body style="background-color:#262626;">
  <div ng-app="myApp" ng-controller="myCtrl">
    <div class="animationload">
        <div class="loader"></div>
    </div>
    <div id="wraper">
        <section class="home-header border-bottom padding-block">

            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-lg-5 text-center border-right">
                        <div class="foto">
                            <img src="assets/img/photo.png" alt="aditya76">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 text-center">

                        <h1 class="title">{{name}}</h1>

                        <h3 class="sub-title">{{exp}}</h3>
                        <div class="social">
                            <ul class="animated" data-animation="fadeIn" data-animation-delay="600">
                                <li><a class="ukie-icons hover-animate" href="https://www.facebook.com/adi.kmr76"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="https://twitter.com/6677aditya"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="https://www.linkedin.com/in/aditya76"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="https://plus.google.com/u/0/106877933719517598203"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="http://www.itechaditya.com"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="ukie-icons hover-animate" href="https://www.youtube.com/channel/UCYxZ10-QNwL4vSWPrRnbGBw"><i class="fa fa-youtube"></i></a></li>

                            </ul>
                        </div>
                      </div>
              </div>
            </div>
        </section>
        <nav class="menu">

            <div style="padding:0cm 0cm 1cm 0cm;" class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-12">
                        <a href="profile" class="menu-li">

                            <span class="foto">

                                <img src="assets/img/menu/profile.png" class="menu-img" data-img-name="profile" alt="aditya76" />

                            </span>
                            <span class="name">Profile</span>
                        </a>
                        <a href="resume" class="menu-li">
                            <span class="foto">
                                <img src="assets/img/menu/resume.png" class="menu-img" data-img-name="resume" alt="aditya76">
                            </span>
                            <span class="name">Resume</span>
                        </a>
                        <a href="portfolio" class="menu-li">
                            <span class="foto">
                                <img src="assets/img/menu/portfolio.png" class="menu-img" data-img-name="portfolio" alt="aditya76">
                            </span>
                            <span class="name">Projects</span>
                        </a>
                        <a href="http://www.itechaditya.com" target="_blank" class="menu-li">
                            <span class="foto">
                                <img src="assets/img/menu/blog.png" class="menu-img" data-img-name="blog" alt="aditya76">
                            </span>
                            <span class="name">Blog</span>
                        </a>
                        <a href="contact" class="menu-li">
                          <span class="foto">
                                <img src="assets/img/menu/contact.png" class="menu-img" data-img-name="contact" alt="aditya76">
                            </span>
                            <span class="name">Contact</span>
                        </a>
                   </div>
                </div>
              </div>


        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <a href="#" class="hover-animate">
                            <span class="ukie-icons hover-animate"><i class="fa fa-phone"></i></span> {{mobile}}
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <a href="mailto:sandeep.1310128@kiet.edu" class="hover-animate">
                            <span class="ukie-icons hover-animate"><i class="fa fa-paper-plane"></i></span> {{email}}
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3">
                        <a href="#" class="hover-animate">
                            <span class="ukie-icons hover-animate"><i class="fa fa-map-marker"></i></span> {{addr}}
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-3 text-right">
                        <span class="copyright">{{copy}}</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
  </div>
    <a href="http://aditya76.info" class="btn scrollToTop"><i class="fa fa-angle-up"></i></a>
<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="assets/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
<script src="assets/js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.inview.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.knob.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
</body>
</html>
