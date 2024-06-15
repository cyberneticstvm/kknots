@extends("base")
@section("content")
<!-- BANNER & SEARCH -->
<section>
    <div class="str">
        <div class="hom-head">
            <div class="container">
                <div class="row">
                    <div class="hom-ban">
                        <div class="ban-tit">
                            <span><i class="no1">#1</i> Matrimony</span>
                            <h1>Find your<br><b>Right Match</b> here</h1>
                            <p>Most trusted Matrimony Brand in Kerala.</p>
                        </div>
                        <div class="ban-search chosenini">
                            <form method="post" action="{{ route('search.profile') }}">
                                @csrf
                                <ul>
                                    <li class="sr-look">
                                        <div class="form-group">
                                            <label>I'm looking for</label>
                                            <select class="chosen-select" name="gender">
                                                <option value="">I'm looking for</option>
                                                @forelse($extras->where('category', 'gender') as $key => $gender)
                                                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </li>
                                    <li class="sr-age">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <select class="chosen-select" name="age">
                                                <option value="">Age</option>
                                                @forelse($extras->where('category', 'agegroup') as $key => $age)
                                                <option value="{{ $age->id }}">{{ $age->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </li>
                                    <li class="sr-reli">
                                        <div class="form-group">
                                            <label>Religion</label>
                                            <select class="chosen-select" name="religion">
                                                <option>Religion</option>
                                                @forelse($religions as $key => $rel)
                                                <option value="{{ $rel->id }}">{{ $rel->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </li>
                                    <li class="sr-cit">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="chosen-select" name="location">
                                                <option>Location</option>
                                                @forelse($states as $key => $state)
                                                <option value="{{ $state->id }}" {{ ($states->where('default', 'true')->first()->id == $state->id) ? 'selected' : '' }}>{{ $state->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </li>
                                    <li class="sr-btn">
                                        <input type="submit" class="btn-submit" value="Search">
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- BANNER SLIDER -->
<section>
    <div class="hom-ban-sli">
        <div>
            <ul class="ban-sli">
                <li>
                    <div class="image">
                        <img src="{{ asset('/assets/images/slider/young-indian-woman-wearing-sari.webp') }}" alt="Kerala Knots" loading="lazy">
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="{{ asset('/assets/images/slider/closeup-hands-pretty-hindu-bride-with-henna-tattoo.webp') }}" alt="Kerala Knots" loading="lazy">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- END -->

<!-- QUICK ACCESS -->
<section>
    <div class="str home-acces-main">
        <div class="container">
            <div class="row">
                <!-- BACKGROUND SHAPE -->
                <div class="wedd-shap">
                    <span class="abo-shap-1"></span>
                    <span class="abo-shap-4"></span>
                </div>
                <!-- END BACKGROUND SHAPE -->

                <div class="home-tit">
                    <p>Quick Access</p>
                    <h2><span>Our Services</span></h2>
                    <span class="leaf1"></span>
                    <span class="tit-ani-"></span>
                </div>
                <div class="home-acces">
                    <ul class="hom-qui-acc-sli">
                        <li>
                            <div class="wow fadeInUp hacc hacc1" data-wow-delay="0.1s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/user.png') }}" alt="" loading="lazy">
                                    <h4>Browse Profiles</h4>
                                    <p>1200+ Profiles</p>
                                    <a href="{{ route('browse.profile') }}">View more</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wow fadeInUp hacc hacc2" data-wow-delay="0.2s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/gate.png') }}" alt="" loading="lazy">
                                    <h4>Wedding</h4>
                                    <p>1200+ Profiles</p>
                                    <a href="{{ route('wedding') }}">View more</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wow fadeInUp hacc hacc4" data-wow-delay="0.4s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/hall.png') }}" alt="" loading="lazy">
                                    <h4>Join Now</h4>
                                    <p>Start for free</p>
                                    <a href="{{ route('register') }}">Get started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wow fadeInUp hacc hacc3" data-wow-delay="0.3s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/photo-camera.png') }}" alt="" loading="lazy">
                                    <h4>Photo gallery</h4>
                                    <p>1200+ Profiles</p>
                                    <a href="{{ route('gallery') }}">View more</a>
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

<!-- TRUST BRANDS -->
<section>
    <div class="hom-cus-revi">
        <div class="container">
            <div class="row">
                <div class="home-tit">
                    <p>trusted brand</p>
                    <h2><span>Trust by <b class="num">1500</b>+ Couples</span></h2>
                    <span class="leaf1"></span>
                    <span class="tit-ani-"></span>
                </div>
                <div class="slid-inn cus-revi">
                    <ul class="slider3">
                        <li>
                            <div class="cus-revi-box">
                                <div class="revi-im">
                                    <img src="{{ asset('/assets/images/icon/wedding-1.png') }}" alt="" loading="lazy">
                                    <i class="cir-com cir-1"></i>
                                    <i class="cir-com cir-2"></i>
                                    <i class="cir-com cir-3"></i>
                                </div>
                                <p class="text-justify">"We found each other on Kerala Knots and immediately felt a connection. The platform's detailed profiles and secure environment made it easy for us to get to know each other. Today, we are happily married, and we owe it all to this wonderful service!"</p>
                                <h5>Priya & Ankit</h5>
                                <span>Karnataka</span>
                            </div>
                        </li>
                        <li>
                            <div class="cus-revi-box">
                                <div class="revi-im">
                                    <img src="{{ asset('/assets/images/icon/wedding-1.png') }}" alt="" loading="lazy">
                                    <i class="cir-com cir-1"></i>
                                    <i class="cir-com cir-2"></i>
                                    <i class="cir-com cir-3"></i>
                                </div>
                                <p class="text-justify">"Our journey began with a simple match on Kerala Knots. The compatibility tests and interest-based matching helped us find common ground, and now we are building a beautiful life together. Thank you for bringing us together!"</p>
                                <h5>Sana & Rohan</h5>
                                <span>New Delhi</span>
                            </div>
                        </li>
                        <li>
                            <div class="cus-revi-box">
                                <div class="revi-im">
                                    <img src="{{ asset('/assets/images/icon/wedding-1.png') }}" alt="" loading="lazy">
                                    <i class="cir-com cir-1"></i>
                                    <i class="cir-com cir-2"></i>
                                    <i class="cir-com cir-3"></i>
                                </div>
                                <p class="text-justify">"Our journey began with a simple match on Kerala Knots. The compatibility tests and interest-based matching helped us find common ground, and now we are building a beautiful life together. Thank you for bringing us together!"</p>
                                <h5>Sana & Rohan</h5>
                                <span>New Delhi</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- BANNER -->
<section>
    <div class="str">
        <div class="ban-inn ban-home">
            <div class="container">
                <div class="row">
                    <div class="hom-ban">
                        <div class="ban-tit">
                            <span><i class="no1">#1</i> Wedding Website</span>
                            <h2>Why choose us</h2>
                            <p>Most Trusted and premium Matrimony Service in India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- START -->
<section>
    <div class="ab-sec2">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <div class="animate animate__animated animate__slower" data-ani="animate__flipInX" data-dely="0.1">
                            <img src="{{ asset('/assets/images/icon/prize.png') }}" alt="" loading="lazy">
                            <h4>Personalized Matchmaking</h4>
                            <p>Our advanced algorithms and comprehensive profiles ensure you receive matches tailored to your preferences and lifestyle.</p>
                        </div>
                    </li>
                    <li>
                        <div class="animate animate__animated animate__slower" data-ani="animate__flipInX" data-dely="0.6">
                            <img src="{{ asset('/assets/images/icon/network.png') }}" alt="" loading="lazy">
                            <h4>Diverse Community</h4>
                            <p>With members from various cultures, religions, and backgrounds, our platform offers a diverse pool of potential matches.</p>
                        </div>
                    </li>
                    <li>
                        <div class="animate animate__animated animate__slower" data-ani="animate__flipInX" data-dely="0.6">
                            <img src="{{ asset('/assets/images/icon/trust.png') }}" alt="" loading="lazy">
                            <h4>Confidential and Secure</h4>
                            <p>Your privacy is our priority. Our secure platform ensures your personal information remains confidential.</p>
                        </div>
                    </li>
                    <li>
                        <div class="animate animate__animated animate__slower" data-ani="animate__flipInX" data-dely="0.3">
                            <img src="{{ asset('/assets/images/icon/3.png') }}" alt="" loading="lazy">
                            <h4>Verified Profiles</h4>
                            <p>We prioritize your safety and peace of mind by conducting thorough verifications to ensure authenticity.</p>
                        </div>
                    </li>
                    <li>
                        <div class="animate animate__animated animate__slower" data-ani="animate__flipInX" data-dely="0.6">
                            <img src="{{ asset('/assets/images/icon/letter.png') }}" alt="" loading="lazy">
                            <h4>24/7 Customer Support</h4>
                            <p>Our dedicated support team is always here to assist you with any queries or issues.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- ABOUT START -->
<section>
    <div class="ab-wel">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ab-wel-lhs">
                        <span class="ab-wel-3"></span>
                        <img src="{{ asset('/assets/images/about/2.svg') }}" alt="" loading="lazy" class="ab-wel-1">
                        <img src="{{ asset('/assets/images/about/1.svg') }}" alt="" loading="lazy" class="ab-wel-2">
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

<!-- MOMENTS START -->
<section>
    <div class="wedd-tline">
        <div class="container">
            <div class="row">
                <div class="home-tit">
                    <p>Moments</p>
                    <h2><span>How it works</span></h2>
                    <span class="leaf1"></span>
                    <span class="tit-ani-"></span>
                </div>
                <div class="inn">
                    <ul>
                        <li>
                            <div class="tline-inn">
                                <div class="tline-im animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <img src="{{ asset('/assets/images/icon/rings.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="tline-con animate animate__animated animate__slow" data-ani="animate__fadeInUp">
                                    <h5>Register</h5>
                                    <span>Kerala Knots</span>
                                    <p>Create your profile by filling in basic details, preferences, and interests.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tline-inn tline-inn-reve">
                                <div class="tline-con animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <h5>Find your Match</h5>
                                    <span>Kerala Knots</span>
                                    <p>Browse through suggested matches and use our advanced search filters to find potential partners.</p>
                                </div>
                                <div class="tline-im animate animate__animated animate__slow" data-ani="animate__fadeInUp">
                                    <img src="{{ asset('/assets/images/icon/wedding-2.png') }}" alt="" loading="lazy">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tline-inn">
                                <div class="tline-im animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <img src="{{ asset('/assets/images/icon/love-birds.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="tline-con animate animate__animated animate__slow" data-ani="animate__fadeInUp">
                                    <h5>Send Interest</h5>
                                    <span>Kerala Knots</span>
                                    <p>Express interest and start conversations with members who catch your eye.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tline-inn tline-inn-reve">
                                <div class="tline-con animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <h5>Get Profile Information</h5>
                                    <span>Kerala Knots</span>
                                    <p>Get your preferred profile's information.</p>
                                </div>
                                <div class="tline-im animate animate__animated animate__slow" data-ani="animate__fadeInUp">
                                    <img src="{{ asset('/assets/images/icon/network.png') }}" alt="" loading="lazy">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tline-inn">
                                <div class="tline-im animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <img src="{{ asset('/assets/images/icon/chat.png') }}" alt="" loading="lazy">
                                </div>
                                <div class="tline-con animate animate__animated animate__slow" data-ani="animate__fadeInUp">
                                    <h5>Start Meetups</h5>
                                    <span>Kerala Knots</span>
                                    <p>Arrange meetings or video calls through our platform to take your connection to the next level.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tline-inn tline-inn-reve">
                                <div class="tline-con animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <h5>Getting Marriage</h5>
                                    <span>Kerala Knots</span>
                                    <p>Get married and start a new life.</p>
                                </div>
                                <div class="tline-im animate animate__animated animate__slow" data-ani="animate__fadeInUp">
                                    <img src="{{ asset('/assets/images/icon/wedding-couple.png') }}" alt="" loading="lazy">
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

<!-- FIND YOUR MATCH BANNER -->
<section>
    <div class="str count">
        <div class="container">
            <div class="row">
                <div class="fot-ban-inn">
                    <div class="lhs">
                        <h2>Find your perfect Match now</h2>
                        <p>Ready to find your perfect match? Sign up today and start your journey towards a happy and fulfilling marriage. Whether you're looking for love or seeking an ideal life partner, Kerala Knots is here to help you every step of the way.</p>
                        <a href="{{ route('register') }}" class="cta-3">Register Now</a>
                        <a href="{{ route('contact') }}" class="cta-4">Help & Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection