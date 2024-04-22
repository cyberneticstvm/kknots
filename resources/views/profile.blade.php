@extends("base")
@section("content")
<!-- PROFILE -->
<section>
    <div class="profi-pg profi-ban">
        <div class="">
            <div class="">
                <div class="profile">
                    <div class="pg-pro-big-im">
                        <div class="s1">
                            <img src="{{ asset($profile?->settings?->profile_photo) }}" loading="lazy" class="pro" alt="">
                        </div>
                    </div>
                </div>
                <div class="profi-pg profi-bio">
                    <div class="lhs">
                        <div class="pro-pg-intro">
                            <h1>{{ $profile->name }}</h1>
                            <div class="pro-info-status">
                                <span class="stat-1"><b>100</b> viewers</span>
                                <span class="stat-2"><b>Available</b> online</span>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <img src="{{ asset('/assets/images/icon/pro-city.png') }}" loading="lazy" alt="">
                                        <span>City: <strong>{{ $profile->settings->district->name }}</strong></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('/assets/images/icon/pro-age.png') }}" loading="lazy" alt="">
                                        <span>Age: <strong>{{ $profile->age() }}</strong></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('/assets/images/icon/pro-city.png') }}" loading="lazy" alt="">
                                        <span>Height: <strong>{{ $profile->settings->height }} CMs</strong></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('/assets/images/icon/pro-city.png') }}" loading="lazy" alt="">
                                        <span>Job: <strong>{{ $profile->settings->occupations->name }}</strong></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c pr-bio-abo">
                            <h3>About</h3>
                            <p>{!! $profile->settings->bio !!}</p>
                        </div>
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c pr-bio-gal" id="gallery">
                            <h3>Photo gallery</h3>
                            <div id="image-gallery">
                                @forelse($profile->settings->details->where('category', 'photo') as $key => $photo)
                                <div class="pro-gal-imag">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="{{ asset($photo->name) }}" class="img-responsive" alt=""></a>
                                        <div class="img-overlay"><i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c pr-bio-conta">
                            <h3>Contact info</h3>
                            <ul>
                                <li><span><i class="fa fa-mobile" aria-hidden="true"></i><b>Phone:</b>+92 (8800) 68 - 8960</span></li>
                                <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i><b>Email:</b>angelinajoliewed@gmail.com</span>
                                </li>
                                <li><span><i class="fa fa fa-map-marker" aria-hidden="true"></i><b>Address: </b>28800
                                        Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</span></li>
                            </ul>
                        </div>
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c pr-bio-info">
                            <h3>Personal information</h3>
                            <ul>
                                <li><b>Name:</b> Angelina Jolie</li>
                                <li><b>Fatheres name:</b> John smith</li>
                                <li><b>Family name:</b> Joney family</li>
                                <li><b>Age:</b> 24</li>
                                <li><b>Date of birth:</b>03 Jan 1998</li>
                                <li><b>Height:</b>167cm</li>
                                <li><b>Weight:</b>65kg</li>
                                <li><b>Degree:</b> MSC Computer Science</li>
                                <li><b>Religion:</b> Any</li>
                                <li><b>Profession:</b> Working</li>
                                <li><b>Company:</b> Google</li>
                                <li><b>Position:</b> Web developer</li>
                                <li><b>Salary:</b> $1000 p/m</li>
                            </ul>
                        </div>
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c pr-bio-hob">
                            <h3>Hobbies</h3>
                            <ul>
                                <li><span>Modelling</span></li>
                                <li><span>Watching movies</span></li>
                                <li><span>Playing volleyball</span></li>
                                <li><span>Hangout with family</span></li>
                                <li><span>Adventure travel</span></li>
                                <li><span>Books reading</span></li>
                                <li><span>Music</span></li>
                                <li><span>Cooking</span></li>
                                <li><span>Yoga</span></li>
                            </ul>
                        </div>
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c menu-pop-soci pr-bio-soc">
                            <h3>Social media</h3>
                            <ul>
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <!-- END PROFILE ABOUT -->


                    </div>

                    <!-- PROFILE lHS -->
                    <div class="rhs">
                        <!-- HELP BOX -->
                        <div class="prof-rhs-help">
                            <div class="inn">
                                <h3>Tell us your Needs</h3>
                                <p>Tell us what kind of service or experts you are looking.</p>
                                <a href="sign-up.html">Register for free</a>
                            </div>
                        </div>
                        <!-- END HELP BOX -->
                        <!-- RELATED PROFILES -->
                        <div class="slid-inn pr-bio-c wedd-rel-pro">
                            <h3>Related profiles</h3>
                            <ul class="slider3">
                                @forelse($related as $key => $item)
                                <li>
                                    <div class="wedd-rel-box">
                                        <div class="wedd-rel-img">
                                            <img src="{{ asset('/assets/images/profiles/1.jpg') }}" alt="">
                                            <span class="badge badge-success">21 Years old</span>
                                        </div>
                                        <div class="wedd-rel-con">
                                            <h5>{{ $item->name }}</h5>
                                            <span>City: <b>New York City</b></span>
                                        </div>
                                        <a href="profile-details.html" class="fclick"></a>
                                    </div>
                                </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        <!-- END RELATED PROFILES -->
                    </div>
                    <!-- END PROFILE lHS -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END PROFILE -->
@endsection