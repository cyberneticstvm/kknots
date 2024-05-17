<!-- MAIN MENU -->
<div class="hom-top">
    <div class="container">
        <div class="row">
            <div class="hom-nav">
                <!-- LOGO -->
                <div class="logo">
                    <span class="menu desk-menu">
                        <i></i><i></i><i></i>
                    </span>
                    <a href="{{ route('index') }}" class="logo-brand"><img src="{{ asset('/assets/images/kk-logo-png.png') }}" alt="Kerala Knots" loading="lazy" class="ic-logo"></a>
                </div>

                <!-- EXPLORE MENU -->
                <div class="bl">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li class="smenu-pare">
                            <span class="smenu">Explore</span>
                            <div class="smenu-open smenu-box">
                                <div class="container">
                                    <div class="row">
                                        <h4 class="tit">Explore category</h4>
                                        <ul>
                                            <li>
                                                <div class="menu-box menu-box-2">
                                                    <h5>Browse profiles <span>1200+ Verified profiles</span></h5>
                                                    <span class="explor-cta">More details</span>
                                                    <a href="all-profiles.html" class="fclick"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="menu-box menu-box-1">
                                                    <h5>Wedding page <span>Make reservation</span></h5>
                                                    <span class="explor-cta">More details</span>
                                                    <a href="wedding.html" class="fclick"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="menu-box menu-box-3">
                                                    <h5>All Services<span>Lorem ipsum dummy</span></h5>
                                                    <span class="explor-cta">More details</span>
                                                    <a href="services.html" class="fclick"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="menu-box menu-box-4">
                                                    <h5>Join Now <span>Lorem ipsum dummy</span></h5>
                                                    <span class="explor-cta">More details</span>
                                                    <a href="plans.html" class="fclick"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        @auth
                        @if(Auth::user()->role == 21)
                        <li class="smenu-pare">
                            <span class="smenu">Dashboard</span>
                            <div class="smenu-open smenu-single">
                                <ul>
                                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('user.dashboard') }}">My profile</a></li>
                                    <li><a href="{{ route('user.profile.settings') }}">Profile settings</a></li>
                                    <li><a href="{{ route('user.profile.edit') }}">Edit full profile</a></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        @else
                        <li class="smenu-pare">
                            <span class="smenu">Dashboard</span>
                            <div class="smenu-open smenu-single">
                                <ul>
                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('admin.manage.staff') }}">Manage Staff / Users</a></li>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @else
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                    </ul>
                </div>

                <!-- USER PROFILE -->
                <div class="al">
                    <div class="head-pro">
                        <img src="{{ Auth::user() ? asset(Auth::user()->settings?->profile_photo) ?? asset('/assets/images/profiles/1.svg') : asset('/assets/images/profiles/1.svg') }}" alt="" loading="lazy">
                        <b>Hello</b><br>
                        <h4>{{ Auth::user() ? Auth::user()->name : 'Guest'}}</h4>
                        <span class="fclick"></span>
                    </div>
                </div>

                <!--MOBILE MENU-->
                <div class="mob-menu">
                    <div class="mob-me-ic">
                        <span class="ser-open mobile-ser">
                            <img src="{{ asset('/assets/images/icon/search.svg') }}" alt="">
                        </span>
                        <span class="mobile-exprt" data-mob="dashbord">
                            <img src="{{ asset('/assets/images/icon/users.svg') }}" alt="">
                        </span>
                        <span class="mobile-menu" data-mob="mobile">
                            <img src="{{ asset('/assets/images/icon/menu.svg') }}" alt="">
                        </span>
                    </div>
                </div>
                <!--END MOBILE MENU-->
            </div>
        </div>
    </div>
</div>
<!-- END -->