<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Resume | Sandeep</title>
    <meta name="author" content="Sandeep" />
    <meta name="keywords" content="Sandeep Kumar, Sandeep, Aditya Kumar, Aditya, Aditya76, adi.kmr76, Sandy" />
    <meta name="description" content="Sandeep Kumar" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link type="text/css" media="all" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
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
<body ng-app="myApp" ng-controller="myCtrl"  style="background-color:#262626;">
<div class="animationload">
    <div class="loader"></div>
</div>
<div id="wraper">
    <header class="head">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-11 col-lg-11">
                    <img class="logo-page" src="assets/img/resume_l.png" alt="aditya76">
                    <h2 class="title">Resume</h2>
                    <h4 class="sub-title">My Academic Qualifications</h4>
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
                    <h3 class="title title-resume">Education</h3>
                    <div class="block-grey">
                        <div id="education-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <table>
                                    <tr>
                                        <td class="font-weight-m width-td">Name</td>
                                        <td>{{college}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Address</td>
                                        <td>Ghaziabad</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Period</td>
                                        <td>2013-2018</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Degree</td>
                                        <td>B.Tech (CSE)</td>
                                    </tr>

                                </table>

                            </div>
                            <div class="item">
                                <table>
                                    <tr>
                                        <td class="font-weight-m width-td">Name</td>
                                        <td>{{school}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Address</td>
                                        <td>Siddharth Nagar</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Period</td>
                                        <td>2006-2012</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Level</td>
                                        <td>6-12th</td>
                                    </tr>

                                </table>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <h3 class="title title-resume">Certifications</h3>
                    <div class="block-grey">
                        <div id="work-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <table>
                                    <tr>
                                        <td class="font-weight-m width-td1">Name</td>
                                        <td>Java (Basic + Advanced)</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Address</td>
                                        <td>Ducat, Ghaziabad</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Period</td>
                                        <td>2015-2016</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Level</td>
                                        <td>A+</td>
                                    </tr>
                                </table>

                            </div>
                            <div class="item">
                                <table>
                                    <tr>
                                        <td class="font-weight-m width-td1">Name</td>
                                        <td>Ethical Hacking</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Address</td>
                                        <td>Cybercure, Ghaziabad</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Period</td>
                                        <td>2014-2015</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-m">Level</td>
                                        <td>A</td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skills border-bottom padding-block">
        <div class="container">
            <h3 style="padding-left:40%;" class="title title-skills">Professional skills</h3>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-6">


                    <label class="progress-bar-label">Java</label>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span>90%</span>
                        </div>
                    </div>

                    <label class="progress-bar-label">Php+Frameworks</label>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <span>85%</span>
                        </div>
                    </div>

                    <label class="progress-bar-label">JavaScript+Frameworks</label>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span>90%</span>
                        </div>
                    </div>

                    <label class="progress-bar-label">Python+Frameworks</label>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            <span>60%</span>
                        </div>
                    </div>

                    <label class="progress-bar-label">Android Studio</label>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                            <span>65%</span>
                        </div>
                    </div>



                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">

                  <label class="progress-bar-label">MEAN Stack</label>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                          <span>85%</span>
                      </div>
                  </div>

                  <label class="progress-bar-label">CMS (WordPress, Joomla, Drupal)</label>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                          <span>90%</span>
                      </div>
                  </div>

                  <label class="progress-bar-label">HTML &amp; CSS</label>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                          <span>90%</span>
                      </div>
                  </div>

                  <label class="progress-bar-label">MySQL</label>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                          <span>90%</span>
                      </div>
                  </div>

                  <label class="progress-bar-label">Adobe Dreamweaver</label>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                          <span>80%</span>
                      </div>
                  </div>



                </div>
            </div>
        </div>
    </section>
    <section class="skills border-bottom padding-block">
        <div class="container">
            <h3 style="padding-left:40%;" class="title title-skills">Achievements</h3>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-6">
                  <label class="progress-bar-label">-Gold Medal On HackerRank</label><br>
                  <label class="progress-bar-label">-Campus Ambassador for GeeksForGeeks</label><br>
                  <label class="progress-bar-label">-Contributed To Open Source</label><br>
                  <label class="progress-bar-label">-Leader Of Programming Club in My College (InstaCode)</label><br>
                  <label class="progress-bar-label">-Held Various College Contest On My Own Website</label>

                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">
                  <label class="progress-bar-label">-Qualified For ACM-ICPC 2017 India Regional</label><br>
                  <label class="progress-bar-label">-Qualified For Google CodeJam 2017</label><br>
                  <label class="progress-bar-label">-Qualified for Codechef Snackdown 2017</label><br>
                  <label class="progress-bar-label">-Registerd Company On Indiamart</label><br>
                  <label class="progress-bar-label">-Have 3 Revenue Websites</label>

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
                        <span class="name hover-animate"><a href="portfolio"><b>Web Development</b></a></span>
                    </div>
                  </center>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <center>
                    <div class="circle-block">
                        <a href="online"><span class="icon hover-animate"><i class="fa fa-code"></i></span></a>
                        <span class="name hover-animate"><a href="online"><b>Competitive Programming</b></a></span>
                    </div>
                  </center>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <center>
                    <div class="circle-block">
                        <a href="portfolio"><span class="icon hover-animate"><i class="fa fa-android"></i></span></a>
                        <span class="name hover-animate"><a href="portfolio"><b>Application</b></a></span>
                    </div>
                  </center>
                  </div>
                </div>
            </div>

    </section>

    <section class="info border-bottom padding-block text-center">

        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <h3 class="title">Hobbies &amp; Interest</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <div class="circle-block ">
                        <span class="icon hover-animate"><i class="fa fa-futbol-o"></i></span>
                        <span class="name hover-animate">Football</span>
                    </div>
                    <div class="circle-block">
                        <span class="icon hover-animate"><i class="fa fa-headphones"></i></span>
                        <span class="name hover-animate">Music</span>
                    </div>
                    <div class="circle-block">
                        <span class="icon hover-animate"><i class="fa fa-rocket"></i></span>
                        <span class="name hover-animate">Travelling</span>
                    </div>
                    <div class="circle-block">
                        <span class="icon hover-animate"><i class="fa fa-car"></i></span>
                        <span class="name hover-animate">Cars</span>
                    </div>
                    <div class="circle-block">
                        <span class="icon hover-animate"><i class="fa fa-gamepad"></i></span>
                        <span class="name hover-animate">Video games</span>
                    </div>
                    <div class="circle-block">
                        <span class="icon hover-animate"><i class="fa fa-paint-brush"></i></span>
                        <span class="name hover-animate">Painting</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="resume#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-phone"></i></span> {{mobile}}
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="resume#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-paper-plane"></i></span> {{email}}
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="resume#" class="hover-animate">
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
<a href="resume#" class="btn scrollToTop"><i class="fa fa-angle-up"></i></a>
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
</body>
</html>
