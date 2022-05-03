@extends('layout.app')
@section('title', 'ویرایش اطلاعات')
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    @section('header')
    @include('layout.pages-header')
    @endsection
    @section('page.head.title', 'ویرایش اطلاعات')
    @include('layout.pages-title')



    @section('content')
    <!-- #user-profile
============================================= -->
    <section id="user-profile" class="user-profile">
        <div class="container">
            <div class="row">
                @include('layout.pages-sidebar')
                <!-- .col-md-4 -->
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <form class="mb-0" action="{{route('user.update', ['user' => auth()->user()->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-box">
                            <h4 class="form--title">مشخصات</h4>
                            <div class="form-group">
                                <label for="first-name">نام</label>
                                <input type="text" class="form-control" name="first-name" id="first-name" value="{{ Auth::user()->first_name }}">
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="last-name">نام خانوادگی</label>
                                <input type="text" class="form-control" name="last-name" id="last-name" value="{{ Auth::user()->last_name}}">
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="email-address">پست الکترونیکی</label>
                                <input type="email" class="form-control" name="email-address" id="email-address" value="{{ Auth::user()->email }}">
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="phone-number">شماره موبایل</label>
                                <input type="text" class="form-control" name="phone-number" id="phone-number" value="{{ Auth::user()->phone_number}}">
                            </div>
                            <!-- .form-group end -->
                        </div>
                        <!-- .form-box end -->
                        <div class="form-box">
                            <h4 class="form--title">تغییر گذرواژه
                            </h4>
                            <div class="form-group">
                                <label for="password">گذرواژه</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <!-- .form-group end -->
                            <div class="form-group">
                                <label for="confirm-password">تکرار گذرواژه</label>
                                <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                            </div>
                            <!-- .form-group end -->
                        </div>
                        <!-- .form-box end -->
                        <button type="submit" name="submit" class="btn btn--primary" value="Save Edits">ذخیره تغییرات</button>
                    </form>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
    </section>
    <!-- #user-profile  end -->
    @endsection

</div>
<!-- #wrapper end -->
@section('footer')
@include('layout.footer')
@endsection
<!-- Footer Scripts
============================================= -->