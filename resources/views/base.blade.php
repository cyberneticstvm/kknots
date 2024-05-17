<!doctype html>
<html lang="en">

<head>
    <title>Kerala Knots Matrimony</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#f6af04">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <!--== FAV ICON(BROWSER TAB ICON) ==-->
    <link rel="shortcut icon" href="{{ asset('/assets/images/fav.ico') }}" type="image/x-icon">
    <!--== CSS FILES ==-->
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/kknots.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="plod">
            <span class="lod1"><img src="{{ asset('/assets/images/loder/1.png') }}" alt="" loading="lazy"></span>
            <span class="lod2"><img src="{{ asset('/assets/images/loder/2.png') }}" alt="" loading="lazy"></span>
            <span class="lod3"><img src="{{ asset('/assets/images/loder/3.png') }}" alt="" loading="lazy"></span>
        </div>
    </div>
    <div class="pop-bg"></div>
    <!-- END PRELOADER -->

    @include("top-head")

    @include("nav")

    @include("nav-mob")

    @yield("content")

    <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">
            <div class="row foot-supp">
                <h2><span>For support:</span> <a href="tel:+919778292355">+91 9778292355</a> &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span>
                    <a href="mailto:help@keralaknots.com">help@keralaknots.com</a>
                </h2>
            </div>
            <div class="row wed-foot-link wed-foot-link-1">
                <div class="col-md-4">
                    <h4>Get In Touch</h4>
                    <p>Address: KC Arcade, 2nd Floor, Near TV Center, CSEZ PO, Kakkanadu, Ernakulam - 682037</p>
                    <p>Phone: <a href="tel:+919778292355">+91 9778292355</a></p>
                    <p>Email: <a href="mailto:help@keralaknots.com">help@keralaknots.com</a></p>
                </div>
                <div class="col-md-4">
                    <h4>HELP &amp; SUPPORT</h4>
                    <ul>
                        <li><a href="{{ route('index') }}">About Us</a>
                        </li>
                        <li><a href="{{ route('index') }}">Contact us</a>
                        </li>
                        <li><a href="{{ route('index') }}">Register</a>
                        </li>
                        <li><a href="{{ route('index') }}">Login</a>
                        </li>
                        <li><a href="{{ route('index') }}">Find your partner</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 fot-soc">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/keralaknots" target="_blank"><img src="{{ asset('/assets/images/social/3.png') }}" alt="" loading="lazy"></a></li>
                        <li><a href="https://www.instagram.com/kerala.knots" target="_blank"><img src="{{ asset('/assets/images/social/7.png') }}" alt="" loading="lazy"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row foot-count">
                <p>Kerala Knots - Trusted by over thousands of Boys & Girls for successfull marriage. <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Join us today !</a></p>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- COPYRIGHTS -->
    <section>
        <div class="cr">
            <div class="container">
                <div class="row">
                    <p>Copyright © <span id="">{{ date('Y') }}</span> <a href="{{ route('index') }}" target="_blank">keralaknots.com.</a> All
                        rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="//cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/select-opt.js') }}"></script>
    <script src="{{ asset('/assets/js/slick.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
    <script src="{{ asset('/assets/js/script.js') }}"></script>
    <script>
        $(function() {
            let table = new DataTable('#myTable');
        })
    </script>

    @include("message")
</body>

</html>