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
                                    <a href="all-profiles.html">View more</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wow fadeInUp hacc hacc2" data-wow-delay="0.2s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/gate.png') }}" alt="" loading="lazy">
                                    <h4>Wedding</h4>
                                    <p>1200+ Profiles</p>
                                    <a href="wedding-video.html">View more</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wow fadeInUp hacc hacc3" data-wow-delay="0.3s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/couple.png') }}" alt="" loading="lazy">
                                    <h4>All Services</h4>
                                    <p>1200+ Profiles</p>
                                    <a href="services.html">View more</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wow fadeInUp hacc hacc4" data-wow-delay="0.4s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/hall.png') }}" alt="" loading="lazy">
                                    <h4>Join Now</h4>
                                    <p>Start for free</p>
                                    <a href="plans.html">Get started</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wow fadeInUp hacc hacc3" data-wow-delay="0.3s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/photo-camera.png') }}" alt="" loading="lazy">
                                    <h4>Photo gallery</h4>
                                    <p>1200+ Profiles</p>
                                    <a href="photo-gallery.html">View more</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="wow fadeInUp hacc hacc4" data-wow-delay="0.4s">
                                <div class="con">
                                    <img src="{{ asset('/assets/images/icon/cake.png') }}" alt="" loading="lazy">
                                    <h4>Blog & Articles</h4>
                                    <p>Start for free</p>
                                    <a href="blog.html">Get started</a>
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
                                    <img src="{{ asset('/assets/images/user/1.jpg') }}" alt="" loading="lazy">
                                    <i class="cir-com cir-1"></i>
                                    <i class="cir-com cir-2"></i>
                                    <i class="cir-com cir-3"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                <h5>Jack danial</h5>
                                <span>New york</span>
                            </div>
                        </li>
                        <li>
                            <div class="cus-revi-box">
                                <div class="revi-im">
                                    <img src="{{ asset('/assets/images/user/2.jpg') }}" alt="" loading="lazy">
                                    <i class="cir-com cir-1"></i>
                                    <i class="cir-com cir-2"></i>
                                    <i class="cir-com cir-3"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                <h5>Jack danial</h5>
                                <span>New york</span>
                            </div>
                        </li>
                        <li>
                            <div class="cus-revi-box">
                                <div class="revi-im">
                                    <img src="{{ asset('/assets/images/user/3.jpg') }}" alt="" loading="lazy">
                                    <i class="cir-com cir-1"></i>
                                    <i class="cir-com cir-2"></i>
                                    <i class="cir-com cir-3"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                <h5>Jack danial</h5>
                                <span>New york</span>
                            </div>
                        </li>
                        <li>
                            <div class="cus-revi-box">
                                <div class="revi-im">
                                    <img src="{{ asset('/assets/images/user/5.jpg') }}" alt="" loading="lazy">
                                    <i class="cir-com cir-1"></i>
                                    <i class="cir-com cir-2"></i>
                                    <i class="cir-com cir-3"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                <h5>Jack danial</h5>
                                <span>New york</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="cta-full-wid">
                    <a href="#!" class="cta-dark">More customer reviews</a>
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
                            <p>Most Trusted and premium Matrimony Service in the World.</p>
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
                            <h4>Genuine profiles</h4>
                            <p>Contact genuine profiles with 100% verified mobile</p>
                        </div>
                    </li>
                    <li>
                        <div class="animate animate__animated animate__slower" data-ani="animate__flipInX" data-dely="0.3">
                            <img src="{{ asset('/assets/images/icon/trust.png') }}" alt="" loading="lazy">
                            <h4>Most trusted</h4>
                            <p>The most trusted wedding matrimony brand lorem</p>
                        </div>
                    </li>
                    <li>
                        <div class="animate animate__animated animate__slower" data-ani="animate__flipInX" data-dely="0.6">
                            <img src="{{ asset('/assets/images/icon/rings.png') }}" alt="" loading="lazy">
                            <h4>2000+ weddings</h4>
                            <p>Lakhs of peoples have found their life partner</p>
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
                        <img src="{{ asset('/assets/images/about/1.jpg') }}" alt="" loading="lazy" class="ab-wel-1">
                        <img src="{{ asset('/assets/images/couples/20.jpg') }}" alt="" loading="lazy" class="ab-wel-2">
                        <span class="ab-wel-4"></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ab-wel-rhs">
                        <div class="ab-wel-tit">
                            <h2>Welcome to <em>Wedding matrimony</em></h2>
                            <p>Best wedding matrimony It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout. </p>
                            <p> <a href="plans.html">Click here to</a> Start you matrimony service now.</p>
                        </div>
                        <div class="ab-wel-tit-1">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which
                                don't look even slightly believable.</p>
                        </div>
                        <div class="ab-wel-tit-2">
                            <ul>
                                <li>
                                    <div>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h4>Enquiry <em>+01 2242 3366</em></h4>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h4>Get Support <em>info@example.com</em></h4>
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

