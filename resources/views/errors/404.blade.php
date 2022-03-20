@extends('layout.app')
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    @section('header-transparent', 'header-transparent')
@section('header')
    @include('layout.pages-header')
@endsection

    <!--404
=============================================-->
    <section class="page-404 text-center bg-overlay bg-overlay-dark3">
        <div class="bg-section"><img src="{{asset('assets/images/background/bg-1.jpg')}}" alt="background"></div>
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <img src="{{asset('assets/images/404/404-icon.png')}}" alt="icon">
                        <h3>خطا! صفحه مورد نظر پیدا نشد.</h3>
                        <p><a href="#">بازگشت به صفحه اصلی</a></p>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .cotainer end -->
        </div>
        <!-- .cotainer end -->
    </section>
    <!-- .page-404 end -->

</div>
<!-- #wrapper end -->

<!-- Footer Scripts