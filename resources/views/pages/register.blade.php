<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/form-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/form-theme.css')}}">
</head>

<body>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="logo">
                <a class="logo" href="{{route('welcome')}}">
                    <img class="logo-dark pt-25" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="Land Logo">
                </a>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <!-- <p>Access to the most powerfull tool in the entire design and web industry.</p> -->
                        <div class="page-links">
                            <a href="{{route('login')}}">ورود</a><a class="active" href="{{route('register')}}">عضویت</a>
                        </div>
                        <form action="{{route('store')}}" method="POST">
                            @csrf
                            <div>
                                <input class="form-control" type="text" name="phone_number" placeholder="شماره موبایل">
                                <span class="mb-10">
                                    {{$errors->first('phone_number')}}
                                </span>
                            </div>
                            <div>
                                <input class="form-control" type="email" name="email" placeholder="ایمیل">
                                <span class="mb-10">
                                    {{$errors->first('email')}}
                                </span>
                            </div>
                            <div>
                                <input class="form-control" type="text" name="first_name" placeholder="نام">
                                <span class="mb-10">
                                    {{$errors->first('first_name')}}
                                </span>
                            </div>
                            <div>
                                <input class="form-control" type="text" name="last_name" placeholder="نام خانوادگی">
                                <span class="mb-10">
                                    {{$errors->first('last_name')}}
                                </span>
                            </div>
                            <div>
                                <input class="form-control mt-10" type="password" name="password" placeholder="گذرواژه">
                                <span class="mb-10">
                                    {{$errors->first('password')}}
                                </span>
                            </div>
                            <div>
                                <input class="form-control mt-10" type="password" name="password_confirmation" placeholder="تکرار گذرواژه">
                                <span class="mb-10">
                                    {{$errors->first('password')}}
                                </span>
                            </div>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">عضویت</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('assets/js/jquery-2.2.4.mi.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asstts/js/login.js')}}"></script>
</body>

</html>