
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Contact | Sandeep</title>
    <meta name="author" content="Sandeep" />
    <meta name="keywords" content="Sandeep Kumar, Sandeep, Aditya Kumar, Aditya, Aditya76, adi.kmr76, Sandy" />
    <meta name="description" content="Sandeep Kumar" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link type="text/css" media="all" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/css/animate.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/colour-scheme/color-blue.css" rel="stylesheet" type="text/css" data-color="color-blue" media="all" id="stylesheet-new">
    <link type="text/css" media="all" href="assets/css/respons.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon"sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="data.js" type="text/javascript"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>

    <script>
          function initMap() {
            var kiet = {lat: 28.752, lng: 77.499};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 9,
              center: kiet
            });
            var marker = new google.maps.Marker({
              position: kiet,
              map: map
            });
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJRxes3PEK_GdH5XLSvFHfZqXHuwBeTYc&callback=initMap">
    </script>
</head>
<body style="background-color:#262626;">
<div ng-app="myApp" ng-controller="myCtrl">
<div class="animationload">
    <div class="loader"></div>
</div>
<div id="wraper">
    <header class="head">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-11 col-lg-11">
                    <img class="logo-page" src="assets/img/contact_l.png" alt="aditya76">
                    <h2 class="title">Contact</h2>
                    <h4 class="sub-title">Get in touch with me</h4>
                </div>
                <div class="col-xs-4 col-sm-1 col-lg-1 text-right">
                    <a href="index" class="btn-close hover-animate"></a>
                </div>
            </div>
        </div>
    </header>
    <section class="content padding-block border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <h3 class="title title-contact">Contact info</h3>
                    <div class="block-grey">
                        <table>
                            <tr>
                                <td class="font-weight-m width-td">Address</td>
                                <td>{{addr}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-m">Phone</td>
                                <td><a href="tel:3801234567890">{{mobile}}</a></td>
                            </tr>
                            <tr>
                                <td class="font-weight-m">E-mail</td>
                                <td><a href="mailto:sandeep.1310128@kiet.edu">{{email}}</a></td>
                            </tr>
                            <tr>
                                <td class="font-weight-m">Skype</td>
                                <td>adikmr76</td>
                            </tr>
                            <tr>
                                <td class="font-weight-m">Website</td>
                                <td><a href="www.themeforest.com.html">{{bwebsite}}</a></td>
                            </tr>
                        </table>
                        <div class="social">
                            <ul class="animated" data-animation="fadeIn" data-animation-delay="600">
                              <li><a class="ukie-icons hover-animate" href="https://www.facebook.com/adi.kmr76"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="ukie-icons hover-animate" href="https://twitter.com/6677aditya"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="ukie-icons hover-animate" href="https://www.linkedin.com/in/sandeep-kumar-008480a4"><i class="fa fa-linkedin"></i></a></li>
                              <li><a class="ukie-icons hover-animate" href="https://plus.google.com/u/0/106877933719517598203"><i class="fa fa-google-plus"></i></a></li>
                              <li><a class="ukie-icons hover-animate" href="http://www.itechaditya.com"><i class="fa fa-dribbble"></i></a></li>
                              <li><a class="ukie-icons hover-animate" href="https://www.youtube.com/channel/UCYxZ10-QNwL4vSWPrRnbGBw"><i class="fa fa-youtube"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <h3 class="title title-contact">Contact form</h3>
                    <div class="contact-form">
                        <form action="" id="contact-form" method="post">
                            <input type="text" id="user-name" name="user-name" value="" placeholder="Name" />
                            <input type="email" id="user-email" name="user-email" value="" placeholder="Email" />
                            <input type="hidden" id="user-status" name="user-status" value="1"  />
                            <textarea id="user-message" name="user-message" placeholder="Message"></textarea>
                            <div class="footer-form">
                                <input type="submit" id="submit-btn" class="btn btn-color hover-animate"  value="Send Message" />
                                <div class="info-message-form">
                                    <p>Please fill out all the fields!</p>
                                    <span class="close-msg"><i class="fa fa-close"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-map padding-block text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <div id="map" class="map"></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="contact.html#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-phone"></i></span> {{mobile}}
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="contact.html#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-paper-plane"></i></span> {{email}}
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="contact.html#" class="hover-animate">
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
<a href="contact.html#" class="btn scrollToTop"><i class="fa fa-angle-up"></i></a>
<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="assets/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
<script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.inview.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.knob.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<script src="assets/js/contact_scripts.js" type="text/javascript"></script>

</body>
</html>
