@extends('layout.app')

<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">

    @section('header-light-class', 'header-light')
    @include('layout.pages-header')

    @section('content')
        
    
    <!-- map
============================================ -->
    <section id="map" class="hero-map mt-0 pt-0 pb-0">
        <!-- .container end -->
        <div class="search-properties">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <form class="mb-0 ">
                            <div class="form-box ">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="select-location" id="select-location">
                                                    <option>همه استان ها</option>
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Florida</option>
                                                    <option>Mississippi</option>
                                                    <option>Oregon</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="select-type" id="select-type">
                                                    <option>Any Type</option>
                                                    <option>Apartment</option>
                                                    <option>House</option>
                                                    <option>Office</option>
                                                    <option>Villa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="select-status" id="select-status">
                                                    <option>همه آگهی ها</option>
                                                    <option>For Rent</option>
                                                    <option>For Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <input type="submit" value="Search" name="submit" class="btn btn--primary btn--block mb-30">
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                        <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="select-beds" id="select-beds">
                                                    <option>Beds</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                        <div class="form-group">
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select name="select-baths" id="select-baths">
                                                    <option>Baths</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-6 option-hide">
                                        <div class="filter mb-30">
                                            <p>
                                                <label for="amount">بازه قیمتی: </label>
                                                <input id="amount" type="text" class="amount" readonly>
                                            </p>
                                            <div class="slider-range"></div>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <a href="#" class="less--options">فیلتر ها</a>
                                    </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .form-box end -->
                        </form>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
    </section>
    <!-- #map end -->

    <!-- properties-grid
============================================= -->
    <section id="properties-grid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!-- widget property type
=============================-->
                    <div class="widget widget-property">
                        <div class="widget--title">
                            <h5>نوع ملک</h5>
                        </div>
                        <div class="widget--content">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">آپارتمان <span>(13)</span></a>
                                </li>
                                <li>
                                    <a href="#">ویلایی <span>(8)</span></a>
                                </li>
                                <li>
                                    <a href="#">دفتر کار <span>(3)</span></a>
                                </li>
                                <li>
                                    <a href="#">تجاری <span>(4)</span></a>
                                </li>
                                <li>
                                    <a href="#">زمین <span>(2)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- . widget property type end -->

                    <!-- widget property status
=============================-->
                    <div class="widget widget-property">
                        <div class="widget--title">
                            <h5>نوع آگهی</h5>
                        </div>
                        <div class="widget--content">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">فروش <span>(25)</span></a>
                                </li>
                                <li>
                                    <a href="#">اجاره <span>(32)</span></a>
                                </li>
                                <li>
                                    <a href="#">رهن <span>(32)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- . widget property status end -->


                    <!-- widget property city
=============================-->
                    <div class="widget widget-property">
                        <div class="widget--title">
                            <h5>بر اساس استان</h5>
                        </div>
                        <div class="widget--content">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">تهران <span>(5)</span></a>
                                </li>
                                <li>
                                    <a href="#">مشهد <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#">تبریز <span>(4)</span></a>
                                </li>
                                <li>
                                    <a href="#">شیراز <span>(7)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- . widget property city end -->
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="properties-filter clearfix">
                                <div class="select--box pull-left">
                                    <label>مرتب سازی:</label>
                                    <i class="fa fa-angle-up"></i>
                                    <i class="fa fa-angle-down"></i>
                                    <select>
                                        <option selected="" value="Default">پیش فرض</option>
                                        <option value="Larger">جدید ترین</option>
                                        <option value="Larger">قدیمی ترین</option>
                                        <option value="Larger">فوری</option>
                                        <option value="Small">گرانترین</option>
                                        <option value="Medium">ارزان ترین</option>
                                    </select>
                                </div>
                                <!-- .select-box -->
                                <div class="view--type pull-right">
                                    <a id="switch-list" href="#" class=""><i class="fa fa-th-list"></i></a>
                                    <a id="switch-grid" href="#" class="active"><i class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="properties properties-grid">
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <!-- .property-item #1 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/1.jpg" alt="property image" class="img-responsive">
                                        </a>
                                        <span class="property--status">For Sale</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">House in Kent Street</a></h5>
                                            <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                            <p class="property--price">$130,000</p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                                <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                                <li><span class="feature">Area:</span><span class="feature-num">587 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #2 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/6.jpg" alt="property image" class="img-responsive">
                                        </a>
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">Apartment For Rent</a></h5>
                                            <p class="property--location">1609 N Richmond St, Chicago, IL 60647</p>
                                            <p class="property--price">$900<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span class="feature-num">1</span></li>
                                                <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                                <li><span class="feature">Area:</span><span class="feature-num">500 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #3 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/5.jpg" alt="property image" class="img-responsive">
                                        </a>
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">2750 House in Urban St.</a></h5>
                                            <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                                            <p class="property--price">$1.550<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                                <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                                <li><span class="feature">Area:</span><span class="feature-num">1390 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #4 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/12.jpg" alt="property image" class="img-responsive">
                                        </a>
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">Modern Office For Rent</a></h5>
                                            <p class="property--location">2003 Sheffield Ave, Anderson, IN 46011</p>
                                            <p class="property--price">$530<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span class="feature-num">0</span></li>
                                                <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                                <li><span class="feature">Area:</span><span class="feature-num">150 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #5 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/3.jpg" alt="property image" class="img-responsive">
                                        </a>
                                        <span class="property--status">For Sale</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">Apartment in Long St.</a></h5>
                                            <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                            <p class="property--price">$70,000</p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                                <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                                <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->

                            <!-- .property-item #6 -->
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/7.jpg" alt="property image" class="img-responsive">
                                        </a>
                                        <span class="property--status">For Sale</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title">House in Miami Town</h5>
                                            <p class="property--location">415 E North Water, Miami 60611</p>
                                            <p class="property--price">$210,000</p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                                <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                                <li><span class="feature">Area:</span><span class="feature-num">1370 sq ft</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            <!-- .property item end -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
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
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <!-- #properties-grid  end  -->
    @endsection
    <!-- Footer #1
============================================= -->
@section('footer')
    @include('layout.footer')
@endsection
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->