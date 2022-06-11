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
                    @foreach ($my_properties as $my_property)
                        
                    <div class="property-item">
                        <div class="property--img">
                            <a href="#">
                                <img src="{{asset('assets/images/properties/4.jpg')}}" alt="property image" class="img-responsive">
                                <span class="property--status">For Sale</span>
                            </a>
                        </div>
                        <div class="property--content">
                            <div class="property--info">
                                <h5 class="property--title"><a href="{{route('single-property', ['property' => $my_property->id])}}">{{$my_property->title}}</a></h5>
                                <p class="property--location">{{$my_property->full_address}}</p>
                                <p class="property--price">{{$my_property->sale_price}}</p>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--features">
                                <ul>
                                    <li><span class="feature">اتاق خواب:</span><span class="feature-num">{{$my_property->total_bedrooms}}</span></li>
                                    <li><span class="feature"> سرویس بهداشتی:</span><span class="feature-num">{{$my_property->the_wc_type}}</span></li>
                                    <li><span class="feature">متراژ:</span><span class="feature-num">{{$my_property->area}}</span></li>
                                    
                                </ul>
                                <a href="#" class="edit--btn"><i class="fa fa-edit"></i>ویرایش</a>
                            </div>
                            <!-- .property-features end -->
                        </div>
                    </div>
                    <!-- .property item end -->
                    @endforeach
                    
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