<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                @php($profile_picture_path = Auth::user() -> image_name == 'default.png' ? 'storage' .DIRECTORY_SEPARATOR. 'default.png' : Auth::user() -> profile_picture_path)
                <img src="{{ asset($profile_picture_path)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Home Page Route -->
            <li class="active">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-user-o"></i>
                    <span>{{ __('trans.profile') }}</span>
                </a>
            </li>
            <!-- Users Route -->
            <li class="active">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-users"></i>
                    <span>{{ __('trans.all user') }}</span>
                </a>
            </li>
            <!-- HomePage Route -->
            <li class="active">
                <a href="{{ route('admin.homePage.index') }}">
                    <i class="fa fa-home"></i>
                    <span>{{ __('trans.edit homePage') }}</span>
                </a>
            </li>
            <!-- Categories Route -->
            <li class="active">
                <a href="{{ route('admin.categories.index') }}">
                    <i class="fa fa-list"></i>
                    <span>{{ __('trans.categories') }}</span>
                </a>
            </li>
            <!-- Sub Categories Route -->
{{--            <li class="active">--}}
{{--                <a href="{{ route('admin.subCategories.index') }}">--}}
{{--                    <i class="fa fa-th-list"></i>--}}
{{--                    <span>{{ __('trans.all sub categories') }}</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <!-- Setting Route -->
            <li class="active">
                <a href="{{ route('admin.setting.index') }}">
                    <i class="fa fa-cogs"></i>
                    <span>{{ __('trans.setting') }}</span>
                </a>
            </li>
            <!-- Goto The Site Route -->
            <li class="active">
                <a target="_blank" href="{{ route('site.home') }}">
                    <i class="fa fa-globe"></i>
                    <span>{{ __('trans.goto the site') }}</span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
