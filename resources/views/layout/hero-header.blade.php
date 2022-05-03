<header id="navbar-spy" class="header header-1 header-transparent header-fixed">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="{{route('welcome')}}">
                    <img class="logo-light pt-25" src="{{asset('assets/images/logo/logo-light.png')}}" alt="Land Logo">
                    <img class="logo-dark pt-25" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="Land Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-center navbar-left">
                    <!-- Home Menu -->
                    <li class="active">
                        <a href="{{Route('welcome')}}" class="menu-item">صفحه اصلی</a>
                    </li>

                    <!-- Profile Menu-->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">ناحیه کاربری</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('profile')}}">پروفایل</a></li>
                            <li><a href="{{route('my-properties')}}">آگهی های من</a></li>
                            <li><a href="{{route('favourite-properties')}}">نشان شده</a></li>
                            <li><a href="{{route('add-properties')}}">ثبت ایگان آگهی</a></li>
                        </ul>
                    </li>

                    <!-- Properties Menu-->
                    <li>
                        <a href="{{route('properties')}}" class="menu-item">املاک</a>
                    </li>
                    <!-- Contact Menu-->
                    <li><a href="{{route('contact')}}">تماس</a></li>
                </ul>
                <!-- Module Signup  -->
                <div class="module module-login pull-left">
                    @if (Route::has('login'))
                    @auth
                    <a class="btn-popup" href="{{route('logout')}}">خروج</a>
                    @else
                    <a class="btn-popup" href="{{route('login')}}">ورود</a>
                    @endauth
                    @endif
                </div>
                <!-- Module Consultation  -->
                <div class="module module-property pull-left">
                    <a href="{{route('add-property')}}" target="_blank" class="btn"> ثبت رایگان آگهی <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>
<!-- Hero Search
    ============================================= -->