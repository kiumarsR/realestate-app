@extends('layout.app')
@section('title', 'تک محصول')
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
                                <h5 class="property--title">1220 Petersham Town</h5>
                                <p class="property--location"><i class="fa fa-map-marker"></i>Petersham town, Wardll St - Australia PA 6550</p>
                            </div>
                            <div class="pull-right">
                                <span class="property--status">For Sale</span>
                                <p class="property--price">$130,000</p>
                            </div>
                        </div>
                        <!-- .property-info end -->
                        <div class="property--meta clearfix">
                            <div class="pull-left">
                                <ul class="list-unstyled list-inline mb-0">
                                    <li>
                                        Property ID:<span class="value">5331</span>
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
                                    <div class="feature--img">
                                        <img src="{{asset('assets/images/property-single/features/1.png')}}" alt="icon">
                                    </div>
                                    <div class="feature--content">
                                        <h5>متراژ:</h5>
                                        <p>1270 sq ft</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #2 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--img">
                                        <img src="{{asset('assets/images/property-single/features/2.png')}}" alt="icon">
                                    </div>
                                    <div class="feature--content">
                                        <h5>تعداد اتاق خواب:</h5>
                                        <p>4 Bedrooms</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #3 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--img">
                                        <img src="{{asset('assets/images/property-single/features/3.png')}}" alt="icon">
                                    </div>
                                    <div class="feature--content">
                                        <h5>سرویس بهداشتی:</h5>
                                        <p>2 Bathrooms</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #4 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--img">
                                        <img src="{{asset('assets/images/property-single/features/4.png')}}" alt="icon">
                                    </div>
                                    <div class="feature--content">
                                        <h5>Rooms:</h5>
                                        <p>6 Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #5 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--img">
                                        <img src="{{asset('assets/images/property-single/features/5.png')}}" alt="icon">
                                    </div>
                                    <div class="feature--content">
                                        <h5>طبقه:</h5>
                                        <p>3 Floors</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <!-- feature-panel #6 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-panel">
                                    <div class="feature--img">
                                        <img src="{{asset('assets/images/property-single/features/6.png')}}" alt="icon">
                                    </div>
                                    <div class="feature--content">
                                        <h5>تعداد پارکینگ:</h5>
                                        <p>2 Garages</p>
                                    </div>
                                </div>
                            </div>
                            <!-- feature-panel end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="property--details">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
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
                            <!-- feature-item #1 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Center Cooling</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #2 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Balcony</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #3 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Pet Friendly</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #4 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Fire Alarm</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #5 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Modern Kitchen</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #6 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Storage</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #7 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Heating</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #8 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Pool</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #9 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Laundry</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #10 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Gym</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #11 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Elevator</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
                            <!-- feature-item #12 -->
                            <div class="col-xs-6 col-sm-4 col-md-4">
                                <div class="feature-item">
                                    <p>Dish Washer</p>
                                </div>
                            </div>
                            <!-- feature-item end -->
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
                                    <li><span>آدرس:</span>1220 Petersham Town</li>
                                    <li><span>شهر:</span>Sydney</li>
                                    <li><span>استان:</span>تهران</li>
                                    <li><span>شماره تماس:</span>091216xxx96</li>
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
                                <button type="submit" value="Send Request" name="submit" class="btn btn--primary btn--block">ارسال درخواستّ</button>

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
                                <!-- .property-item #1 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <img src="{{asset('assets/images/properties/13.jpg')}}" alt="property image" class="img-responsive">
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title">House in Chicago</h5>
                                            <p class="property--location">1445 N State Pkwy, Chicago, IL 60610</p>
                                            <p class="property--price">$1200<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                                <!-- .property item end -->
                                <!-- .property-item #2 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <img src="{{asset('assets/images/properties/2.jpg')}}" alt="property image" class="img-responsive">
                                        <span class="property--status">For Rent</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="#">Villa in Oglesby Ave</a></h5>
                                            <p class="property--location">1035 Oglesby Ave, Chicago, IL 60617</p>
                                            <p class="property--price">$130,000<span class="time">month</span></p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                                <!-- .property item end -->
                                <!-- .property-item #3 -->
                                <div class="property-item">
                                    <div class="property--img">
                                        <img src="{{asset('assets/images/properties/3.jpg')}}" alt="property image" class="img-responsive">
                                        <span class="property--status">For Sale</span>
                                    </div>
                                    <div class="property--content">
                                        <div class="property--info">
                                            <h5 class="property--title"><a href="#">Apartment in Long St.</a></h5>
                                            <p class="property--location">34 Long St, Jersey City, NJ 07305</p>
                                            <p class="property--price">$70,000</p>
                                        </div>
                                        <!-- .property-info end -->
                                    </div>
                                </div>
                                <!-- .property item end -->
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
                        <!-- .property-item #1 -->
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
                                    <h5 class="property--title"><a href="#">Villa in Chicago IL</a></h5>
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

    <!-- Footer #1
============================================= -->
    @section('footer')
    @include('layout.footer')
    @endsection
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->