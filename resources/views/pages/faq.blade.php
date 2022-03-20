@extends('layout.app')
@section('title', 'سوالات متداول')

<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    @section('header-transparent', 'header-transparent')
    @section('header')
    @include('layout.pages-header')
    @endsection

    <!-- Page Title #1
            ============================================ -->
    @section('page.head.title', 'سوالات متداول')
    @include('layout.pages-title')
    <!-- #page-title end -->
    @section('content')

    <!-- Accordion #1
        ============================================= -->
    <section id="accordion1" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading text-center mb-75">
                        <h2 class="heading--title">سوالات پرتکرار</h2>
                        <p class="heading--desc">Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-7">
                    <div class="accordion accordion-1" id="accordion01">
                        <!-- Panel 01 -->
                        <div class="panel">
                            <div class="panel--heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">What is a real estate broker?</a>
                            </div>
                            <div id="collapse01-1" class="panel--body panel-collapse collapse in">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit cras sollicitudin, tellus vitae condy egestas. Libero varius ligula a id nec libero amet.</p>
                            </div>
                        </div>

                        <!-- Panel 01 -->
                        <div class="panel">
                            <div class="panel--heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">Why should I use a real estate salesperson?</a>
                            </div>
                            <div id="collapse01-2" class="panel--body panel-collapse collapse">
                                Trends, vision dominates a lot of our subconscious interpretation of the world around us. On top it, pleasing images create a better user experience. Rounding up a
                                bunch of specific designs.Trends, vision dominates a lot of our subconscious interpretation of the world around us.
                            </div>
                        </div>

                        <!-- Panel 03 -->
                        <div class="panel">
                            <div class="panel--heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-3">What if my offer is rejected?</a>
                            </div>
                            <div id="collapse01-3" class="panel--body panel-collapse collapse">
                                Trends, vision dominates a lot of our subconscious interpretation of the world around us. On top it, pleasing images create a better user experience. Rounding up a
                                bunch of specific designs.Trends, vision dominates a lot of our subconscious interpretation of the world around us.
                            </div>
                        </div>

                        <!-- Panel 04 -->
                        <div class="panel">
                            <div class="panel--heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-4">Should I buy or continue to rent?</a>
                            </div>
                            <div id="collapse01-4" class="panel--body panel-collapse collapse">
                                Trends, vision dominates a lot of our subconscious interpretation of the world around us. On top it, pleasing images create a better user experience. Rounding up a
                                bunch of specific designs.Trends, vision dominates a lot of our subconscious interpretation of the world around us.
                            </div>
                        </div>
                    </div>
                    <!-- End .Accordion-->
                </div>
                <!-- .col-md-7 end -->
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <img src="{{asset('assets/images/accordion/1.jpg')}}" alt="img">
                </div>
                <!-- .col-md-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #wrapper end -->
</div>
@endsection
<!-- Footer #1
        ============================================= -->
@section('footer')
@include('layout.footer')
@endsection