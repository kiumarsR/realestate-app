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
                                                <select name="select-province" id="select-province">
                                                    <option>انتخاب استان</option>
                                                    @foreach ($provinces as $province)
                                                    <option value="{{$province->id}}">{{$province->name}}</option>
                                                    @endforeach
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
                                        <button type="submit" value="" name="submit" class="btn btn--primary btn--block mb-30">جستجو</button>
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
                            @foreach ($realestates as $realestate)
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <!-- .property-item #1 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <a href="property-single-gallery.html">
                                            <img src="assets/images/properties/1.jpg" alt="property image" class="img-responsive">
                                        </a>
                                        <span class="property--status">{{$realestate->ad_type}}</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="property-single-gallery.html">{{$realestate->title}}</a></h5>
                                            <p class="property--location">{{$realestate->full_address}}</p>
                                            <p class="property--price">{{$realestate->sale_price}}</p>
                                        </div>
                                        <!-- .property-info end -->
                                        <div class="property--features">
                                            <ul class="list-unstyled mb-0">
                                                <li><span class="feature">Beds:</span><span class="feature-num">{{$realestate->total_bedrooms}}</span></li>
                                                <li><span class="feature">Baths:</span><span class="feature-num">{{$realestate->total_bathrooms}}</span></li>
                                                <li><span class="feature">Area:</span><span class="feature-num">{{$realestate->area}}</span></li>
                                            </ul>
                                        </div>
                                        <!-- .property-features end -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- .property item end -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
                            <ul class="pagination">
                                {{$realestates->links()}}
                                <!-- <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                    </a>
                                </li> -->
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