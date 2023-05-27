@extends('site.layouts.app')

@section('title', $setting? $setting -> title: null)

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    @include('site.includes.MainBanner')
    <!-- ***** Main Banner Area End ***** -->
    @foreach($categories as $category)
        <!-- ***** Men Area Starts ***** -->
        <section class="section" id="men">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>{{ $category -> name }}</h2>
{{--                            <span>{{ $category -> description }}</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="men-item-carousel">
                            <div class="owl-men-item owl-carousel">
                                @foreach($category -> images as $image)
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$image->image_path.DIRECTORY_SEPARATOR.$image->image_name) }}" alt="{{ $image->image_name }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Men Area Ends ***** -->
    @endforeach

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Social Media</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="container">
            <div class="row images">
                @foreach($shuffle_gallery_images as $image)
                <div class="col-2">
                    <div class="thumb">
                        <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$image->image_path.DIRECTORY_SEPARATOR.$image->image_name) }}" alt="{{ $image->image_name }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Google Map Starts ***** -->
    <div class="google_map" style="width: 100%">
        <div class="container">
            <div class="map_container" style="width: 100%; margin: 0 auto">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.249899207221!2d46.687493484997965!3d24.821126184072554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efd128aa1428b%3A0x327e444594dda7af!2z2KPYs9i32YjYsdipINin2YTYsdmK2KfZhiDZhNiy2YrZhtipINin2YTYs9mK2KfYsdin2KogLSDYrdmKINin2YTZhtix2KzYsw!5e0!3m2!1sar!2seg!4v1643208619280!5m2!1sar!2seg"
                    width="100%"
                    height="500"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                >

                </iframe>
            </div>
        </div>
    </div>
    <!-- ***** Google Map Ends ***** -->

@endsection
@push('links')
    <link rel="stylesheet" href="{{ asset('site_files/assets/slideShow/css/skitter.css') }}">
    <style>

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

