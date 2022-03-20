@extends('layout.app')
<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
    @section('header-transparent', 'header-light')

    @section('header')
    @include('layout.pages-header')
    @endsection>

    <!-- Page Title #1
============================================ -->
    @include('layout.pages-title')
    <!-- #page-title end -->

    <!-- Contact #1
============================================= -->
    <section id="contact" class="contact contact-1 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="heading heading-2 mb-55">
                        <h2 class="heading--title">با ما در تماس باشید</h2>
                    </div>
                    <div class="contact-panel">
                        <h3>آدرس</h3>
                        <p>86 Petersham town, Wardll street Australia PA 6550.</p>
                    </div>
                    <!-- .contact-panel -->
                    <div class="contact-panel">
                        <h3>شماره تماس:</h3>
                        <p>(04) 491 570 110</p>
                        <p>+61 525 240 310</p>
                    </div>
                    <!-- .contact-panel -->
                    <div class="contact-panel">
                        <h3>پست الکترونیکی:</h3>
                        <p>contact@land.com</p>
                    </div>
                    <!-- .contact-panel -->
                </div>
                <!-- .col-md-3 end -->

                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1 bg-white p-30 bg-white">
                    <div id="googleMap" style="width:100%;height:370px;"></div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
        </div>
    </section>
    <!-- #contact  end -->

    <!-- Contact #2
============================================= -->
    <section id="contact2" class="contact contact-2 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-2 mb-50">
                        <h2 class="heading--title">ارتباط مستقیم</h2>
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <form class="mb-0">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="contact-name">نام*</label>
                                    <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="contact-email">پست الکترونیک*</label>
                                    <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="phone-number">شماره موبایل</label>
                                    <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="(اختیاری)">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="message">پیام*</label>
                                    <textarea class="form-control" name="contact-message" id="message" rows="2" required></textarea>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" value="Send Message" name="submit" class="btn btn--primary">ارسال پیام</button>
                            </div>
                            <!-- .col-md-12 -->
                        </div>
                    </form>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
    </section>
    <!-- #contact2  end -->



    @section('footer')
    @include('layout.footer')
    @endsection
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
<script src="assets/js/plugins/jquery.gmap.min.js"></script>
<script>
    $('#googleMap').gMap({
            address: "121 King St,Melbourne, Australia",
            zoom: 12,
            maptype: 'ROADMAP',
            markers: [{
                address: "Melbourne, Australia",
                maptype: 'ROADMAP',
                icon: {
                    image: "assets/images/gmap/marker1.png",
                    iconsize: [52, 75],
                    iconanchor: [52, 75]
                }
            }]
        });

</script>
<script src="assets/js/map-custom.js"></script>
</body>

</html>