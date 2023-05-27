<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="{{ asset('storage/logo_original.jpeg') }}" width="200">
                    </div>
                    <ul>
                        <li><a href="javascript:void(0)">طريق عثمان بن عفان، النرجس، الرياض 13323، المملكة العربية السعودية</a></li>
                        <li><a href="javascript:void(0)">aboryanautoaccessories@gmail.com</a></li>
                        <li><a href="javascript:void(0)">+966532228180</a></li>
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
                    <li><a href="https://www.facebook.com/rayanlegendauto">facebook</a></li>
                    <li><a href="https://www.instagram.com/Legend_alrayyan">instagram</a></li>
                    <li><a href="https://www.snapchat.com/add/rg053222">snapChat</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>الفروع</h4>
                <ul>
                    <li><a href="#">الفرع_1</a></li>
                    <li><a href="#">الفرع_2</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2022 Rayan Legend Co., Ltd. All Rights Reserved.

                        <br>Design By: <a href="https://www.facebook.com/mohamedelsayed300/" target="_blank" title="Mohamed El Sayed">Mohamed El Sayed</a></p>
                    <ul>
                        <li><a href="https://www.facebook.com/rayanlegendauto"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/Legend_alrayyan"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.snapchat.com/add/rg053222">snapChat</a></li>
                        <li><a target="_blank" href="{{ route('admin.dashboard') }}">تسجيل الدخول</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
