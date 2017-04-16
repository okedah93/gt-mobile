<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/custom.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/freelancer.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/superslides.css">
    <style>
        .wide-container {
            max-width: 1000px;
            height: 500px;
            margin: 0 auto;
        }
    </style>
    <title>Welcome to CodeIgniter</title>
</head>
<body id="index">
<div id="mainWrap">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom clearNav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ url('/') }}/img/GT-mobile_LOGO.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- <ul class="nav navbar-nav">
                    <li class="page-scroll main-logo">
                        <a href="></a>
                    </li>
                </ul> -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home/simcard">sim card</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home/router">router</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home/aboutus">about us</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home/support">support</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home/contactus">contact us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<div class="container-fluid content-container">
    @yield('content')
</div>
</div>
<div class="footer">
    <div class="container">
        <div class="bottomfooter row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="copyright col-md-6 col-sm-6 col-xs-12">
                        <h5>All Right Reserved. ©AllySYNC 2016.</h5>
                    </div>
                    <div class="socialmedia col-md-6 col-sm-6 col-xs-12">
                        <div class="socialmedia-list">
                            <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                            <a class="instagram" href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a class="google-plus" href="http://www.plus.google.com"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->
    <script type="text/javascript" src="{{ url('/') }}/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/jquery.superslides.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/bootstrap.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/freelancer.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown-toggle").dropdown();
        });
        $(document).ready(function(){
            $('ul li a').click(function(){
                $('li a').removeClass("active");
                $(this).addClass("active");
            });
        });
        $('.dropdown-menu').find('form').click(function (e) {
            e.stopPropagation();
        });
        $(function() {
            $('#slides').superslides({
                play: 7000
            });
        });
        $(function() {
            var nav = $(".clearNav");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 20) {
                    nav.removeClass('clearNav').addClass("darkNav");
                } else {
                    nav.removeClass("darkNav").addClass('clearNav');
                }
            });
        });
        $(document).ready(function() {
            var owl = $("#slider-carousel2");
            owl.owlCarousel({
                items: 3,
                itemsDesktop: [1000, 3],
                itemsDesktopSmall: [900, 2],
                itemsTablet: [600, 1],
                itemsMobile: false,
                pagination: false
            });
            $(".next").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            })
        });
        $(document).ready(function () {

            $("#startdate").datepicker({
                dateFormat: "dd-M-yy",
                minDate: 0,
                onSelect: function (date) {
                    var dt2 = $('#enddate');
                    var startDate = $(this).datepicker('getDate');
                    var minDate = $(this).datepicker('getDate');
                    dt2.datepicker('setDate', minDate);
                    startDate.setDate(startDate.getDate() + 30);
                    //sets dt2 maxDate to the last day of 30 days window
                    dt2.datepicker('option', 'maxDate', startDate);
                    dt2.datepicker('option', 'minDate', minDate);
                    $(this).datepicker('option', 'minDate', minDate);
                }
            });
            $('#enddate').datepicker({
                dateFormat: "dd-M-yy"
            });
        });
    </script>
</body>
