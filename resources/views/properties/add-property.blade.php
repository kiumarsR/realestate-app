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

                    <form class="mb-0">
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
                                        <textarea class="form-control" name="property-description" id="property-description" rows="2"></textarea>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="select-type">نوع ملک</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="select-type">
                                                <option>ویلایی</option>
                                                <option>آپارتمان</option>
                                                <option>اداری</option>
                                                <option>تجاری</option>
                                                <option>کلنگی</option>
                                                <option>زمین/باغ</option>
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
                                            <select id="select-status">
                                                <option>فروش</option>
                                                <option>اجاره</option>
                                                <option>رهن</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="province">استان</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select id="province">
                                                <option>تهران</option>
                                                <option>شیراز</option>
                                                <option>تبریز</option>
                                                <option>خراسان رضوی</option>
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
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6 و بیشتر</option>
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
                                            <select id="bathrooms" name="bathrooms">
                                                <option>ایرانی</option>
                                                <option>فرنگی</option>
                                                <option>هر دو</option>
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
                                            <select id="floors" name="floors">
                                                <option>ایرانی</option>
                                                <option>فرنگی</option>
                                                <option>هر دو</option>
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
                                            <select id="cabinet" name="cabinet">
                                                <option>ام دی اف</option>
                                                <option>چوبی</option>
                                                <option>آهنی</option>
                                                <option>چوب و آهن</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Area">متراژ</label>
                                        <input type="text" class="form-control" name="Area" id="Area" placeholder="sq ft">
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Size">Size</label>
                                        <input type="text" class="form-control" name="Size" id="Size" placeholder="sq ft">
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Sale-Rent-Price">Sale or Rent Price*</label>
                                        <input type="text" class="form-control" name="Sale-Rent-Price" id="Sale-Rent-Price" required>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Before-Price-Label">Before Price Label</label>
                                        <input type="text" class="form-control" name="Before-Price-Label" id="Before-Price-Label" placeholder="ex: start from">
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="After-Price-Label">After Price Label</label>
                                        <input type="text" class="form-control" name="After-Price-Label" id="After-Price-Label" placeholder="ex: monthly">
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Property-ID">Property ID*</label>
                                        <input type="text" class="form-control" name="Property-ID" id="Property-ID">
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="Video-URL">Video URL</label>
                                        <input type="text" class="form-control" name="Video-URL" id="Video-URL" placeholder="Youtube, Vimeo, Dailymotion, etc..">
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
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Center Cooling</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Balcony</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Pet Friendly</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Barbeque</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Fire Alarm</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Modern Kitchen</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Storage</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Dryer</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Heating</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Pool</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Laundry</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Sauna</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Gym</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Elevator</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Dish Washer</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>Emergency Exit</span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                </div>
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
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter your property address" required>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label for="select-country">استان*</label>
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="province">
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
                                        <label for="state">state</label>
                                        <input type="text" class="form-control" name="state" id="state">
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
<script src="assets/js/dropzone.js"></script>
@endpush