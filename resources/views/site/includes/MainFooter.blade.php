<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo text-center" style="background-color: #ffffff">
                        <img src="{{ asset('storage/logo200x100.png') }}" width="200">
                    </div>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                مركز الشيخ لصيانة سيارات BMW الفرع الرئيسي, الرياض,الفيصلية, نجران, المملكة العربية السعودية
                            </a>
                        </li>
                        <li><a href="javascript:void(0)">info@skbmw.com</a></li>
                        <li><a href="javascript:void(0)">0554773357</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>اقسام الموقع</h4>
                <ul>
                    @foreach ($categories as $category)
                        <li><a href="{{ route('site.category', $category -> id) }}">{{ $category -> name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>التواصل الاجتماعى</h4>
                <ul>
                    <li><a href="https://www.facebook.com/skbmwsa">Facebook</a></li>
                    <li><a href="https://www.instagram.com/skbmw">Instagram</a></li>
                    <li><a href="https://www.twitter.com/bmwcenter">Twitter</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>الفروع</h4>
                <ul>
                    <li><a href="javascript:void(0)">مخرج 18 صناعية الدائرى</a></li>
                    <li><a href="javascript:void(0)">حي الياسمين مخرج 5</a></li>
                    <li><a href="javascript:void(0)">مخرج 17 الصناعية القديمة</a></li>
                    <li><a href="javascript:void(0)">مخرج 18 بجوار الفرع الرئيسي</a></li>
                    <li><a href="javascript:void(0)">مخرج 17 حي السلي</a></li>
                    <li><a href="javascript:void(0)">مخرج 7 حي النرجس</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2023 Skb Center Co. All Rights Reserved.

                        <br>Design By: <a href="https://www.facebook.com/mohamedelsayed300/" target="_blank" title="Mohamed El Sayed">Mohamed El Sayed</a></p>
                    <ul>
                        <li><a href="https://www.facebook.com/skbmwsa"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/skbmw"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.snapchat.com/bmwcenter"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="{{ route('admin.dashboard') }}">تسجيل الدخول</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
