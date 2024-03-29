@extends('layout.app')
@section('title', 'درباره ما')
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">

    @section('header-transparent', 'header-transparent')
    @section('header')
    @include('layout.pages-header')
    @endsection

    <!-- Page Title #1
            ============================================ -->
    @section('page.head.title', 'درباره تیم ما')
    @include('layout.pages-title')


    <!-- #page-title end -->

    <!-- about #1
============================================= -->
    <section id="about" class="about bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="about--img"><img class="img-responsive" src="assets/images/about/1.jpg" alt="about img"></div>
                </div>
                <!-- .col-md-5 -->
                <div class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1">
                    <div class="heading heading-3">
                        <h2 class="heading--title">We Provide Lovable Experiment in the Real Estate Field</h2>
                    </div>
                    <!-- .heading-title end -->
                    <div class="about--panel">
                        <h3>Our Vision</h3>
                        <p>Propin ipsum dolor sit amet, consectetur adipisicing elited eiusmod tempore incidid ut labor et dolore magna aliquaut enim ad minim veniam.</p>
                    </div>
                    <!-- .about-panel end -->
                    <div class="about--panel">
                        <h3>Our Goal</h3>
                        <p>Duis aute viele irure dolor in reprer volupta velite esse cilume dolore eu fugiat nulla pariatur. Excepteur sint occae cupidat non proident.</p>
                    </div>
                    <!-- .about-panel end -->
                </div>
                <!-- .col-md-6 -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <!-- #about end -->

    <!-- Feature
============================================= -->
    <section id="feature" class="feature feature-left pt-90 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-2 text-center mb-70">
                        <h2 class="heading--title">خدماتی که ما ارائه میدهیم</h2>
                        <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                    </div>
                    <!-- .heading-title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <!-- feature Panel #1 -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <img src="assets/images/features/icons/1.png" alt="icon img">
                        </div>
                        <div class="feature--content">
                            <h3>Presenting Your Property</h3>
                            <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat
                                conquat.</p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-6 end -->
                <!-- feature Panel #2 -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <img src="assets/images/features/icons/2.png" alt="icon img">
                        </div>
                        <div class="feature--content">
                            <h3>Renting or Selling</h3>
                            <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat
                                conquat.</p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-6 end -->
                <!-- feature Panel #3 -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <img src="assets/images/features/icons/3.png" alt="icon img">
                        </div>
                        <div class="feature--content">
                            <h3>Property Exchange</h3>
                            <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat
                                conquat.</p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-6 end -->
                <!-- feature Panel #4 -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <img src="assets/images/features/icons/4.png" alt="icon img">
                        </div>
                        <div class="feature--content">
                            <h3>Buying a Property</h3>
                            <p>Duis sed odio sit amet nibh vtate cursusa sit amet mauris morbi accum ipsum velit nam nec tellus viele a odio tincidet auctor ornare odio. Sede non mauris vitae erat
                                conquat.</p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- .feature end -->
</div>
<!-- #wrapper end -->
<!-- Footer #1
============================================= -->
@section('footer')
@include('layout.footer')
@endsection