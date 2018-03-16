<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Portfolio | Sandeep</title>
    <meta name="author" content="Sandeep" />
    <meta name="keywords" content="Sandeep Kumar, Sandeep, Aditya Kumar, Aditya, Aditya76, adi.kmr76, Sandy" />
    <meta name="description" content="Sandeep Kumar" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link type="text/css" media="all" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/css/magnific-popup.css" rel="stylesheet" />
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
<div id="wraper">
    <header class="head">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-11 col-lg-11">
                    <img class="logo-page" src="assets/img/portfolio_l.png" alt="aditya76">
                    <h2 class="title">Portfolio</h2
                    <h4 class="sub-title">Some of My Works</h4>
                </div>
                <div class="col-xs-4 col-sm-1 col-lg-1 text-right">
                    <a href="index" class="btn-close hover-animate"></a>
                </div>
            </div>
        </div>
    </header>
    <div class="portfolio-section padding-block">
        <div class="container">
            <div class="row">
                    <div class="portfolio">

                        <div class="filter_div controls">
                            <div class="col-xs-12 col-sm-12 col-lg-11">
                                <ul>
                                    <li class="hover-animate filter active" data-filter="all">All</li>
                                    <li class="hover-animate filter" data-filter=".category-1">Web Development</li>
                                    <li class="hover-animate filter" data-filter=".category-2">Applications</li>
                                    <li class="hover-animate filter" data-filter=".category-3">Illustrations</li>
                                </ul>
                            </div>
                        </div>

                        <div id="portfolio-grid">

                            <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-1">
                                <div class="within">

                                    <img src="assets/img/portfolio/p1.png" alt="Alt">
                                    <div class="port-item-cont">
                                        <h3 class="title">Instacode Online Judge</h3>
                                        <a href="http://instacode.xyz" class="popup-content view-work hover-animate">View details</a>
                                    </div>

                                    <div class="hidden">
                                        <div class="podrt-desc">
                                            <div class="modal-box-content">
                                                <img src="assets/img/portfolio/p_b1.png" alt="Alt">
                                                <button class="mfp-close"></button>
                                                <div class="text">
                                                    <h3 class="title">Instacode Online Judge</h3>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-m width-td">Completed</td>
                                                            <td>October 2016</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-m">Technology</td>
                                                            <td>Php, Python, JavaScript, Bootstrap</td>
                                                        </tr>
                                                    </table>
                                                    <p>{{instainfo}}</p>
                                                    <a href="http://www.instacode.xyz" class="btn btn-color">See Live</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-1">
                                <div class="within">

                                    <img src="assets/img/portfolio/p2.png" alt="Alt">
                                    <div class="port-item-cont">
                                        <h3 class="title">Instanotes</h3>
                                        <a href="http://instanotes.xyz" class="popup-content view-work hover-animate">View details</a>
                                    </div>

                                    <div class="hidden">
                                        <div class="podrt-desc">
                                            <div class="modal-box-content">
                                                <img src="assets/img/portfolio/p_b2.png" alt="Alt">
                                                <button class="mfp-close"></button>
                                                <div class="text">
                                                    <h3 class="title">Instanotes</h3>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-m width-td">Completed</td>
                                                            <td>November 2016</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-m">Technology</td>
                                                            <td>Php, JavaScript, Bootstrap</td>
                                                        </tr>
                                                    </table>
                                                    <p>{{notesinfo}}</p>
                                                    <a href="http://instanotes.xyz" class="btn btn-color">See Live</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-1">
                                <div class="within">

                                    <img src="assets/img/portfolio/p3.png" alt="Alt">
                                    <div class="port-item-cont">
                                        <h3 class="title">Tech Aditya</h3>
                                        <a href="portfolio#" class="popup-content view-work hover-animate">View details</a>
                                    </div>

                                    <div class="hidden">
                                        <div class="podrt-desc">
                                            <div class="modal-box-content">
                                                <img src="assets/img/portfolio/p_b3.png" alt="Alt">
                                                <button class="mfp-close"></button>
                                                <div class="text">
                                                    <h3 class="title">Tech Aditya</h3>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-m width-td">Completed</td>
                                                            <td>March 2015</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-m">Technology</td>
                                                            <td>Php, Mysql, JavaScript, Ajax, Jquery, CMS</td>
                                                        </tr>
                                                    </table>
                                                    <p>{{techinfo}}</p>
                                                    <a href="http://www.itechaditya.com" class="btn btn-color">See Live</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-2">
                                <div class="within">

                                    <img src="assets/img/portfolio/p_app.jpg" alt="Alt">
                                    <div class="port-item-cont">
                                        <h3 class="title">Tech Aditya App</h3>
                                        <a href="portfolio#" class="popup-content view-work hover-animate">View details</a>
                                    </div>

                                    <div class="hidden">
                                        <div class="podrt-desc">
                                            <div class="modal-box-content">
                                                <img src="assets/img/portfolio/p_b3.png" alt="Alt">
                                                <button class="mfp-close"></button>
                                                <div class="text">
                                                    <h3 class="title">Tech Aditya App</h3>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-m width-td">Completed</td>
                                                            <td>June 2015</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-m">Technology</td>
                                                            <td>Java + XML</td>
                                                        </tr>
                                                    </table>
                                                    <p>{{techinfo}}</p>
                                                    <a href="https://www.dropbox.com/s/sx267krn00yj432/Tech%20Aditya.apk?dl=0" class="btn btn-color">See Live</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-2">
                                <div class="within">

                                    <img src="assets/img/portfolio/p4.png" alt="Alt">
                                    <div class="port-item-cont">
                                        <h3 class="title">Chatting Over LAN</h3>
                                        <a href="portfolio#" class="popup-content view-work hover-animate">View details</a>
                                    </div>

                                    <div class="hidden">
                                        <div class="podrt-desc">
                                            <div class="modal-box-content">
                                                <img src="assets/img/portfolio/p_b4.png" alt="Alt">
                                                <button class="mfp-close"></button>
                                                <div class="text">
                                                    <h3 class="title">Chatting Over Lan</h3>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-m width-td">Completed</td>
                                                            <td>June 2016</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-m">Technology</td>
                                                            <td>Java</td>
                                                        </tr>
                                                    </table>
                                                    <p>Chatting application where multiple ip's can over same Local Area Network</p>
                                                    <a href="https://www.github.com/aditya6677" class="btn btn-color">See Live</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="mix col-xs-12 col-sm-6 col-lg-4 portfolio-item category-2">
                                <div class="within">

                                    <img src="assets/img/portfolio/p5.jpg" alt="Alt">
                                    <div class="port-item-cont">
                                        <h3 class="title">Custom Rom</h3>
                                        <a href="portfolio#" class="popup-content view-work hover-animate">View details</a>
                                    </div>

                                    <div class="hidden">
                                        <div class="podrt-desc">
                                            <div class="modal-box-content">
                                                <img src="assets/img/portfolio/p_b5.png" alt="Alt">
                                                <button class="mfp-close"></button>
                                                <div class="text">
                                                    <h3 class="title">Custom Rom Based On Android</h3>
                                                    <table>
                                                        <tr>
                                                            <td class="font-weight-m width-td">Progress</td>
                                                            <td>Dec 2016 - Present</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-m">Technology</td>
                                                            <td>Android Kitchen, Cygwin, Apkmanager, Atom</td>
                                                        </tr>
                                                    </table>
                                                    <p>Developing Custom Rom Based On Android Open Source Project, they are enriched with more functions and the appropriate drivers</p>
                                                    <a href="https://www.github.com/aditya6677" class="btn btn-color">See Live</a>
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
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="portfolio#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-phone"></i></span> {{mobile}}
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="portfolio#" class="hover-animate">
                        <span class="ukie-icons hover-animate"><i class="fa fa-paper-plane"></i></span> {{email}}
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <a href="portfolio#" class="hover-animate">
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
<a href="portfolio#" class="btn scrollToTop"><i class="fa fa-angle-up"></i></a>

<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="assets/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
<script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.inview.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.knob.min.js" type="text/javascript"></script>
<script src="assets/js/portfolio_scripts.js" type="text/javascript"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>
