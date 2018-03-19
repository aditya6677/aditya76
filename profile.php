<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Profile | Sandeep</title>
    <meta name="author" content="Sandeep" />
    <meta name="keywords" content="Sandeep Kumar, Sandeep, Aditya Kumar, Aditya, Aditya76, adi.kmr76, Sandy" />
    <meta name="description" content="Sandeep Kumar" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link type="text/css" media="all" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <script src="data.js" type="text/javascript"></script>
    <link type="text/css" media="all" href="assets/css/animate.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/colour-scheme/color-blue.css" rel="stylesheet" type="text/css" data-color="color-blue" media="all" id="stylesheet-new">
    <link type="text/css" media="all" href="assets/css/respons.css" rel="stylesheet" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="data.js" type="text/javascript"></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
</head>
<body ng-app="myApp" ng-controller="myCtrl" style="background-color:#262626;">
<div class="animationload">
    <div class="loader"></div>
</div>
<div class="scr">
<div id="wraper">
    <header class="head">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-11 col-lg-11">
                    <img class="logo-page" src="assets/img/profile_l.png" alt="Profile">
                    <h2 class="title">Profile</h2>
                    <h4 class="sub-title">A Brief About Me</h4>
                </div>
                <div class="col-xs-4 col-sm-1 col-lg-1 text-right">
                    <a href="index" class="btn-close hover-animate"></a>
                </div>
            </div>
        </div>
    </header>
    <section class="content border-bottom padding-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-7">
                    <h3 class="title">Hello,</h3>
                    <p>{{info}}</p>
                    <p>{{ninfo}}</p>
                    <p>
                        <a href="http://aditya76.info/data/resume.pdf" class="btn btn-color hover-animate">Download CV</a>
                        <a href="online" class="btn btn-color hover-animate">Online Profiles</a>
                    </p>

                </div>
                <div class="col-xs-12 col-sm-12 col-lg-5">
                    <div class="block-grey">
                        <table>
                            <tr>
                                <td class="font-weight-m">Name</td>
                                <td class="text-right">{{name}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-m">Date of birth</td>
                                <td class="text-right">{{dob}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-m">E-mail</td>
                                <td class="text-right"><a href="mailto:sandeep.1310128@kiet.edu">{{email}}</a></td>
                            </tr>
                            <tr>
                                <td class="font-weight-m">Address</td>
                                <td class="text-right">{{addr}}, Ghaziabad</td
                            </tr>
                            <tr>
                                <td class="font-weight-m">Phone</td>
                                <td class="text-right"><a href="tel:01234567890">{{mobile}}</a></td>
                            </tr>
                            <tr>
                                <td class="font-weight-m">Website</td>
                                <td class="text-right"><a href="www.itechaditya.com">{{bwebsite}}</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="info border-bottom padding-block text-center">

        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <h3 class="title">What i’m doing</h3>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                  <center>
                    <div class="circle-block ">
                        <a href="portfolio"><span class="icon hover-animate"><i class="fa fa-desktop"></i></span></a>
                        <span class="name hover-animate"><a href="portfolio">Web Development</a></span>
                    </div>
                  </center>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <center>
                    <div class="circle-block">
                        <a href="online"><span class="icon hover-animate"><i class="fa fa-code"></i></span></a>
                        <span class="name hover-animate"><a href="online">Competitive Programming</a></span>
                    </div>
                  </center>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <center>
                    <div class="circle-block">
                        <a href="portfolio"><span class="icon hover-animate"><i class="fa fa-android"></i></span></a>
                        <span class="name hover-animate"><a href="portfolio">Application</a></span>
                    </div>
                  </center>
                  </div>
                </div>
            </div>

        </div>

    </section>
  </div>
</div>
<a href="profile#" class="btn scrollToTop"><i class="fa fa-angle-up"></i></a>
<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="assets/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.countTo.js" type="text/javascript"></script>
<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
<script src="assets/js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.inview.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.knob.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
</html>
