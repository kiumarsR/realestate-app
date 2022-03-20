@extends('layout.app')
@section('title', 'نشان شده')

@section('header')
@include('layout.pages-header')
@endsection


    <!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    <!-- Page Title #1
============================================ -->
    @section('page.head.title', 'نشان شده')
    @include('layout.pages-title')
    <!-- #page-title end -->
    <!-- #favourite properties
============================================= -->
    <section id="my-properties" class="my-properties properties-list">
        <div class="container">
            <div class="row">
                @include('layout.pages-sidebar')
                <!-- .col-md-4 -->
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <!-- .property-item #1 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/8.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Sale</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">House in Kent Street</a></h5>
                                <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                <p class="property--price">$130,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">3</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                    <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-times"></i>Remove</a></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #2 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/9.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Rent</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title">Villa in Oglesby Ave.</h5>
                                <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                <p class="property--price">$1,800<span class="time">month</span></p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">3</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">800 sq ft</span></li>
                                    <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-times"></i>Remove</a></li>
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
                                <img src="{{asset('assets/images/properties/10.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Sale</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                <p class="property--price">$70,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">1</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">500 sq ft</span></li>
                                    <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-times"></i>Remove</a></li>
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
                                <img src="{{asset('assets/images/properties/11.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Rent</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title">Villa in Chicago IL</h5>
                                <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                <p class="property--price">$235,000</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">3</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">1120 sq ft</span></li>
                                    <li class="pull-right"><a href="#" class="edit--btn"><i class="fa fa-times"></i>Remove</a></li>
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
    <!-- #favourite properties  end -->
</div>
<!-- #wrapper end -->


@section('footer')
    @include('layout.footer')
@endsection