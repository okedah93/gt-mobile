<!-- FOOTER -->
@section('footer')
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
@endsection
<!-- END FOOTER -->
@section('js_content')
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
@endsection
