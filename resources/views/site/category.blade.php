@extends('site.layouts.app')

@section('title', $category -> name)

@section('content')


    <div id="demo" class="slider-pro">
        <div class="sp-slides">
            @if ($gallery -> count() > 0)
                @foreach($gallery as $image)
                  <div class="sp-slide"><img class="sp-image" src=" {{ asset('storage' . DIRECTORY_SEPARATOR . $image->image_path . DIRECTORY_SEPARATOR . $image->image_name) }}" alt=""></div>
                @endforeach
            @else
                <p class="text-center">لا يوجد صور لهذه الصفحة</p>
            @endif
        </div>

        <div class="sp-thumbnails">
            @if ($gallery -> count() > 0)
                @foreach($gallery as $image)
                    <img class="sp-thumbnail" src="{{ asset('storage' . DIRECTORY_SEPARATOR . $image->image_path . DIRECTORY_SEPARATOR . $image->image_name) }}"/>
                @endforeach
            @else
                <p class="text-center">لا يوجد صور لهذه الصفحة</p>
            @endif
        </div>
    </div>

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>{{ $category->name }}</h2>
                        <span>{!! $category->description !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

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
