@extends('site.layouts.app')

@section('title', $setting? $setting -> title: null)

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
    <!-- ***** Google Map Starts ***** -->
{{--    <div class="google_map" style="width: 100%">--}}
{{--        <div class="container">--}}
{{--            <div class="map_container" style="width: 100%; margin: 0 auto">--}}
{{--                <iframe--}}
{{--                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.249899207221!2d46.687493484997965!3d24.821126184072554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efd128aa1428b%3A0x327e444594dda7af!2z2KPYs9i32YjYsdipINin2YTYsdmK2KfZhiDZhNiy2YrZhtipINin2YTYs9mK2KfYsdin2KogLSDYrdmKINin2YTZhtix2KzYsw!5e0!3m2!1sar!2seg!4v1643208619280!5m2!1sar!2seg"--}}
{{--                    width="100%"--}}
{{--                    height="500"--}}
{{--                    style="border:0;"--}}
{{--                    allowfullscreen=""--}}
{{--                    loading="lazy"--}}
{{--                >--}}

{{--                </iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- ***** Google Map Ends ***** -->

@endsection
@push('links')
    <link rel="stylesheet" href="{{ asset('site_files/assets/slideShow/css/skitter.css') }}">
    <style>
        .car_image_container
        {
            position: relative;
        }
        .car_status
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 95%;
            height: 20%;
            background-color: rgba(0, 0, 0, 0.50);
            color: #FFFFFF;
        }
        .car_status_text
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('site_files/assets/slideShow/js/jquery.skitter.min.js') }}"></script>
    <script src="{{ asset('site_files/assets/slideShow/js/jquery.easing.1.3.js') }}"></script>
    <script>
        $(function() {
            $(".skitter-large").skitter({
                navigation: true,
                dots: false,
                progressbar: true,
            });
        });
    </script>
@endpush