<!-- COUNTS START -->
<section>
    <div class="ab-cont">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <div class="ab-cont-po">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <div>
                                <h4>2K</h4>
                                <span>Couples pared</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ab-cont-po">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <div>
                                <h4>4000+</h4>
                                <span>Registerents</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ab-cont-po">
                            <i class="fa fa-male" aria-hidden="true"></i>
                            <div>
                                <h4>1600+</h4>
                                <span>Mens</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="ab-cont-po">
                            <i class="fa fa-female" aria-hidden="true"></i>
                            <div>
                                <h4>2000+</h4>
                                <span>Womens</span>
                            </div>
                        </div>
                    </li>
                </ul>
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
                                    <span>Timing: 7:00 PM</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tline-inn tline-inn-reve">
                                <div class="tline-con animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <h5>Find your Match</h5>
                                    <span>Timing: 7:00 PM</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>
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
                                    <span>Timing: 7:00 PM</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tline-inn tline-inn-reve">
                                <div class="tline-con animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <h5>Get Profile Information</h5>
                                    <span>Timing: 7:00 PM</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>
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
                                    <span>Timing: 7:00 PM</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="tline-inn tline-inn-reve">
                                <div class="tline-con animate animate__animated animate__slower" data-ani="animate__fadeInUp">
                                    <h5>Getting Marriage</h5>
                                    <span>Timing: 7:00 PM</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever.</p>
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

<!-- RECENT COUPLES -->
<section>
    <div class="hom-couples-all">
        <div class="container">
            <div class="row">
                <div class="home-tit">
                    <p>trusted brand</p>
                    <h2><span>Recent Couples</span></h2>
                    <span class="leaf1"></span>
                    <span class="tit-ani-"></span>
                </div>
            </div>
        </div>
        <div class="hom-coup-test">
            <ul class="couple-sli">
                <li>
                    <div class="hom-coup-box">
                        <span class="leaf"></span>
                        <img src="{{ asset('/assets/images/couples/6.jpg') }}" alt="" loading="lazy">
                        <div class="bx">
                            <h4>Dany & July <span>New York</span></h4>
                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hom-coup-box">
                        <span class="leaf"></span>
                        <img src="{{ asset('/assets/images/couples/7.jpg') }}" alt="" loading="lazy">
                        <div class="bx">
                            <h4>Dany & July <span>New York</span></h4>
                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hom-coup-box">
                        <span class="leaf"></span>
                        <img src="{{ asset('/assets/images/couples/8.jpg') }}" alt="" loading="lazy">
                        <div class="bx">
                            <h4>Dany & July <span>New York</span></h4>
                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hom-coup-box">
                        <span class="leaf"></span>
                        <img src="{{ asset('/assets/images/couples/9.jpg') }}" alt="" loading="lazy">
                        <div class="bx">
                            <h4>Dany & July <span>New York</span></h4>
                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hom-coup-box">
                        <span class="leaf"></span>
                        <img src="{{ asset('/assets/images/couples/10.jpg') }}" alt="" loading="lazy">
                        <div class="bx">
                            <h4>Dany & July <span>New York</span></h4>
                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hom-coup-box">
                        <span class="leaf"></span>
                        <img src="{{ asset('/assets/images/couples/3.jpg') }}" alt="" loading="lazy">
                        <div class="bx">
                            <h4>Dany & July <span>New York</span></h4>
                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hom-coup-box">
                        <span class="leaf"></span>
                        <img src="{{ asset('/assets/images/couples/4.jpg') }}" alt="" loading="lazy">
                        <div class="bx">
                            <h4>Dany & July <span>New York</span></h4>
                            <a href="wedding-video.html" class="sml-cta cta-dark">View more</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="hom-coup-box">
                        <span class="leaf"></span>
                        <img src="{{ asset('/assets/images/couples/5.jpg') }}" alt="" loading="lazy">
                        <div class="bx">
                            <h4>Dany & July <span>New York</span></h4>
                            <a href="wedding.html" class="sml-cta cta-dark">View more</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- END -->


