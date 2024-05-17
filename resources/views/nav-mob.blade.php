<!-- EXPLORE MENU POPUP -->
<div class="mob-me-all mobile_menu">
    <div class="mob-me-clo"><img src="{{ asset('/assets/images/icon/close.svg') }}" alt=""></div>
    <div class="mv-bus">
        <h4><i class="fa fa-globe" aria-hidden="true"></i> EXPLORE CATEGORY</h4>
        <ul>
            <li><a href="all-profiles.html">Browse profiles</a></li>
            <li><a href="wedding.html">Wedding page</a></li>
            <li><a href="services.html">All Services</a></li>
            <li><a href="plans.html">Join Now</a></li>
        </ul>
        <h4><i class="fa fa-align-center" aria-hidden="true"></i> Menu</h4>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            @auth
            @if(Auth::user()->role == 21)
            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('user.dashboard') }}">My profile</a></li>
            <li><a href="{{ route('user.profile.settings') }}">Profile settings</a></li>
            <li><a href="{{ route('user.profile.edit') }}">Edit full profile</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            @else
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.manage.staff') }}">Manage Staff / Users</a></li>
            @endif
            @else
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            @endauth
        </ul>
        <div class="menu-pop-help">
            <h4>Support Team</h4>
            <div class="user-pro">
                <img src="{{ asset('/assets/images/profiles/1.svg') }}" alt="" loading="lazy">
            </div>
            <div class="user-bio">
                <h5>Kerala Knots</h5>
                <span>Senior personal advisor</span>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-sm">Ask your doubts</a>
            </div>
        </div>
        <div class="menu-pop-soci">
            <ul>
                <li><a href="https://www.facebook.com/keralaknots" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/kerala.knots" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="prof-rhs-help">
            <div class="inn">
                <h3>Tell us your Needs</h3>
                <p>Tell us what kind of service you are looking for.</p>
                @auth
                <a href="{{ route('logout') }}">Logout</a>
                @else
                <a href="{{ route('register') }}">Register for free</a>
                @endauth
            </div>
        </div>
    </div>
</div>
<!-- END MOBILE MENU POPUP -->

<!-- MOBILE USER PROFILE MENU POPUP -->
<div class="mob-me-all dashbord_menu">
    <div class="mob-me-clo"><img src="{{ asset('/assets/images/icon/close.svg') }}" alt=""></div>
    <div class="mv-bus">
        <div class="head-pro">
            <img src="{{ Auth::user() ? asset(Auth::user()->settings?->profile_photo) ?? asset('/assets/images/profiles/1.svg') : asset('/assets/images/profiles/1.svg') }}" alt="" loading="lazy">
            <b>Hello</b><br>
            <h4>{{ Auth::user() ? Auth::user()->name : 'Guest'}}</h4>
        </div>
        <ul>
            @auth
            @if(Auth::user()->role == 21)
            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('user.dashboard') }}">My profile</a></li>
            <li><a href="{{ route('user.profile.settings') }}">Profile settings</a></li>
            <li><a href="{{ route('user.profile.edit') }}">Edit full profile</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            @else
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.manage.staff') }}">Manage Staff / Users</a></li>
            @endif
            @else
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            @endauth
        </ul>
    </div>
</div>
<!-- END USER PROFILE MENU POPUP -->