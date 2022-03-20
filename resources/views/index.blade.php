@extends('layout.app')
@section('title', 'صفحه اصلی')

@section('header')
@include('layout.hero-header')
@endsection

@section('content')
<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="slider--content">
                    <div class="text-center">
                        <h1>ملک مورد علاقه خود را پیدا کنید</h1>
                    </div>
                    <form class="mb-0">
                        <div class="form-box search-properties">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-location" id="select-location">
                                                <option>انتخاب استان</option>
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
                                                <option>انتخاب کاربری</option>
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
                                                <option>نوع آگهی</option>
                                                <option>فروش</option>
                                                <option>اجاره</option>
                                                <option>رهن</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <input type="submit" value="جستجو" name="submit" class="btn btn--primary btn--block">
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-beds" id="select-beds">
                                                <option>تعداد اتاق</option>
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
                                                <option>نوع سرویس</option>
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
                                    <a href="#" class="less--options">بیشتر</a>
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->
                    </form>
                </div>
            </div>
            <!-- .container  end -->
        </div>
        <!-- .slider-text end -->
    </div>
    <div class=" slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
        <!-- Slide #1 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="{{asset('assets/images/slider/slide-bg/3.jpg')}}" alt="background">
            </div>
        </div>

    </div>
</section>
<!-- #property-single-slider end -->

<!-- properties-carousel
============================================= -->
<section id="properties-carousel" class="properties-carousel pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">جدیدترین آگهی املاک</h2>
                    <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                    <!-- .property-item #1 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/3.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">فروش</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">خانه ویلایی در تهران.</a></h5>
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
                    <!-- .property item end -->

                    <!-- .property-item #2 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/11.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Sale</span>
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
                                <img src="{{asset('assets/images/properties/5.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">اجاره</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title">2750 House in Urban St.</h5>
                                <p class="property--location">2750 Urban Street Dr, Anderson, IN 46011</p>
                                <p class="property--price">$1,550<span class="time">month</span></p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">1390 sq ft</span></li>
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
                                <img src="{{asset('assets/images/properties/4.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Sale</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">House in Kent Street</a></h5>
                                <p class="property--location">127 Kent Street, Sydney, NSW 2000</p>
                                <p class="property--price"><span>میلیارد تومان</span>۲</p>
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
                    <!-- .property item end -->

                    <!-- .property-item #5 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/2.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Rent</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">Villa in Oglesby Ave</a></h5>
                                <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                <p class="property--price">$130,000<span class="time">month</span></p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">Beds:</span><span class="feature-num">4</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">3</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">800 sq ft</span></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                    <!-- .property-item #6 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/3.jpg')}}" alt="property image" class="img-responsive">
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
                                    <li><span class="feature">Beds:</span><span class="feature-num">2</span></li>
                                    <li><span class="feature">Baths:</span><span class="feature-num">1</span></li>
                                    <li><span class="feature">Area:</span><span class="feature-num">200 sq ft</span></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->

                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-carousel  end  -->

<!-- Feature
============================================= -->
<section id="feature" class="feature feature-1 text-center bg-white pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">مراحل ساده</h2>
                    <p class="heading--desc">خانه یا دفتر کار خود را در سه مرحله ساده پیدا کنید</p>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- feature Panel #1 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{asset('assets/images/features/icons/5.png')}}" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>جستجو میان آگهی ها</h3>
                        <p>.جستجو میان آگهی های فروش یا اجاره خانه، دفتر کار، مغازه متناسب با شرایط دلخواه شما </p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- feature Panel #2 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{asset('assets/images/features/icons/6.png')}}" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>انتخاب آگهی مورد علاقه</h3>
                        <p>تماس با فروشنده یا موجر آگهی های پسند شده برای بازدید از ملک و توافق نهایی</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- feature Panel #3 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{asset('assets/images/features/icons/7.png')}}" alt="icon img">
                    </div>
                    <div class="feature--content">
                        <h3>با کلید خود وارد شوید</h3>
                        <p>تبریک! شما اکنون می توانید با کلید خودتان وارد شوید</p>
                    </div>
                </div>
                <!-- .feature-panel end -->
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- .feature end -->
<!-- city-property
============================================= -->
<section id="city-property" class="city-property text-center pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">Property By City</h2>
                    <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- City #1 -->
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="#">
                            <img src="{{asset('assets/images/properties/city/1.jpg')}}" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">تهران</h5>
                                    <p class="property--numbers">16 آگهی</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
            <!-- City #2 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="#">
                            <img src="{{asset('assets/images/properties/city/2.jpg')}}" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">اصفهان</h5>
                                    <p class="property--numbers">14 آگهی</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">

            <!-- City #3 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="#">
                            <img src="{{asset('assets/images/properties/city/3.jpg')}}" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">شیراز</h5>
                                    <p class="property--numbers">18 آگهی</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
            <!-- City #4 -->
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="#">
                            <img src="{{asset('assets/images/properties/city/4.jpg')}}" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">تبریز</h5>
                                    <p class="property--numbers">10 آگهی</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- .city-property end -->
@endsection
<!-- Document Wrapper
============================================= -->
<!-- <div id="wrapper" class="wrapper clearfix"> -->






<!-- Footer #1
    ============================================= -->
@section('footer')
@include('layout.footer')
@endsection
<!-- </div> -->
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->