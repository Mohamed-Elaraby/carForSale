<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('site.includes.metaTages')
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600&display=swap" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site_files/assets/css - ar/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('site_files/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('site_files/assets/css - ar/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('site_files/assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('site_files/assets/css/lightbox.css') }}">

    <link rel="stylesheet" href="{{ asset('site_files/assets/css/main.css') }}">

    @stack('links')
</head>

<body>

<a href="tel:+920003745" class="call_button">
    <span class="call_button_container">
        <i class="fa fa-phone"></i>
    </span>
</a>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
@include('site.includes.MainHeader')
<!-- ***** Header Area End ***** -->

@yield('content')

<!-- ***** Footer Start ***** -->
@include('site.includes.MainFooter')
<!-- jQuery -->
<script src="{{ asset('site_files/assets/js/jquery-2.1.0.min.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" integrity="sha512-AFwxAkWdvxRd9qhYYp1qbeRZj6/iTNmJ2GFwcxsMOzwwTaRwz2a/2TX225Ebcj3whXte1WGQb38cXE5j7ZQw3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
<!-- Bootstrap -->
<script src="{{ asset('site_files/assets/js/popper.js') }}"></script>
<script src="{{ asset('site_files/assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('site_files/assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('site_files/assets/js/accordions.js') }}"></script>
<script src="{{ asset('site_files/assets/js/datepicker.js') }}"></script>
<script src="{{ asset('site_files/assets/js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('site_files/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('site_files/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('site_files/assets/js/imgfix.min.js') }}"></script>
<script src="{{ asset('site_files/assets/js/slick.js') }}"></script>
<script src="{{ asset('site_files/assets/js/lightbox.js') }}"></script>
<script src="{{ asset('site_files/assets/js/isotope.js') }}"></script>

<!-- Global Init -->
<script src="{{ asset('site_files/assets/js/custom.js') }}"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>
@stack('scripts')
</body>
</html>
