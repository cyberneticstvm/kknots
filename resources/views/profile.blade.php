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
                            @if($profile->settings?->show_profile_photo)
                            <img src="{{ ($profile->settings->profile_photo) ? asset($profile->settings->profile_photo) : (($profile->gender == 2) ? asset('/assets/images/profiles/bride.svg') : asset('/assets/images/profiles/groom.svg')) }}" loading="lazy" class="pro" alt="">
                            @else
                            <img src="{{ ($profile->gender == 2) ? asset('/assets/images/profiles/bride.svg') : asset('/assets/images/profiles/groom.svg') }}" loading="lazy" class="pro" alt="">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="profi-pg profi-bio">
                    <div class="lhs">
                        <div class="pro-pg-intro">
                            <h1>{{ $profile?->name }}</h1>
                            <div class="pro-info-status">
                                @if($profile?->settings?->verified == 1)
                                <span class="stat-2">Verified</span>
                                @else
                                <span class="stat-1">Profile Not Verified</span>
                                @endif
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <img src="{{ asset('/assets/images/icon/pro-age.png') }}" loading="lazy" alt="">
                                        <span>City: <strong>{{ $profile?->settings?->district?->name }}</strong></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('/assets/images/icon/pro-age.png') }}" loading="lazy" alt="">
                                        <span>Age: <strong>{{ $profile?->age() }}</strong></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('/assets/images/icon/pro-age.png') }}" loading="lazy" alt="">
                                        <span>Height: <strong>{{ $profile?->settings?->height }} CMs</strong></span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('/assets/images/icon/pro-age.png') }}" loading="lazy" alt="">
                                        <span>Job: <strong>{{ $profile?->settings?->occupations?->name }}</strong></span>
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
                        @if($profile->settings->show_profile_photo)
                        <div class="pr-bio-c pr-bio-gal" id="gallery">
                            <h3>Photo gallery</h3>
                            <div id="image-gallery">
                                @forelse($profile?->settings?->details?->where('category', 'photo') as $key => $photo)
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
                        @endif
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c pr-bio-conta">
                            <h3>Contact info</h3>
                            <ul>
                                @if($profile?->settings?->show_contact_number)
                                <li><span><i class="fa fa-mobile" aria-hidden="true"></i><b>Phone:</b>{{ $profile->mobile }}</span></li>
                                @endif
                                @if($profile?->settings?->show_email)
                                <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i><b>Email:</b>{{ $profile->email }}</span>
                                    @endif
                                </li>
                                @if($profile?->settings?->show_address)
                                <li><span><i class="fa fa fa-map-marker" aria-hidden="true"></i><b>Address: </b>{{ $profile->settings->address }}</span></li>
                                @endif
                            </ul>
                        </div>
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c pr-bio-info">
                            <h3>Personal information</h3>
                            <ul>
                                <li><b>Name:</b> {{ $profile?->name }}</li>
                                <li><b>Father's name:</b> {{ $profile?->settings?->father_name }}</li>
                                <li><b>Age:</b> {{ $profile?->age() }}</li>
                                <li><b>Date of birth:</b>{{ $profile?->dob?->format('d.M.Y') }}</li>
                                <li><b>Height:</b>{{ $profile?->settings?->height }}</li>
                                <li><b>Weight:</b>{{ $profile?->settings?->weight }}</li>
                                <li><b>Degree:</b> {{ $profile?->settings?->qualifications?->name }}</li>
                                <li><b>Religion:</b> {{ $profile?->religions?->name }}</li>
                                <li><b>Profession:</b> {{ $profile?->settings?->occupations?->name }}</li>
                                <li><b>Company:</b> {{ $profile?->settings?->company_name }}</li>
                                <li><b>Salary:</b> {{ $profile?->settings?->salary }}</li>
                            </ul>
                        </div>
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <div class="pr-bio-c pr-bio-hob">
                            <h3>Interest & Habits</h3>
                            <ul>
                                @forelse($handi as $key => $item)
                                <li><span>{{ ucfirst($item?->extras?->category) }}: {{ $item?->extras?->name }}</span></li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        <!-- END PROFILE ABOUT -->
                        <!-- PROFILE ABOUT -->
                        <!--<div class="pr-bio-c menu-pop-soci pr-bio-soc">
                            <h3>Social media</h3>
                            <ul>
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>-->
                        <!-- END PROFILE ABOUT -->


                    </div>

                    <!-- PROFILE lHS -->
                    <div class="rhs">
                        <!-- HELP BOX -->
                        <div class="prof-rhs-help">
                            <div class="inn">
                                <h3>Tell us your Needs</h3>
                                <p>Tell us what kind of service or experts you are looking.</p>
                                <a href="{{ route('register') }}">Register for free</a>
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
                                            <img src="{{ ($item->settings->profile_photo) ? asset($item->settings->profile_photo) : (($item->gender == 2) ? asset('/assets/images/profiles/bride.svg') : asset('/assets/images/profiles/groom.svg')) }}" alt="">
                                            <span class="badge badge-success">21 Years old</span>
                                        </div>
                                        <div class="wedd-rel-con">
                                            <h5>{{ $item?->name }}</h5>
                                            <span>City: <b>{{ $item->settings->city }}</b></span>
                                        </div>
                                        <a href="{{ route('user.profile', encrypt($item->id)) }}" class="fclick"></a>
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