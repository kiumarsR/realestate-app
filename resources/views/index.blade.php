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
                    <form class="mb-0" action="{{route ('properties')}}" method="GET">
                        <div class=" form-box ">
                            <div class=" row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select_province" id="select_province">
                                                <option value="">انتخاب استان</option>
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
                                            <select name="tobu" id="tobu">
                                                // tubo = Type of building use in db
                                                <option value="">انتخاب کاربری</option>
                                                <option value="home">مسکونی</option>
                                                <option value="land">زمین/کلنگی</option>
                                                <option value="business_office">اداری/تجاری</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="ad_type" id="ad_type">
                                                <option value="">نوع آگهی</option>
                                                <option value="sale">فروش</option>
                                                <option value="mortage">رهن</option>
                                                <option value="rent">اجاره</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <button type="submit" name="submit" class="btn btn--primary btn--block mb-30">جستجو</button>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="total_bedrooms" id="total_bedrooms">
                                                <option value="">تعداد اتاق</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3 option-hide">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select_city" id="select_city">
                                                <option value="">انتخاب شهر</option>
                                                @foreach ($provinces as $province)
                                                @foreach ($province->cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                @endforeach
                                                @endforeach
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
                    @foreach ($realestates as $realestate)
                    <!-- .property-item #1 -->
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/3.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">{{$realestate->the_ad_type}}</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="#">{{$realestate->title}}</a></h5>
                                <p class="property--location">{{$realestate->full_address}}</p>
                                <p class="property--price">{{$realestate->sale_price}}</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul class="list-unstyled mb-0">
                                    <li><span class="feature">اتاق خواب:</span><span class="feature-num">{{$realestate->total_bedrooms}}</span></li>
                                    <li><span class="feature">سرویس بهداشتی:</span><span class="feature-num">{{$realestate->the_wc_type}}</span></li>
                                    <li><span class="feature">متراژ:</span><span class="feature-num">{{$realestate->area}}</span></li>
                                </ul>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->
                    @endforeach
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
                    <h2 class="heading--title">آگهی املاک به تفکیک مرکز استان ها</h2>
                    <p class="heading--desc">از میان تمام آگهی های مربوط به هر استان آگهی ملک مناسب خود را پیدا کینید`</p>
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
                        <a href="{{route('tehran-properties')}}">
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
                        <a href="{{route('isfahan-properties')}}">
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
                        <a href="{{route('shiraz-properties')}}">
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
                        <a href="{{route('tabriz-properties')}}">
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
</div>
<!-- #wrapper end -->






<!-- Footer #1
    ============================================= -->
@section('footer')
@include('layout.footer')
@endsection

<!-- Footer Scripts
============================================= -->