@extends("base")
@section("content")
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                            <h2 class="db-tit">Profiles status</h2>
                            <div class="db-pro-stat">
                                <h6>Profile completion</h6>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edid profile</a></li>
                                        <li><a class="dropdown-item" href="#">View profile</a></li>
                                        <li><a class="dropdown-item" href="#">Profile visibility settings</a></li>
                                    </ul>
                                </div>
                                <div class="db-pro-pgog">
                                    <span><b class="count">90</b>%</span>
                                </div>
                                <ul class="pro-stat-ic">
                                    <li><span><i class="fa fa-heart-o like" aria-hidden="true"></i><b>12</b>Likes</span></li>
                                    <li><span><i class="fa fa-eye view" aria-hidden="true"></i><b>12</b>Views</span></li>
                                    <li><span><i class="fa fa-handshake-o inte" aria-hidden="true"></i><b>12</b>Interests</span></li>
                                    <li><span><i class="fa fa-hand-pointer-o clic" aria-hidden="true"></i><b>12</b>Clicks</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                            <h2 class="db-tit">Plan details</h2>
                            <div class="db-pro-stat">
                                <h6 class="tit-top-curv">{{ Auth::user()->plans?->name }} Plan</h6>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edid profile</a></li>
                                        <li><a class="dropdown-item" href="#">View profile</a></li>
                                        <li><a class="dropdown-item" href="#">Plan change</a></li>
                                        <li><a class="dropdown-item" href="#">Download invoice now</a></li>
                                    </ul>
                                </div>
                                <div class="db-plan-card">
                                    <img src="{{ asset('/assets/images/icon/plan.png') }}" alt="">
                                </div>
                                <div class="db-plan-detil">
                                    <ul>
                                        <li>Plan name: <strong>{{ Auth::user()->plans?->name }}</strong></li>
                                        <li>Validity: <strong>{{ Auth::user()->plans?->validity }} Days</strong></li>
                                        <li>Valid till <strong>24 June 2024</strong></li>
                                        <li><a href="" class="cta-3">Upgrade now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-4 db-sec-com">
                            <h2 class="db-tit">Recent chat list</h2>
                            <div class="db-pro-stat">
                                <div class="db-inte-prof-list db-inte-prof-chat">
                                    <ul>
                                        <li>
                                            <div class="db-int-pro-1"> <img src="images/profiles/2.jpg" alt=""> </div>
                                            <div class="db-int-pro-2">
                                                <h5>Julia Ann</h5> <span>Illunois, United States</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="db-int-pro-1"> <img src="images/profiles/16.jpg" alt=""> </div>
                                            <div class="db-int-pro-2">
                                                <h5>Julia Ann</h5> <span>Illunois, United States</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="db-int-pro-1"> <img src="images/profiles/13.jpg" alt=""> </div>
                                            <div class="db-int-pro-2">
                                                <h5>Julia Ann</h5> <span>Illunois, United States</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="db-int-pro-1"> <img src="images/profiles/14.jpg" alt=""> </div>
                                            <div class="db-int-pro-2">
                                                <h5>Julia Ann</h5> <span>Illunois, United States</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection