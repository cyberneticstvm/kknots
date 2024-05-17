@extends("base")
@section("content")
<section>
    <div class="str">
        <div class="ban-inn ab-ban">
            <div class="container">
                <div class="row">
                    <div class="hom-ban">
                        <div class="ban-tit">
                            <span><i class="no1">#1</i> Wedding Website</span>
                            <h1>About us</h1>
                            <p>Most Trusted and premium Matrimony Service in India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- START -->
<section>
    <div class="ab-sec2">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <div>
                            <img src="{{ asset('/assets/images/icon/prize.png') }}" alt="">
                            <h4>Genuine profiles</h4>
                            <p>The most trusted wedding matrimony brand</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('/assets/images/icon/trust.png') }}" alt="">
                            <h4>Most trusted</h4>
                            <p>The most trusted wedding matrimony brand</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('/assets/images/icon/rings.png') }}" alt="">
                            <h4>2000+ weddings</h4>
                            <p>The most trusted wedding matrimony brand</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- START -->
<section>
    <div class="ab-wel">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ab-wel-lhs">
                        <span class="ab-wel-3"></span>
                        <img src="{{ asset('/assets/images/about/2.svg') }}" alt="" class="ab-wel-1">
                        <img src="{{ asset('/assets/images/about/1.svg') }}" alt="" class="ab-wel-2">
                        <span class="ab-wel-4"></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ab-wel-rhs">
                        <div class="ab-wel-tit">
                            <h2>Welcome to <em>Kerala Knots</em></h2>
                            <p>At Kerala Knots, we believe in the power of meaningful connections. Our mission is to help you find a life partner who not only shares your interests and values but also complements your personality and lifestyle. Whether you are looking for a love marriage or an arranged marriage, we are here to make your journey towards finding your soulmate smooth and successful.</p>
                            <p> <a href="{{ route('register') }}">Click here to</a> Start you matrimony service now.</p>
                        </div>
                        <div class="ab-wel-tit-1">
                            <p>Ready to find your perfect match? Sign up today and start your journey towards a happy and fulfilling marriage. Whether you're looking for love or seeking an ideal life partner, Kerala Knots is here to help you every step of the way.</p>
                        </div>
                        <div class="ab-wel-tit-2">
                            <ul>
                                <li>
                                    <div>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h4>Enquiry <a href="tel:+919778292355"><em>+91 9778292355</em></a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h4>Get Support <a href="mailto:help@keralaknots.com"><em>help@keralaknots.com</em></a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection