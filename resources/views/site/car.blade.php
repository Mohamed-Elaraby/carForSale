@extends('site.layouts.app')

@section('title', $car -> name)

@section('content')

<div class="container">
    <!-- start Slider -->
    <div id="car_image" class="slider-pro">
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
    <!-- end slider -->

    <!-- start car information -->

    <hr>

    <table class="table table-borderless table-responsive table-sm">
        <tr>
            <td><h4>{{ __('trans.car information') }}</h4></td>
        </tr>
        <tr>
            <th>{{ __('trans.the car') }} :</th>
            <td>{{ $car -> name }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.manufacturing year') }} :</th>
            <td>{{ $car -> manufacturing_year }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.manufacturing country') }} :</th>
            <td>{{ $car -> manufacturing_country }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.kilometers') }} :</th>
            <td>{{ $car -> kilometers }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.warranty') }} :</th>
            <td>{{ $car -> warranty }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.inside color') }} :</th>
            <td>{{ $car -> inside_color }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.outside color') }} :</th>
            <td>{{ $car -> outside_color }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.rim size') }} :</th>
            <td>{{ $car -> rim_size }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.body status') }} :</th>
            <td>{{ $car -> body_status }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.gear status') }} :</th>
            <td>{{ $car -> gear_status }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.engine status') }} :</th>
            <td>{{ $car -> engine_status }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.keys count') }} :</th>
            <td>{{ $car -> keys_count }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.hours count') }} :</th>
            <td>{{ $car -> hours_count }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.gear box') }} :</th>
            <td>{{ $car -> gear_box }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.fuel') }} :</th>
            <td>{{ $car -> fuel }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.engine size') }} :</th>
            <td>{{ $car -> engine_size }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.type') }} :</th>
            <td>{{ $car -> type }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.code') }} :</th>
            <td>{{ $car -> code }}</td>
        </tr>
{{--        <tr>--}}
{{--            <th>{{ __('trans.price') }} :</th>--}}
{{--            <td>{{ $car -> price . ' ريال ' . $car -> price_status }}</td>--}}
{{--        </tr>--}}
    </table>

    <!-- end car information -->


    <!-- start car specification -->
    <hr>
    <h4>{{ __('trans.car specifications') }}</h4><br>
    <div class="row">
        @foreach ($specifications as $specification)
            <div class="col-md-4">
                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                {{ $specification -> name }}
            </div>
        @endforeach
    </div>

    <!-- end car specification -->

    <!-- start car price -->
    <hr>
    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-bordered table-responsive">
                <tr>
                    <td colspan="2" class="text-center"><h4>{{ __('trans.price') }}</h4></td>
                </tr>
                <tr>
                    <th>{{ $car -> price .' '. $site_currency }} </th>
                    <td>{{ $car -> price_status }}</td>
                </tr>
            </table>
        </div>
    </div>


    <!-- end car price -->

</div>

@endsection
@push('links')
    <link rel="stylesheet" href={{ asset('assets/slider/dist/css/slider-pro.min.css') }} />
    <style>

    </style>
@endpush

@push('scripts')
{{--    <script>--}}
{{--        let category_id = '{{ $category -> id }}';--}}
{{--        @if (\Request::segment(2) == $category -> id)--}}
{{--        $('.home_link').removeClass('active');--}}
{{--        $('.category_link_' + category_id).addClass('active');--}}
{{--        @endif--}}
{{--    </script>--}}
    <!-- jQuery Version -->

    {{--<script src="http://code.jquery.com/jquery.min.js"></script>--}}
    <script src={{ asset('assets/slider/dist/js/jquery.sliderPro.min.js') }}></script>
    <script>
        // jQuery Version
        $('#car_image').sliderPro({
            width: 1600,
            height: 1200,
            responsive:true,
            aspectRatio: -1,
            imageScaleMode:'cover',
            centerImage:true,
            allowScaleUp:true,
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
            autoplay: true,
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
