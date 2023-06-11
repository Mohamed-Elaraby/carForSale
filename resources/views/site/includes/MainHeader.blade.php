<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('site.home') }}" class="logo">
                        <img src="{{ asset('storage/logo200x100.png') }}" width="150" height="80px">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('site.home') }}" class="home_link active">الصفحة الرئيسية</a></li>
                        @foreach($categories as $category)
                            <li class="scroll-to-section"><a href="{{ route('site.category', $category -> id) }}" class="category_link_{{$category -> id}}">{{ $category -> name }}</a></li>
                        @endforeach
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
