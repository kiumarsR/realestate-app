@extends('layout.app')

<div id="wrapper" class="wrapper clearfix">
@section('header')
@include('layout.pages-header')
@endsection
@section('page.head.title', 'آگهی های من')
@include('layout.pages-title')


@section('content')
<!-- Document Wrapper
	============================================= -->



    <!-- #my properties
============================================= -->
    <section id="my-properties" class="my-properties properties-list">
        <div class="container">
            <div class="row">
                @include('layout.pages-sidebar')
                <!-- .col-md-4 -->
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <!-- .property-item #1 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/4.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Sale</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">House in Sheffleld Ave</a></h5>
                                <p class="property--location">2003 Sheffield Ave, Anderson, IN 46011</p>
                                <p class="property--price">$115,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul>
                                    <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">2500 sq ft</span></li>

                                </ul>
                                <a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #2 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/5.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Rent</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">2750 House in Urban St.</a></h5>
                                <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                                <p class="property--price">$1,550<span class="time">month</span></p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul>
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">1390 sq ft</span></li>
                                    <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #3 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/6.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Rent</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">Apartment For Rent</a></h5>
                                <p class="property--location">1609 N Richmond St, Chicago, IL 60647</p>
                                <p class="property--price">$900<span class="time">month</span></p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul>
                                    <li><span class="feature">Beds:</span><span class="feature-num">1</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">500 sq ft</span></li>
                                    <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #4 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/7.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Rent</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">House in Miami Town</a></h5>
                                <p class="property--location">415 E North Water, Miami 60611</p>
                                <p class="property--price">$210,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul>
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">1370 sq ft</span></li>
                                    <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-edit"></i>Edit</a></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->
                    <div class="mt-50 text--center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- .pagination end -->
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #my properties  end -->
    @endsection
    
    <!-- #wrapper end -->
</div>

    @section('footer')
    @include('layout.footer')
    @endsection
