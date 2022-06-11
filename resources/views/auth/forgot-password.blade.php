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
            <div class="logo mb-5">
                <a class="logo" href="{{route('welcome')}}">
                    <img class="logo-dark pt-25" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="Land Logo">
                </a>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <!-- <h3>Get more things done with Loggin platform.</h3> -->
                        <p>لطفا پست الکترونیک خود را برای تغییر گذرواژه وارد کنید.</p>
                        <!-- <div class="page-links">
                            <a href="{{route('login')}}" class="active">ورود</a><a href="{{route('register')}}">عضویت</a>
                        </div> -->
                        <form action="{{route('password.email')}}" method="POST">
                            @csrf
                            @method('post')
                            <input class="form-control" type="email" name="email" placeholder="پست الترونیک" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">ارسال</button>
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