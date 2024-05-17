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
        <h4><i class="fa fa-align-center" aria-hidden="true"></i> All Pages</h4>
        <ul>
            <li><a href="all-profiles.html">All profiles</a></li>
            <li><a href="profile-details.html">Profile details</a></li>
            <li><a href="wedding.html">Wedding</a></li>
            <li><a href="wedding-video.html">Wedding video</a></li>
            <li><a href="services.html">Our Services</a></li>
            <li><a href="plans.html">Pricing plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="sign-up.html">Sign-up</a></li>
            <li><a href="photo-gallery.html">Photo gallery</a></li>
            <li><a href="photo-gallery-1.html">Photo gallery 1</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="blog-detail.html">Blog detail</a></li>
            <li><a href="enquiry.html">Ask your doubts</a></li>
            <li><a href="make-reservation.html">Make Reservation</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="coming-soon.html" target="_blank">Coming soon</a></li>
            <li><a href="404.html">404</a></li>
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
            <img src="{{ asset('/assets/images/profiles/1.jpg') }}" alt="" loading="lazy">
            <b>user profile</b><br>
            <h4>Ashley emyy</h4>
        </div>
        <ul>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        </ul>
    </div>
</div>
<!-- END USER PROFILE MENU POPUP -->