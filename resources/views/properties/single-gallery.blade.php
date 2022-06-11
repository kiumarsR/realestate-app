@extends('layout.app')
@section('title', $realestate->title)
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    @section('header-transparent', 'header-transparent')
    @section('header')
    @include('layout.pages-header')
    @endsection

    <!-- Page Title #1
============================================ -->
    @section('page.head.title', 'تک محصول')
    @include('layout.pages-title')
    <!-- #page-title end -->

    <!-- property single gallery
============================================= -->
    <section id="property-single-gallery" class="property-single-gallery">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="property-single-gallery-info">
                        <div class="property--info clearfix">
                            <div class="pull-left">
                                <h5 class="property--title">{{$realestate->title}}</h5>
                                <p class="property--location"><i class="fa fa-map-marker"></i>{{$realestate->full_address}}</p>
                            </div>
                            <div class="pull-right">
                                <span class="property--status">{{$realestate->the_ad_type}}</span>
                                <p class="property--price">{{$realestate->the_sale_price}}<span class="time">/تومان</span></p>
                            </div>
                        </div>
                        <!-- .property-info end -->
                        <div class="property--meta clearfix">
                            <div class="pull-left">
                                <ul class="list-unstyled list-inline mb-0">
                                    <li>
                                        Property ID:<span class="value">{{$realestate->id}}</span>
                                    </li>
                                    <li>
                                        Add to favorites:<span class="value"> <i class="fa fa-heart-o"></i></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <div class="property--meta-share">
                                    <span class="share--title">اشتراک گذاری</span>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                                <!-- .property-meta-share end -->
                            </div>
                        </div>
                        <!-- .property-info end -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="property-single-carousel inner-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="heading">
                                    <h2 class="heading--title">تصاویر</h2>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="property-single-carousel-content">
                                    <div class="carousel carousel-thumbs slider-navs" data-slide="1" data-slide-res="1" data-autoplay="true" data-thumbs="true" data-nav="false" data-dots="false"
                                        data-space="30" data-loop="true" data-speed="800" data-slider-id="1">
                                        <img src="{{asset('assets/images/properties/slider/1.jpg')}}" alt="Property Image">
                                        <img src="{{asset('assets/images/properties/slider/2.jpg')}}" alt="Property Image">
                                        <img src="{{asset('assets/images/properties/slider/3.jpg')}}" alt="Property Image">
                                        <img src="{{asset('assets/images/properties/slider/4.jpg')}}" alt="Property Image">
                                        <img src="{{asset('assets/images/properties/slider/5.jpg')}}" alt="Property Image">
                                    </div>
                                    <!-- .carousel end -->
                                    <div class="owl-thumbs thumbs-bg" data-slider-id="1">
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('assets/images/properties/slider/thumbs/1.jpg')}}" alt="Property Image thumb">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('assets/images/properties/slider/thumbs/2.jpg')}}" alt="Property Image thumb">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('assets/images/properties/slider/thumbs/3.jpg')}}" alt="Property Image thumb">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('assets/images/properties/slider/thumbs/4.jpg')}}" alt="Property Image thumb">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{asset('assets/images/properties/slider/thumbs/5.jpg')}}" alt="Property Image thumb">
                                        </button>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .property-single-desc end -->
                    <div class="property-single-desc inner-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="heading">
                                    <h2 class="heading--title">توضیحات</h2>
                                </div>
                            </div>
                            <!-- feature-panel #1 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <!-- <div class="feature--img">
                                        <img src="{{asset('assets/images/property-single/features/1.png')}}" alt="icon">
                                    </div> -->
                                    <div class="feature--content">
                                        <h5>متراژ:</h5>
                                        <p>{{$realestate->area}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #2 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>تعداد اتاق خواب:</h5>
                                        <p>{{$realestate->total_bedrooms}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #3 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>سرویس بهداشتی:</h5>
                                        <p>{{$realestate->the_wc_type}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #4 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>نوع کاربری:</h5>
                                        <p>{{$realestate->the_tobu}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #5 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>طبقه:</h5>
                                        <p>{{$realestate->apartment_floor}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #6 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>نما :</h5>
                                        <p>{{$realestate->the_front}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #7 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>کابینت :</h5>
                                        <p>{{$realestate->the_kitchen_cabinets}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #8 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>کفپوش :</h5>
                                        <p>{{$realestate->the_fct}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #9 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5> سن بنا:</h5>
                                        <p>{{$realestate->building_age}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #10 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>جهت بنا :</h5>
                                        <p>{{$realestate->the_direction}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #11 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>سیستم سرمایش:</h5>
                                        <p>{{$realestate->the_cooling}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #12 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--content">
                                        <h5>سیستم گرمایش:</h5>
                                        <p>{{$realestate->the_heating}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="property--details">
                                    <p>{{$realestate->description}}</p>
                                </div>
                                <!-- .property-details end -->
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .property-single-desc end -->


                    <div class="property-single-features inner-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="heading">
                                    <h2 class="heading--title">امکانات</h2>
                                </div>
                            </div>
                            @foreach ($realestate->facilities->chunk(4) as $facilities_item)
                            @foreach ($facilities_item as $facility)
                            <!-- feature-item #1 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>{{$facility->facility_name}}</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            @endforeach
                            @endforeach

                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .property-single-features end -->

                    <div class="property-single-location inner-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="heading">
                                    <h2 class="heading--title">آدرس</h2>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <ul class="list-unstyled mb-20">
                                    <li class="w-100"><span>آدرس:</span>{{$realestate->full_address}}</li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <ul class="list-unstyled mb-20">
                                    <li><span>شهر:</span>{{$realestate->city['name']}}</li>
                                    <li><span>استان:</span>{{$realestate->province['name']}}</li>
                                    @isset($realestate->user->phone_number)
                                    <li><span>شماره تماس:</span>{{$realestate->user->phone_number}}
                                        @endisset ()
                                </ul>
                            </div>

                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .property-single-location end -->

                    <div class="property-single-reviews inner-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="heading">
                                    <h2 class="heading--title">نظرات 3</h2>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <ul class="property-review">
                                    <li class="review-comment">
                                        <div class="avatar">R</div>
                                        <div class="comment">
                                            <h6>Ryan Printz</h6>
                                            <div class="date">Feb 12, 2018</div>
                                            <div class="property-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                        </div>
                                    </li>
                                    <!-- comment end -->
                                    <li class="review-comment">
                                        <div class="avatar">S</div>
                                        <div class="comment">
                                            <h6>Steve Martin</h6>
                                            <div class="date">Jan 16, 2018</div>
                                            <div class="property-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                        </div>
                                    </li>
                                    <!-- comment end -->
                                    <li class="review-comment">
                                        <div class="avatar">N</div>
                                        <div class="comment">
                                            <h6>Nicole Smith</h6>
                                            <div class="date">Nov 25, 2017</div>
                                            <div class="property-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed eiusmod tempor incididun ut labore dolor magna aliqua enim minim veniam, quis nostrud.</p>
                                        </div>
                                    </li>
                                    <!-- comment end -->
                                </ul>
                                <!-- .comments-list end -->
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .property-single-reviews end -->

                    <div class="property-single-leave-review inner-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="heading">
                                    <h2 class="heading--title">نظر دهید</h2>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <form id="post-comment" class="mb-0">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="review-name">نام*</label>
                                                <input type="text" class="form-control" name="review-name" id="review-name" required>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label for="review-email">ایمیل*</label>
                                                <input type="email" class="form-control" name="review-email" id="review-email" required>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->
                                        <!-- .col-md-4 end -->
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label>رتبه*</label>
                                                <div class="property-rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col-md-4 end -->

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="review-comment">متن*</label>
                                                <textarea class="form-control" id="review-comment" rows="2" required></textarea>
                                            </div>
                                        </div>
                                        <!-- .col-md-12 -->
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <button type="submit" class="btn btn--primary">ارسال</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- .col-md-12 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .property-single-leave-review end -->
                </div>
                <!-- .col-md-8 -->
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <!-- widget property agent
=============================-->

                    <!-- widget request
=============================-->
                    <div class="widget widget-request">
                        <div class="widget--title">
                            <h5>درخواست بازدید</h5>
                        </div>
                        <div class="widget--content">
                            <form class="mb-0">
                                <div class="form-group">
                                    <label for="contact-name">نام*</label>
                                    <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="contact-email">آدرس ایمیل*</label>
                                    <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="contact-phone">شماره تماس*</label>
                                    <input type="text" class="form-control" name="contact-phone" id="contact-phone">
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="message">پیام</label>
                                    <textarea class="form-control" name="contact-message" id="message" rows="2" placeholder="(اختیاری)"></textarea>
                                </div>
                                <!-- .form-group end -->
                                <button type="submit" value="Send Request" name="submit" class="btn btn--primary btn--block">ارسال درخواست</button>

                            </form>
                        </div>
                    </div>
                    <!-- . widget request end -->

                    <!-- widget featured property
=============================-->
                    <div class="widget widget-featured-property">
                        <div class="widget--title">
                            <h5>جدید ترین ها</h5>
                        </div>
                        <div class="widget--content">
                            <div class="carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true"
                                data-speed="800">
                                @foreach ($realestates as $realestate)

                                <!-- .property-item #1 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <img src="{{asset('assets/images/properties/13.jpg')}}" alt="property image" class="img-responsive">
                                        <span class="property--status">{{$realestate->the_ad_type}}</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="{{route('single-property', ['property' => $realestate->id])}}">{{$realestate->title}}</a></h5>
                                            <p class="property--location">{{$realestate->full_address}}</p>
                                            <p class="property--price">{{$realestate->the_sale_price}}<span class="time">تومان</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                                <!-- .property item end -->
                                @endforeach
                            </div>
                            <!-- .carousel end -->
                        </div>
                    </div>
                    <!-- . widget featured property end -->
                </div>
                <!-- .col-md-4 -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </section>
    <!-- #property-single end -->


    <!-- properties-carousel
============================================= -->
    <section id="properties-carousel" class="properties-carousel pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-2  mb-70">
                        <h2 class="heading--title pt-10">آگهی های مشابه</h2>
                    </div>
                    <!-- .heading-title end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                        <!-- .property-items -->
                        @foreach ($similars as $similar)
                        <div class="property-item">
                            <div class="property--img">
                                <a href="#">
                                    <img src="{{asset('assets/images/properties/3.jpg')}}" alt="property image" class="img-responsive">
                                    <span class="property--status">{{$similar->the_ad_type}}</span>
                                </a>
                            </div>
                            <div class="property--content">
                                <div class="property--info">
                                    <h5 class="property--title"><a href="#">{{$similar->title}}</a></h5>
                                    <p class="property--location">{{$similar->province['name']}}</p>
                                    <p class="property--price">{{$similar->the_sale_price}}<span class="time">تومان</span></p>
                                </div>
                                <!-- .property-info end -->
                                <div class="property--features">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="feature">اتاق خواب:</span><span class="feature-num">{{$similar->total_bedrooms}}</span></li>
                                        <li><span class="feature">سرویس بهداشتی:</span><span class="feature-num">{{$similar->the_wc_type}}</span></li>
                                        <li><span class="feature">متراژ:</span><span class="feature-num">{{$similar->area}}</span></li>
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

    <!-- Footer #1
============================================= -->
    @section('footer')
    @include('layout.footer')
    @endsection
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->