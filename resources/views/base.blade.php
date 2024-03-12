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
                <h2><span>Free support:</span> +92 (8800) 68 - 8960 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span>
                    info@example.com</h2>
            </div>
            <div class="row wed-foot-link wed-foot-link-1">
                <div class="col-md-4">
                    <h4>Get In Touch</h4>
                    <p>Address: 3812 Lena Lane City Jackson Mississippi</p>
                    <p>Phone: <a href="tel:+917904462944">+92 (8800) 68 - 8960</a></p>
                    <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
                </div>
                <div class="col-md-4">
                    <h4>HELP &amp; SUPPORT</h4>
                    <ul>
                        <li><a href="about-us.html">About company</a>
                        </li>
                        <li><a href="#!">Contact us</a>
                        </li>
                        <li><a href="#!">Feedback</a>
                        </li>
                        <li><a href="about-us.html#faq">FAQs</a>
                        </li>
                        <li><a href="about-us.html#testimonials">Testimonials</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 fot-soc">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="#!"><img src="{{ asset('/assets/images/social/1.png') }}" alt="" loading="lazy"></a></li>
                        <li><a href="#!"><img src="{{ asset('/assets/images/social/2.png') }}" alt="" loading="lazy"></a></li>
                        <li><a href="#!"><img src="{{ asset('/assets/images/social/3.png') }}" alt="" loading="lazy"></a></li>
                        <li><a href="#!"><img src="{{ asset('/assets/images/social/5.png') }}" alt="" loading="lazy"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row foot-count">
                <p>Company name Site - Trusted by over thousands of Boys & Girls for successfull marriage. <a href="sign-up.html" class="btn btn-primary btn-sm">Join us today !</a></p>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- COPYRIGHTS -->
    <section>
        <div class="cr">
            <div class="container">
                <div class="row">
                    <p>Copyright © <span id="cry">2023</span> <a href="#!" target="_blank">Company.com</a> All
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