<!-- TEAM START -->
<section>
    <div class="ab-team">
        <div class="container">
            <div class="row">
                <div class="home-tit">
                    <p>OUR PROFESSIONALS</p>
                    <h2><span>Meet Our Team</span></h2>
                    <span class="leaf1"></span>
                </div>
                <ul>
                    <li>
                        <div>
                            <img src="{{ asset('/assets/images/profiles/6.jpg') }}" alt="" loading="lazy">
                            <h4>Ashley Jen</h4>
                            <p>Marketing Manager</p>
                            <ul class="social-light">
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('/assets/images/profiles/7.jpg') }}" alt="" loading="lazy">
                            <h4>Ashley Jen</h4>
                            <p>Marketing Manager</p>
                            <ul class="social-light">
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('/assets/images/profiles/8.jpg') }}" alt="" loading="lazy">
                            <h4>Emily Arrov</h4>
                            <p>Creative Manager</p>
                            <ul class="social-light">
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('/assets/images/profiles/9.jpg') }}" alt="" loading="lazy">
                            <h4>Julia sear</h4>
                            <p>Client Coordinator</p>
                            <ul class="social-light">
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END -->


<!-- GALLERY START -->
<section>
    <div class="wedd-gall home-wedd-gall">
        <div class="">
            <div class="gall-inn">
                <div class="home-tit">
                    <p>collections</p>
                    <h2><span>Photo gallery</span></h2>
                    <span class="leaf1"></span>
                    <span class="tit-ani-"></span>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="gal-im animate animate__animated animate__slow" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/gallery/1.jpg') }}" class="gal-siz-1" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/gallery/9.jpg') }}" class="gal-siz-2" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/gallery/3.jpg') }}" class="gal-siz-2" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/gallery/4.jpg') }}" class="gal-siz-1" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/gallery/5.jpg') }}" class="gal-siz-1" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/gallery/6.jpg') }}" class="gal-siz-2" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/gallery/7.jpg') }}" class="gal-siz-2" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/gallery/8.jpg') }}" class="gal-siz-1" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/couples/9.jpg') }}" class="gal-siz-2" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                    <div class="gal-im animate animate__animated animate__slower" data-ani="animate__flipInX">
                        <img src="{{ asset('/assets/images/couples/11.jpg') }}" class="gal-siz-1" alt="" loading="lazy">
                        <div class="txt">
                            <span>Wedding</span>
                            <h4>Bride & Groom</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- BLOG POSTS START -->
<section>
    <div class="hom-blog">
        <div class="container">
            <div class="row">
                <div class="home-tit">
                    <p>Blog posts</p>
                    <h2><span>Blog & Articles</span></h2>
                    <span class="leaf1"></span>
                    <span class="tit-ani-"></span>
                </div>
                <div class="blog">
                    <ul>
                        <li>
                            <div class="blog-box">
                                <img src="{{ asset('/assets/images/blog/1.jpg') }}" alt="" loading="lazy">
                                <span>Wedding - Johnny</span>
                                <h2>Wedding arrangements</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                                <a href="blog-details.html" class="cta-dark"><span>Read more</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="blog-box">
                                <img src="{{ asset('/assets/images/blog/2.jpg') }}" alt="" loading="lazy">
                                <span>Wedding - Johnny</span>
                                <h2>Wedding arrangements</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                                <a href="blog-details.html" class="cta-dark"><span>Read more</span></a>
                            </div>
                        </li>
                        <li>
                            <div class="blog-box">
                                <img src="{{ asset('/assets/images/blog/3.jpg') }}" alt="" loading="lazy">
                                <span>Wedding - Johnny</span>
                                <h2>Invitation cards</h2>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content.</p>
                                <a href="blog-details.html" class="cta-dark"><span>Read more</span></a>
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
                        <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>
                        <a href="sign-up.html" class="cta-3">Register Now</a>
                        <a href="sign-up.html" class="cta-4">Help & Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection