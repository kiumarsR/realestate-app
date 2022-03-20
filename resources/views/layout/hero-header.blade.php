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
                    <img class="logo-light" src="{{asset('assets/images/logo/logo-light.png')}}" alt="Land Logo">
                    <img class="logo-dark" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="Land Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-center navbar-left">
                    <!-- Home Menu -->
                    <li class="active">
                        <a href="{{Route('welcome')}}" class="menu-item">صفحه اصلی</a>
                    </li>
                    <!-- li end -->

                    <!-- Pages Menu-->
                    <!-- <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">agents</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="agents.html">All Agents</a>
                                    </li>
                                    <li>
                                        <a href="agent-profile.html">agent profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">agencies</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="agency-list.html">all agencies</a>
                                    </li>
                                    <li>
                                        <a href="agency-profile.html">agency profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">blog</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="blog.html">blog Grid</a>
                                    </li>
                                    <li>
                                        <a href="blog-sidebar-right.html">blog Grid Right </a>
                                    </li>
                                    <li>
                                        <a href="blog-sidebar-left.html">blog Grid Left </a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html">blog single</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="page-about.html">page about</a></li>
                            <li><a href="page-contact.html">page contact</a></li>
                            <li><a href="page-faq.html">page FAQ</a></li>
                            <li><a href="page-404.html">page 404</a></li>
                        </ul>
                    </li> -->
                    <!-- li end -->

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
                    <!-- li end -->

                    <!-- Properties Menu-->
                    <li class="">
                        <a href="{{route('properties')}}" class="menu-item">املاک</a>
                        <!-- <ul class="">
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Properties grid</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="properties-grid.html">properties grid</a>
                                    </li>
                                    <li>
                                        <a href="properties-grid-split.html">properties grid split</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">properties list</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="properties-list.html">properties list</a>
                                    </li>
                                    <li>
                                        <a href="properties-list-split.html">properties list split</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">properties single</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="property-single-gallery.html">single gallery</a>
                                    </li>
                                    <li>
                                        <a href="property-single-slider.html">single slider</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <!-- li end -->

                    <li><a href="{{route('contact')}}">تماس</a></li>
                </ul>
                <!-- Module Signup  -->
                <div class="module module-login pull-left">
                    <a class="btn-popup" data-toggle="modal" data-target="#signupModule">ورود</a>
                    <div class="modal register-login-modal fade" tabindex="-1" role="dialog" id="signupModule">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#login" data-toggle="tab">ورود</a>
                                            </li>
                                            <li><a href="#signup" data-toggle="tab">عضویت</a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="login">
                                                <div class="signup-form-container text-center">
                                                    <form class="mb-0">
                                                        <!-- <a href="#" class="btn btn--facebook btn--block"><i class="fa fa-facebook-square"></i>Login with Facebook</a>
                                                            <div class="or-text">
                                                                <span>or</span>
                                                            </div> -->
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="login-email" id="login-email" placeholder="شماره موبایل">
                                                        </div>
                                                        <!-- .form-group end -->
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="login-password" id="login-password" placeholder="گذرواژه">
                                                        </div>
                                                        <!-- .form-group end -->
                                                        <div class="input-checkbox">
                                                            <label class="label-checkbox">
                                                                <span>Remember Me</span>
                                                                <input type="checkbox">
                                                                <span class="check-indicator"></span>
                                                            </label>
                                                        </div>
                                                        <button class="btn btn--primary btn--block" type="submit" value="Sign In">عضویت</button>
                                                        <a href="#" class="forget-password">گذرواژه خود را فراموش کرده اید؟</a>
                                                    </form>
                                                    <!-- form  end -->
                                                </div>
                                                <!-- .signup-form end -->
                                            </div>
                                            <div class="tab-pane" id="signup">
                                                <form class="mb-0">
                                                    <!-- <a href="#" class="btn btn--facebook btn--block"><i class="fa fa-facebook-square"></i>Register with Facebook</a>
                                                        <div class="or-text">
                                                            <span>or</span>
                                                        </div> -->
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="firts_name" id="first_name" placeholder="نام">
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="نام خانوادگی">
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="register-email" id="register-email" placeholder="نام کاربری(شماره موبایل)">
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="register-password" id="register-password" placeholder="گذرواژه">
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="input-checkbox">
                                                        <label class="label-checkbox">
                                                            <input type="checkbox">
                                                            <span class="check-indicator"></span>
                                                            <span>با تمامی <a href="#">قوانین و شرایط </a>سایت موافقم.</span>
                                                        </label>
                                                    </div>
                                                    <button class="btn btn--primary btn--block" type="submit" value="Register">عضویت</button>
                                                </form>
                                                <!-- form  end -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
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