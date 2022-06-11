@extends('layout.app')
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    @section('header')
    @include('layout.pages-header')
    @endsection

    <!-- Page Title #1
============================================ -->
    @section('page.head.title', 'ثبت آگهی')
    @include('layout.pages-title')
    <!-- #page-title end -->

    <!-- #Add Property
============================================= -->
    <section id="add-property" class="add-property">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <form class="mb-0" action="{{route('properties.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h4 class="form--title">مشخصات ملک</h4>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="property-title">عنوان آگهی*</label>
                                        <input type="text" class="form-control" name="property-title" id="property-title" required>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="property-description">توضیحات آگهی*</label>
                                        <textarea class="form-control" name="property-description" id="property-description" rows="2" required></textarea>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="tobu-type">نوع ملک</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="tobu" id="tobu" required>
                                                <option>انتخاب کنید</option>
                                                <option value="villa">ویلایی</option>
                                                <option value="apartment">آپارتمان</option>
                                                <option value="office">اداری</option>
                                                <option value="business">تجاری</option>
                                                <option value="old">کلنگی</option>
                                                <option value="garden/land">زمین/باغ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="select-status">نوع کاربری</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="ad_type">
                                                <option value="">انتخاب کنید</option>
                                                <option value="sale">مسکونی</option>
                                                <option value="rent">تجاری/اداری</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="select-status">نوع آگهی</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="ad_type">
                                                <option value="">انتخاب کنید</option>
                                                <option value="sale">فروش</option>
                                                <option value="rent">اجاره</option>
                                                <option value="mortage">رهن</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Sale-Rent-Price">قیمت فروش یا اجاره*</label>
                                        <input type="text" class="form-control" name="sale_rent_price" id="Sale-Rent-Price" placeholder="تومان" required>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="province">تعداد طبقات ساختمان</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="total_floors" id="total_floors">
                                                <option>انتخاب کنید</option>
                                                <option value="1">۱</option>
                                                <option value="2">۲</option>
                                                <option value="3">۳</option>
                                                <option value="4">۴</option>
                                                <option value="5">۵</option>
                                                <option value="6">۶</option>
                                                <option value="7">۷</option>
                                                <option value="8">۸</option>
                                                <option value="9">۹</option>
                                                <option value="10">۱۰</option>
                                                <option value="11">۱۱</option>
                                                <option value="12">۱۲</option>
                                                <option value="13">۱۳</option>
                                                <option value="14">۱۴</option>
                                                <option value="15">۱۵</option>
                                                <option value="16">۱۶</option>
                                                <option value="17">۱۷</option>
                                                <option value="18">۱۸</option>
                                                <option value="19">۱۹</option>
                                                <option value="20">۲۰</option>
                                                <option value="21">۲۱</option>
                                                <option value="22">۲۲</option>
                                                <option value="23">۲۳</option>
                                                <option value="24">۲۴</option>
                                                <option value="25">۲۵</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="noaf">تعداد واحد در هر طبقه</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="noaf" name="noaf">
                                                <option>انتخاب کنید</option>
                                                <option value="1">۱</option>
                                                <option value="2">۲</option>
                                                <option value="3">۳</option>
                                                <option value="4">۴</option>
                                                <option value="5">۵</option>
                                                <option value="6">۶</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="apartment_floor">طبقه واحد</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="apartment_floor" name="apartment_floor">
                                                <option>انتخاب کنید</option>
                                                <option value="1">۱</option>
                                                <option value="2">۲</option>
                                                <option value="3">۳</option>
                                                <option value="4">۴</option>
                                                <option value="5">۵</option>
                                                <option value="6">۶</option>
                                                <option value="7">۷</option>
                                                <option value="8">۸</option>
                                                <option value="9">۹</option>
                                                <option value="10">۱۰</option>
                                                <option value="11">۱۱</option>
                                                <option value="12">۱۲</option>
                                                <option value="13">۱۳</option>
                                                <option value="14">۱۴</option>
                                                <option value="15">۱۵</option>
                                                <option value="16">۱۶</option>
                                                <option value="17">۱۷</option>
                                                <option value="18">۱۸</option>
                                                <option value="19">۱۹</option>
                                                <option value="20">۲۰</option>
                                                <option value="21">۲۱</option>
                                                <option value="22">۲۲</option>
                                                <option value="23">۲۳</option>
                                                <option value="24">۲۴</option>
                                                <option value="25">۲۵</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="bedrooms">تعداد اتاق خواب</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="bedrooms" name="bedrooms">
                                                <option>انتخاب کنید</option>
                                                <option value="1">۱</option>
                                                <option value="2">۲</option>
                                                <option value="3">۳</option>
                                                <option value="4">۴</option>
                                                <option value="5">۵</option>
                                                <option value="6">۶ و بیشتر</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="bathrooms">نوع سرویس بهداشتی</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="bathrooms" name="bathrooms_type">
                                                <option>انتخاب کنید</option>
                                                <option value="persian">ایرانی</option>
                                                <option value="foreign">فرنگی</option>
                                                <option value="both">هر دو</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="floors">نوع کفپوش</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="fct" name="fct">
                                                <option>انتخاب کنید</option>
                                                <option value="Laminated">لمینت</option>
                                                <option value="Parquet">پارکت</option>
                                                <option value="Mosaic">موزاییک</option>
                                                <option value="Cement">سیمان</option>
                                                <option value="ceramic">سرامیک</option>
                                                <option value="flagstone">سنگ</option>
                                                <option value="tile">کاشی</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="cabinet">کابینت</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="cabinet" name="kitchen_cabinets">
                                                <option>انتخاب کنید</option>
                                                <option value="mdf">ام دی اف</option>
                                                <option value="wooden">چوبی</option>
                                                <option value="metal">آهنی</option>
                                                <option value="metal_wooden">چوب و آهن</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Area">متراژ</label>
                                        <input type="text" class="form-control" name="area" id="Area" placeholder="متر مربع">
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="building_age">سن بنا</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="building_age" name="building_age">
                                                <option>انتخاب کنید</option>
                                                <option value="1">۱</option>
                                                <option value="2">۲</option>
                                                <option value="3">۳</option>
                                                <option value="4">۴</option>
                                                <option value="5">۵</option>
                                                <option value="6">۶</option>
                                                <option value="7">۷</option>
                                                <option value="8">۸</option>
                                                <option value="9">۹</option>
                                                <option value="10">۱۰</option>
                                                <option value="11">۱۱</option>
                                                <option value="12">۱۲</option>
                                                <option value="13">۱۳</option>
                                                <option value="14">۱۴</option>
                                                <option value="15">۱۵</option>
                                                <option value="16">۱۶</option>
                                                <option value="17">۱۷</option>
                                                <option value="18">۱۸</option>
                                                <option value="19">۱۹</option>
                                                <option value="20">۲۰</option>
                                                <option value="21">۲۱</option>
                                                <option value="22">۲۲</option>
                                                <option value="23">۲۳</option>
                                                <option value="24">۲۴</option>
                                                <option value="25">۲۵</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="building_direction">جهت ساختمان</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="building_direction" name="building_direction">
                                                <option>انتخاب کنید</option>
                                                <option value="north">شمالی</option>
                                                <option value="south">جنوبی</option>
                                                <option value="east">شرقی</option>
                                                <option value="west">غربی</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="frontage_type">نما ساختمان</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="frontage_type" name="frontage_type">
                                                <option>انتخاب کنید</option>
                                                <option value="stone">سنگی</option>
                                                <option value="brick">آجری</option>
                                                <option value="cement">سیمانی</option>
                                                <option value="composite">کامپوزیتی</option>
                                                <option value="biramics ">بایرامیکس</option>
                                                <option value="glass ">شیشه ای</option>
                                                <option value="wooden ">چوبی</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="heating_system">سیستم گرمایش</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="heating_system" name="heating_system">
                                                <option>انتخاب کنید</option>
                                                <option value="heater">بخاری</option>
                                                <option value="boiler-room">موتورخانه</option>
                                                <option value="combi">پکیج</option>
                                                <option value="fireplace">شومینه</option>
                                                <option value="under-floor-heating">گرمایش از کف</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="cooling_system">سیستم سرمایش</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="cooling_system" name="cooling_system">
                                                <option>انتخاب کنید</option>
                                                <option value="evaporative-cooler">کولر آبی</option>
                                                <option value="air-conditioner-room">کولر گازی</option>
                                                <option value="duct-split">داکت اسپیلت</option>
                                                <option value="chiller">چیلر</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Video-URL">سند</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="dst" name="dsrt">
                                                <option>انتخاب کنید</option>
                                                <option value="mdf">تک برگ</option>
                                                <option value="metal">قولنامه ای</option>
                                                <option value="metal_wooden">منگوله دار</option>
                                                <option value="metal_wooden">طرح لویزان</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="dst">نوع سند</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="dst" name="dst">
                                                <option>انتخاب کنید</option>
                                                <option value="personal">شخصی</option>
                                                <option value="contract">قولنامه ای</option>
                                                <option value="imam">فرمان امام</option>
                                                <option value="orginization">ارگانی</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->
                        <div class="form-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h4 class="form--title">امکانات ملک</h4>
                                </div>
                                <!-- .col-md-12 end -->
                                @foreach ($facilities->chunk(4) as $facility_item)
                                @foreach ($facility_item as $item)
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>{{$item->facility_name}}</span>
                                            <input name="facilities[]" type="checkbox" value="{{$item->id}}">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                @endforeach
                                <!-- .col-md-3 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->

                        <div class="form-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h4 class="form--title">تصاویر آگهی</h4>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-4 col-md-12">
                                    <div id="dZUpload" class="dropzone"></div>
                                </div>
                                <!-- .col-md-12 end -->

                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->

                        <div class="form-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h4 class="form--title">آدرس ملک</h4>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="address">آدرس*</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="آدرس ملک مورد نظر را وارد کنید" required>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="select-country">استان*</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="province">
                                                <option value="">-- انتخاب استان --</option>
                                                @foreach ($provinces as $province)
                                                <option value="{{$province->id}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="city">شهر*</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="city">
                                                <option value="">-- انتخاب شهر --</option>
                                                @foreach ($provinces as $province)
                                                @foreach ($province->cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="housing">وضعیت سکونت</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="housing" name="housing">
                                                <option>-- انتخاب کنید --</option>
                                                <option value="evacuated">تخلیه</option>
                                                <option value="owner">در دست مالک</option>
                                                <option value="tenant">در دست مستاجر</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Zip/Postal-code">Zip/Postal Code</label>
                                        <input type="text" class="form-control" name="Zip/Postal-code" id="Zip/Postal-code">
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="district">محله</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="district" name="district">
                                                <option value="">-- انتخاب محله --</option>
                                                @foreach ($provinces as $province)
                                                @foreach ($province->districts as $district)
                                                <option value="{{$district->id}}">{{$district->name}}</option>
                                                @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->
                        <button type="submit" value="Save Edits" name="submit" class="btn btn--primary">ثبت آگهی</button>
                    </form>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
    </section>
    <!-- #social-profile  end -->

    <!-- Footer #1
============================================= -->
</div>
@section('footer')
@include('layout.footer')
@endsection
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
@push('footer.scripts')
<script src="{{asset('assets/js/plugins/dropzone.js')}}"></script>
@endpush