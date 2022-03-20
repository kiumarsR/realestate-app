<header id="navbar-spy" class="header header-1  @yield('header-transparent') @yield('header-light-class') header-fixed">
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
                    <!-- li end -->
                    <!-- Profile Menu-->
                    <li class="has-dropdown">
                        <a href="{{route('profile')}}" data-toggle="dropdown" class="dropdown-toggle menu-item">ناحیه کاربری</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('profile')}}">ناحیه کاربری</a></li>
                            <li><a href="{{route('my-properties')}}">آگهی های من</a></li>
                            <li><a href="{{route('favourite-properties')}}">نشان شده</a></li>
                            <li><a href="{{route('add-properties')}}">ثبت آگهی</a></li>
                        </ul>
                    </li>
                    <!-- li end -->

                    <!-- Properties Menu-->
                    <li class="">
                        <a href="{{route('properties')}}" class="menu-item">املاک</a>
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
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="login-email" id="login-email" placeholder="Email Address">
                                                        </div>
                                                        <!-- .form-group end -->
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" name="login-password" id="login-password" placeholder="Password">
                                                        </div>
                                                        <!-- .form-group end -->
                                                        <div class="input-checkbox">
                                                            <label class="label-checkbox">
                                                                <span>Remember Me</span>
                                                                <input type="checkbox">
                                                                <span class="check-indicator"></span>
                                                            </label>
                                                        </div>
                                                        <input type="submit" class="btn btn--primary btn--block" value="Sign In">
                                                        <a href="#" class="forget-password">Forget your password?</a>
                                                    </form>
                                                    <!-- form  end -->
                                                </div>
                                                <!-- .signup-form end -->
                                            </div>
                                            <div class="tab-pane" id="signup">
                                                <form class="mb-0">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="full-name" id="full-name" placeholder="Full Name">
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="register-email" id="register-email" placeholder="Email Address">
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" name="register-password" id="register-password" placeholder="Password">
                                                    </div>
                                                    <!-- .form-group end -->
                                                    <div class="input-checkbox">
                                                        <label class="label-checkbox">
                                                            <span>I agree with all <a href="#">Terms & Conditions</a></span>
                                                            <input type="checkbox">
                                                            <span class="check-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <input type="submit" class="btn btn--primary btn--block" value="Register">
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
                    <a href="{{route('add-property')}}" target="_blank" class="btn"><i class="fa fa-plus"></i> ثبت رایگان آگهی</a>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

</header>