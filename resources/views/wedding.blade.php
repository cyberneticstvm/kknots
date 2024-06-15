@extends("base")
@section("content")
<!-- START -->
<section>
    <div class="wedd m-tp">
        <div class="container">
            <div class="row">
                <div class="ban-wedd">
                    <h2>Anand <span>& Gowri</span></h2>
                    <p>Thousands of peoples have found their life partner at Wedding Matrimony!</p>
                    <div class="wedd-info">
                        <ul>
                            <li><i class="fa fa-calendar-o" aria-hidden="true"></i><span>{{ date('d, M Y') }} | 9:00 AM</span>
                            </li>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#!">Direction</a></li>
                        </ul>
                    </div>
                    <div class="wedd-deco">
                        <div class="pho-frame pho-frame2">
                            <img src="{{ asset('assets/images/kknots/img1.svg') }}" alt="">
                            <!--<span>Michael Jessica</span>-->
                        </div>
                        <div class="pho-frame pho-frame1">
                            <img src="{{ asset('assets/images/kknots/img1.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="wedd-frame">
                        <img src="{{ asset('assets/images/kknots/couple.svg') }}" alt="">
                    </div>
                    <div class="wedd-ban-leaf">
                        <span class="wedd-leaf-1"></span>
                        <span class="wedd-leaf-2"></span>
                        <span class="wedd-leaf-3"></span>
                        <span class="wedd-leaf-4"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
<!-- START -->
<section class="mb-5">
    <div class="foot-box">
        <div class="container">
            <div class="row">
                <div class="inn">
                    <ul>
                        <li>
                            <div class="foot-inn">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <div>
                                    <span>Phone</span>
                                    <h5>+91 9778292355</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="foot-inn">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <div>
                                    <span>Reservation</span>
                                    <h5>Count: 1,000+</h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="foot-inn">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div>
                                    <span>City</span>
                                    <h5>Cochin</h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection