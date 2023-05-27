
{{--                    @foreach($shuffle_gallery_images as $image)--}}
{{--                    <li>--}}
{{--                        <a href="#cut">--}}
{{--                            <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$image->image_path.DIRECTORY_SEPARATOR.$image->image_name) }}" alt="{{ $image->image_name }}">--}}
{{--                        </a>--}}
{{--                        <div class="label_text"><p>cut</p></div>--}}
{{--                    </li>--}}
{{--                    @endforeach--}}

<div class="skitter skitter-large with-dots" style="margin: 0 auto">
    <ul>
            @php($image_class_shuffle = [
                    'cut',
                    'swapBlocks',
                    'swapBarsBack',
                    'directionBottom',
                    'cubeSpread',
                    'circles',
                    'cubeStopRandom',
                    'cubeStop',
                    'hideBars',
                    'cubeSize',
          ])
        @foreach ($slideShow_images as $image)
            <li>
                <img class="{{ $image_class_shuffle[ rand(0, 9) ] }}" src="{{ asset('storage'.DIRECTORY_SEPARATOR.$image->image_path.DIRECTORY_SEPARATOR.$image->image_name) }}" alt="{{ $image->image_name }}">
            </li>
        @endforeach

    </ul>
</div>










































{{--<div class="main-banner" id="top">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="left-content">--}}
{{--                    <div class="thumb">--}}
{{--                        <div class="inner-content">--}}
{{--                            <h4>We Are Hexashop</h4>--}}
{{--                            <span>Awesome, clean &amp; creative HTML5 Template</span>--}}
{{--                            <div class="main-border-button">--}}
{{--                                <a href="#">Purchase Now!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <img src="{{ asset('site_files') }}/assets/images/left-banner-image.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="right-content">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="right-first-image">--}}
{{--                                <div class="thumb">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <h4>Women</h4>--}}
{{--                                        <span>Best Clothes For Women</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="hover-content">--}}
{{--                                        <div class="inner">--}}
{{--                                            <h4>Women</h4>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>--}}
{{--                                            <div class="main-border-button">--}}
{{--                                                <a href="#">Discover More</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <img src="{{ asset('site_files') }}/assets/images/baner-right-image-01.jpg">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="right-first-image">--}}
{{--                                <div class="thumb">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <h4>Men</h4>--}}
{{--                                        <span>Best Clothes For Men</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="hover-content">--}}
{{--                                        <div class="inner">--}}
{{--                                            <h4>Men</h4>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>--}}
{{--                                            <div class="main-border-button">--}}
{{--                                                <a href="#">Discover More</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <img src="{{ asset('site_files') }}/assets/images/baner-right-image-02.jpg">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="right-first-image">--}}
{{--                                <div class="thumb">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <h4>Kids</h4>--}}
{{--                                        <span>Best Clothes For Kids</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="hover-content">--}}
{{--                                        <div class="inner">--}}
{{--                                            <h4>Kids</h4>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>--}}
{{--                                            <div class="main-border-button">--}}
{{--                                                <a href="#">Discover More</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <img src="{{ asset('site_files') }}/assets/images/baner-right-image-03.jpg">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="right-first-image">--}}
{{--                                <div class="thumb">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <h4>Accessories</h4>--}}
{{--                                        <span>Best Trend Accessories</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="hover-content">--}}
{{--                                        <div class="inner">--}}
{{--                                            <h4>Accessories</h4>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>--}}
{{--                                            <div class="main-border-button">--}}
{{--                                                <a href="#">Discover More</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <img src="{{ asset('site_files') }}/assets/images/baner-right-image-04.jpg">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
