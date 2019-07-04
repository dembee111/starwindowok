<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $pageTitle }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets2/images/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->

        <!--Meta name -->

        <meta name="title" content="Star window|вакум цонх хийх|вакум цонх засвар|цонх|вакум цонхны үйлдвэр">
        <meta name="description" content="Star window |Компани утас, 70120306|вакум цонхны шилдэг үйлдвэр|цонхны захиалага|vacuum window glass|вакум цонхны үнийн санал|вакум цонх бөөний худалдаа">
        <meta name="keywords" content="Вакум цонх|wacum tsonh|vacuum tsonkh|вакум цонх|цонхны захиалага|вакум цонхны шилдэг үйлдвэр">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta property="og:type" content="article">
        <meta property="og:title" content="Вакум цонх|wacum tsonh|vacuum tsonkh|вакум цонх|цонхны захиалага|вакум цонхны шилдэг үйлдвэр">
        <meta property="og:url" content="http://www.starwindow.mn">
        <meta property="og:description" content="Вакум цонх|wacum tsonh|vacuum tsonkh|вакум цонх|цонхны захиалага|вакум цонхны шилдэг үйлдвэр">
         
		<!-- all css here -->
		<!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{ asset('assets2/css/animate.css')}}">
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <link rel="stylesheet" href="{{ asset('assets2/css/owl.carousel.css')}}">
		<!-- font-awesome v4.6.3 css -->
        <link rel="stylesheet" href="{{ asset('assets2/css/font-awesome.min.css')}}">
		<!-- magnific-popup.css -->
        <link rel="stylesheet" href="{{ asset('assets2/css/magnific-popup.css')}}">
		<!-- slicknav.min.css -->
        <link rel="stylesheet" href="{{ asset('assets2/css/slicknav.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{ asset('assets2/css/styles.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets2/css/responsive.css')}}">
		<!-- modernizr css -->
        <script src="{{ asset('assets2/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        
       
        <!-- ManyChat -->
        <script src="//widget.manychat.com/328678640908015.js" async="async"></script>
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="{{ asset('engine0/style.css')}}" />
	<script type="text/javascript" src="{{ asset('engine0/jquery.js')}}"></script>
	<!-- End WOWSlider.com HEAD section --></head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- preloder-wrap -->
        <div id="cssLoader3" class="preloder-wrap">
            <div class="loader">
                <div class="child-common child4"></div>
                <div class="child-common child3"></div>
                <div class="child-common child2"></div>
                <div class="child-common child1"></div>
            </div>
        </div>
        <!-- preloder-wrap -->
        <!-- search-area -->
        <div class="search-area">
            <span class="closs-btn">Close</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search Here">
                                <button type="button" name="button" class="btn-style">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-area -->
		<!-- heared area start -->
        @include('front.layouts.partials.header')
        <!-- heared area end -->     

       
        @yield('slider')
        <!--Main-content-->
         @yield('content')
        <!--End Main Content-->
        
            @include('front.layouts.chat.chat')
        
        
		<!-- footer-area start-->
		 @include('front.layouts.partials.footer')
		<!-- footer-area end  -->
       
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="{{ asset('assets2/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- bootstrap js -->
        <script src="{{ asset('assets2/js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel.2.0.0-beta.2.4 css -->
        <script src="{{ asset('assets2/js/owl.carousel.min.js')}}"></script>
		<!-- counterup.main.js -->
        <script src="{{ asset('assets2/js/counterup.main.js')}}"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="{{ asset('assets2/js/imagesloaded.pkgd.min.js')}}"></script>
		<!-- isotope.pkgd.min.js -->
        <script src="{{ asset('assets2/js/isotope.pkgd.min.js')}}"></script>
		<!-- jquery.waypoints.min.js -->
        <script src="{{ asset('assets2/js/jquery.waypoints.min.js')}}"></script>
		<!-- jquery.magnific-popup.min.js -->
        <script src="{{ asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- jquery.slicknav.min.js -->
        <script src="{{ asset('assets2/js/jquery.slicknav.min.js')}}"></script>
		<!-- snake.min.js -->
        <script src="{{ asset('assets2/js/snake.min.js')}}"></script>
		<!-- wow js -->
        <script src="{{ asset('assets2/js/wow.min.js')}}"></script>
		<!-- plugins js -->
        <script src="{{ asset('assets2/js/plugins.js')}}"></script>
		<!-- main js -->
        <script src="{{ asset('assets2/js/scripts.js')}}"></script>
       
        @yield('scripts')

        <script>
            
                  $(document).ready(function(){                    

                      

                     $('div.alert').delay(3000).slideUp(300);

                    });

                  $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
        </script>
        
    </body>
</html>
