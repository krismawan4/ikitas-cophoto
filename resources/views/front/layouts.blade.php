<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('srcFront/img/favicon.png')}}" type="image/png">
        <title>Bitmap Photography Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('srcFront/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('srcFront/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{ asset('srcFront/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('srcFront/vendors/oc/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('srcFront/vendors/oc/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('srcFront/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{ asset('srcFront/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('srcFront/vendors/animate-css/animate.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('srcFront/css/style.css?t=[timestamp]')}}">
        <link rel="stylesheet" href="{{ asset('srcFront/css/responsive.css')}}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ route('home')}}"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li id="F-home" class="nav-item"><a class="nav-link" href="{{ route('home')}}">Home</a></li> 
                            <li id="F-galeri" class="nav-item"><a class="nav-link" href="{{ route('galeri')}}">Gallery</a></li>
                            <li id="F-service" class="nav-item"><a class="nav-link" href="{{ route('service')}}">Services</a></li>
                            <li id="F-about" class="nav-item"><a class="nav-link" href="{{ route('about')}}">About</a></li>
                            <li id="F-contact" class="nav-item"><a class="nav-link" href="{{ route('contact')}}">Contact</a></li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>
        <!--================Header Menu Area =================-->

        <!--================ Content Area =================-->
        @yield('content')
        <!--================ Content Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>About Us</h3>
        					</div>
        					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore </p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Contact</h3>
        					</div>
        					<div class="contact_info">
                                <div class="info_item">
                                    <i class="lnr lnr-home"></i>
                                    <p>California, United States</p>
                                </div>
                                <div class="info_item">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <p>00 (440) 9865 562</p>
                                </div>
                                <div class="info_item">
                                    <i class="lnr lnr-envelope"></i>
                                    <p>support@colorlib.com</p>
                                </div>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Follow Us</h3>
        					</div>
        					<p>Let us be social</p>
        					<ul class="list">
        						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
        						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('srcFront/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('srcFront/js/popper.js')}}"></script>
        <script src="{{ asset('srcFront/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('srcFront/js/stellar.js')}}"></script>
        <script src="{{ asset('srcFront/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{ asset('srcFront/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('srcFront/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('srcFront/vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{ asset('srcFront/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('srcFront/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('srcFront/js/mail-script.js')}}"></script>
        <script src="{{ asset('srcFront/js/theme.js')}}"></script>
        <!-- Additonal Script -->
        @yield('addScript')
    </body>
</html>