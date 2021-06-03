<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if IE 10 ]>    <html lang="en" class="ie10">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
   @include('frontend.includes.head')
    <style type="text/css">
        .model-body{

        }
    </style>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<!-- Start main area -->
        <div class="main-area">
        	<!-- Start header -->
       @include('frontend.includes.header')
        	<!-- End header -->
        @yield('content')
            <!-- Start brand logo area -->
            <section class="brand-logo-area pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>OUR <span>SPONSORS</span></h2>
                                <img src="img/title-bottom.png" alt="">
                            </div>
                        </div>
                        <!-- End section title -->
                        <!-- Start brand logo -->
                        <div class="brand-logo">
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="http://psdrightsell.com/"><img src="img/brand-logo/b-logo-one.png" alt="psdrightsell"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="http://hastech.company/"><img src="img/brand-logo/b-logo-two.png" alt="hastech"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://devitems.com/"><img src="img/brand-logo/b-logo-three.png" alt="devitems"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/power-boosts"><img src="img/brand-logo/b-logo-four.png" alt="power boosts"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/hastech/portfolio"><img src="img/brand-logo/b-logo-five.png" alt="hastech"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/codecarnival"><img src="img/brand-logo/b-logo-six.png" alt="codecarnival"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End brand logo -->
                    </div>
                </div>
            </section>
            <!-- End brand logo area -->
            <!-- Start footer -->
            <footer>
                <div class="footer-top pt-50 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="footer-widget-area">
                                <!-- Start footer widget -->
                                <div class="col-sm-4">
                                    <div class="footer-widget widget-one">
                                        <div class="footer-widget-title">
                                            <h3>ABOUT US</h3>
                                        </div>
                                        <div class="widget-about-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id tincidunt risus. </p>
                                        </div>
                                        <div class="widget-contact-content">
                                            <h3>CONTACT US</h3>
                                            <a href="tel:+0012345678">Phone :  +(00) 1234-5678</a>
                                            <a href="mailto:info@granttheme.com">Email :  info@granttheme.com</a>
                                            <p>Address :  122, New road, South Zone Country.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-sm-2">
                                    <div class="footer-widget widget-two">
                                        <div class="footer-widget-title">
                                            <h3>OUR PROJECT</h3>
                                        </div>
                                        <nav>
                                            <ul>
                                                <li><a href="#">Water Surve</a></li>
                                                <li><a href="#">Education for all</a></li>
                                                <li><a href="#">Treatment</a></li>
                                                <li><a href="#">Food Serving</a></li>
                                                <li><a href="#">Cloth</a></li>
                                                <li><a href="#">Selter Project</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-sm-2">
                                    <div class="footer-widget widget-two">
                                        <div class="footer-widget-title">
                                            <h3>QUCIK LINK</h3>
                                        </div>
                                        <nav>
                                            <ul>
                                                <li><a href="#">Causes</a></li>
                                                <li><a href="#">Projects</a></li>
                                                <li><a href="#">Gallery</a></li>
                                                <li><a href="#">Terms of use</a></li>
                                                <li><a href="#">Legal disclaimer</a></li>
                                                <li><a href="#">Privacy policy</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-sm-4">
                                    <div class="footer-widget widget-four">
                                        <div class="footer-widget-title">
                                            <h3>NEWSLETTER</h3>
                                        </div>
                                        <div class="widget-about-content">
                                            <p>Select your newsletters, enter your email address, and click "Subscribe"</p>
                                        </div>
                                        <div class="newslater">
                                            <form id="mc-form" class="mc-form form">
                                                <input id="mc-email" type="email" autocomplete="off"  placeholder="Email Address">
                                                <button id="mc-submit" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                            </form>
                                            <!-- mailchimp-alerts Start -->
                                            <div class="mailchimp-alerts text-centre">
                                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                            </div><!-- mailchimp-alerts end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="copyright">
                                    <p>Copyright 2017 All rigth reserved. Design by theme <a href="#">Grant Foundation</a></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="footer-social">
                                    <nav>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs" id="back-top" style="display: block;"></div>
                    </div>
                </div>
            </footer>
            <!-- End footer -->
        </div>
        <!-- End main area -->

        <!-- Color Switcher -->
       <!--  <div class="ec-colorswitcher">
            <a class="ec-handle" href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
            <h3>Style Switcher</h3>
            <div class="style-swicher-logo text-center">
                <img src="img/logo.png" alt="Logo">
            </div>
            <div class="ec-switcherarea">
                <h6>Select Layout</h6>
                <div class="layout-btn">
                    <a href="#" class="ec-boxed"><span>Boxed</span></a>
                    <a href="#" class="ec-wide"><span>Wide</span></a>
                </div>
                <h6>Chose Color</h6>
                <ul class="ec-switcher">
                    <li><a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a></li>
                    <li><a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a></li>
                    <li><a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a></li>
                    <li><a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a></li>
                    <li><a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a></li>
                    <li><a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a></li>
                    <li><a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li>
                    <li><a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li>
                    <li><a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li>
                    <li><a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li>
                    <li><a href="#" class="cs-color-11 styleswitch" data-rel="color-eleven"></a></li>
                    <li><a href="#" class="cs-color-12 styleswitch" data-rel="color-twelve"></a></li>
                </ul>
                <div class="ec-pattren">
                    <h6>Chose Pattren</h6>
                    <div class="pattren-wrap">
                        <a href="#" data-rel="pattren1" class="styleswitch"><img src="img/pattren/pattren1.jpg" alt=""></a>
                        <a href="#" data-rel="pattren2" class="styleswitch"><img src="img/pattren/pattren2.jpg" alt=""></a>
                        <a href="#" data-rel="pattren3" class="styleswitch"><img src="img/pattren/pattren3.jpg" alt=""></a>
                        <a href="#" data-rel="pattren4" class="styleswitch"><img src="img/pattren/pattren4.jpg" alt=""></a>
                        <a href="#" data-rel="pattren5" class="styleswitch"><img src="img/pattren/pattren5.jpg" alt=""></a>
                    </div>
                </div>
                <div class="ec-background">
                    <h6>Chose Background</h6>
                    <div class="background-wrap">
                        <a href="#" data-rel="background1" class="styleswitch"><img src="img/background/bg-1.jpg" alt=""></a>
                        <a href="#" data-rel="background2" class="styleswitch"><img src="img/background/bg-2.jpg" alt=""></a>
                        <a href="#" data-rel="background3" class="styleswitch"><img src="img/background/bg-3.jpg" alt=""></a>
                        <a href="#" data-rel="background4" class="styleswitch"><img src="img/background/bg-4.jpg" alt=""></a>
                        <a href="#" data-rel="background5" class="styleswitch"><img src="img/background/bg-5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Color Switcher end -->

		<!-- jquery-1.12.0.min js
		============================================ -->
        <script src="{{asset('frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>

		<!-- bootstrap js
		============================================ -->
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

		<!-- owl.carousel.min js
		============================================ -->
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

        <!-- jquery.nivo.slider.pack js
		============================================ -->
        <script src="{{asset('frontend/js/jquery.nivo.slider.pack.js')}}"></script>

        <!-- jquery.mixitup.min js
        ============================================ -->
        <script src="{{asset('frontend/js/jquery.mixitup.min.js')}}"></script>

        <!-- jquery.magnific-popup.min js
        ============================================ -->
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>

        <!-- jquery.meanmenu js
        ============================================ -->
        <script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>

        <!-- jquery.syotimer.min js
        ============================================ -->
        <script src="{{asset('frontend/js/jquery.syotimer.min.js')}}"></script>

		<!-- wow js
		============================================ -->
        <script src="{{asset('frontend/js/wow.js')}}"></script>

        <!-- jquery.scrollUp.min js
        ============================================ -->
        <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>

        <!-- jquery.ajaxchimp.min js
        ============================================ -->
        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>

        <!-- plugins js
		============================================ -->
        <script src="{{asset('frontend/js/plugins.js')}}"></script>

        <script>
        	new WOW().init();
        </script>

        <!-- styleswitch js
        ============================================ -->
        <script src="{{asset('frontend/js/styleswitch.js')}}"></script>

   		<!-- main js
		============================================ -->
        <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>
