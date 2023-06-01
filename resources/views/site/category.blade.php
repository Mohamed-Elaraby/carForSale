@extends('site.layouts.app')

@section('title', $category -> name)

@section('content')


    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                @foreach ($header_cover  as $cover)
                    <div class="col-lg-4">
                        <div class="car_image_container">
                            @if($cover -> car -> status == 'محجوزة')
                                <div class="car_status text-center"><span class="car_status_text">محجوزة</span></div>
                            @endif
                            <img class="img-thumbnail" src="{{ asset('storage'.DIRECTORY_SEPARATOR.$cover->image_path.DIRECTORY_SEPARATOR.$cover->image_name) }}" alt="{{ $cover->image_name }}">
                        </div>
                        <div class="section-heading">
                            <h6 class="text-center"><a href="{{ route('site.car.show', $cover -> car -> id) }}">{{ $cover -> car -> name }}</a></h6>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $header_cover -> links() }}
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->
@endsection
@push('links')
    <link rel="stylesheet" href={{ asset('assets/slider/dist/css/slider-pro.min.css') }} />
@endpush

@push('scripts')
<script>
    let category_id = '{{ $category -> id }}';
    @if (\Request::segment(2) == $category -> id)
        $('.home_link').removeClass('active');
        $('.category_link_' + category_id).addClass('active');
    @endif
</script>
<!-- jQuery Version -->

{{--<script src="http://code.jquery.com/jquery.min.js"></script>--}}
<script src={{ asset('assets/slider/dist/js/jquery.sliderPro.min.js') }}></script>
<script>
    // jQuery Version
    $('#demo').sliderPro({
        width: 1600,
        height: 1200,
        responsive:true,
        aspectRatio: -1,
        imageScaleMode:'cover',
        centerImage:true,
        // allowScaleUp:true,
        startSlide: 0,
        forceSize:'none',
        loop:true,
        slideDistance: 10,
        Duration: 700,
        heightAnimationDuration: 700,
        visibleSize:'auto',
        breakpoints: null,
        centerSelectedSlide: true,
        rightToLeft: false,
        fade: 'false',
        fadeOutPreviousSlide: true,
        fadeDuration: 500,
        autoplay: false,
        autoplayDelay: 3000,
        autoplayDirection: 'normal',
        autoplayOnHover: 'pause',
        arrows: true,
        fadeArrows: false,
        buttons: false,
        keyboard: true,
        keyboardOnlyOnFocus: false,
        touchSwipe: true,
        fadeCaption: true,
        fullScreen: true,
        fadeFullScreen: false,
        smallSize: 480,
        mediumSize: 768,
        largeSize: 1024,
        updateHash:true,
        thumbnailWidth: 100,
        thumbnailHeight: 80,
        thumbnailsPosition:'bottom',
        thumbnailPointer:false,
        thumbnailArrows:true,
        thumbnailTouchSwipe:true,


    });
</script>
@endpush
