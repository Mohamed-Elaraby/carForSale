<header class="main-header">

    <!-- Logo -->
    <a href="{{ route('admin.dashboard') }}" class="logo" style="padding: 0 5px; font-family: myFirstFont !important;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><small><b>R.L</b></small></span> <!-- SCG For Sheikh Center Group -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg logo_custom_style">{{ $setting? $setting -> site_name: null }}</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Tasks Menu -->
{{--                <li class="dropdown tasks-menu">--}}
{{--                    <!-- Menu Toggle Button -->--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
{{--                        {{ __('trans.language change') }}--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li>--}}
{{--                            <ul class="menu">--}}
{{--                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                                    <li>--}}
{{--                                        <a style="color: #3c8dbc;" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                                            {{ $properties['native'] }}--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            <!-- end task item -->--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    @php($profile_picture_path = Auth::user() -> image_name == 'default.png' ? 'storage' .DIRECTORY_SEPARATOR. 'default.png' : Auth::user() -> profile_picture_path)
                        <!-- The user image in the navbar-->
                        <img src="{{ asset($profile_picture_path)}}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset($profile_picture_path)}}" class="img-circle" alt="User Image">

                            <p>
                                {{ Auth::user()->name }}
                                <small>{{ __('trans.member since') }} {{ Auth::user()->created_at->format('M, d Y') }}</small>
                            </p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">{{ __('trans.profile') }}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('trans.sign out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
{{--                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>--}}
            </ul>
        </div>
    </nav>
</header>
