<!-- POPUP SEARCH -->
<div class="pop-search">
    <span class="ser-clo">+</span>
    <div class="inn">
        <form>
            <input type="text" placeholder="Search here...">
        </form>
        <div class="rel-sear">
            <h4>Top searches:</h4>
            <a href="all-profiles.html">Browse all profiles</a>
            <a href="all-profiles.html">Mens profile</a>
            <a href="all-profiles.html">Female profile</a>
            <a href="all-profiles.html">New profiles</a>
        </div>
    </div>
</div>
<!-- END -->

<!-- TOP MENU -->
<div class="head-top">
    <div class="container">
        <div class="row">
            <div class="lhs">
                <ul>
                    <li><a href="#!" class="ser-open"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    <li><a href="{{ route('index') }}">About</a></li>
                    <li><a href="{{ route('index') }}">Contact</a></li>
                </ul>
            </div>
            <div class="rhs">
                <ul>
                    <li><a href="tel:+919778292355"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+91 9778292355</a></li>
                    <li><a href="mailto:info@keralaknots.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; help@keralaknots.com</a></li>
                    <li><a href="https://www.facebook.com/keralaknots" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/kerala.knots" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END -->
<!-- MENU POPUP -->
<div class="menu-pop menu-pop1">
    <span class="menu-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
    <div class="inn">
        <img src="{{ asset('/assets/images/kk-logo-png.png') }}" alt="Kerala Knots" loading="lazy" class="logo-brand-only">
        <p><strong>Best Wedding Matrimony</strong> lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu
            fringilla.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <ul class="menu-pop-info">
            <li><a href="tel:+919778292355"><i class="fa fa-phone" aria-hidden="true"></i>+91 9778292355</a></li>
            <li><a href="https://wa.me/919778292355" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>+91 9778292355</a></li>
            <li><a href="mailto:help@keralaknots.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>help@keralaknots.com</a></li>
            <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i>KC Arcade, 2nd Floor, Near TV Center, CSEZ PO, Kakkanadu, Ernakulam - 682037</a></li>
        </ul>
        <div class="menu-pop-help">
            <h4>Support Team</h4>
            <div class="user-pro">
                <img src="{{ asset('/assets/images/profiles/1.jpg') }}" alt="" loading="lazy">
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
    </div>
</div>
<!-- END -->
<!-- CONTACT EXPERT -->
<div class="menu-pop menu-pop2">
    <span class="menu-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
    <div class="inn">
        <div class="menu-pop-help">
            <h4>Support Team</h4>
            <div class="user-pro">
                <img src="{{ asset('/assets/images/profiles/1.jpg') }}" alt="" loading="lazy">
            </div>
            <div class="user-bio">
                <h5>Hello, {{ Auth::user() ? Auth::user()->name : 'Guest'}}</h5>
                <span>Welcome to our portal</span>
                @auth
                <a href="{{ route('logout') }}" class="btn btn-primary btn-sm">Logout / Signout</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login / Register</a>
                @endauth
            </div>
        </div>
        <div class="menu-pop-soci">
            <ul>
                <li><a href="https://www.facebook.com/keralaknots" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/kerala.knots" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>

        <!-- HELP BOX -->
        <div class="prof-rhs-help mt-3">
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
        <!-- END HELP BOX -->
    </div>
</div>
<!-- END -->