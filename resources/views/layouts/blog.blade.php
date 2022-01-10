<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 05:37:05 GMT -->
<head>
  <meta charset="utf-8">
  <title>Bunny Blogger</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('User/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- magnific popup -->
  <link rel="stylesheet" href="{{asset('User/plugins/magnific-popup/magnific-popup.css')}}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('User/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('User/plugins/slick/slick-theme.css')}}">
  <!-- themify icon -->
  <link rel="stylesheet" href="{{asset('User/plugins/themify-icons/themify-icons.css')}}">
  <!-- animate -->
  <link rel="stylesheet" href="{{asset('User/plugins/animate/animate.css')}}">
  <!-- Aos -->
  <link rel="stylesheet" href="{{asset('User/plugins/aos/aos.css')}}">
  <!-- swiper -->
  <link rel="stylesheet" href="{{asset('User/plugins/swiper/swiper.min.css')}}">
  <!-- Stylesheets -->
  <link href="{{ asset('User/css/style.css') }}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>


<!-- preloader start -->
{{-- <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
</div> --}}
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:info@companyname.com">info@companyname.com</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="callto:1234565523">Call Us Now:
                                <span class="ml-2"> 123 456 5523</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                {{-- <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="logo">
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Home
                            </a>
                            {{-- <div class="dropdown-menu" >
                                <a class="dropdown-item" href="index.html">Home Page 1</a>
                                <a class="dropdown-item" href="homepage-2.html">Home Page 2</a>
                                <a class="dropdown-item" href="homepage-3.html">Home Page 3</a>
                            </div> --}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                About Us
                            </a>
                            {{-- <div class="dropdown-menu" >
                                <a class="dropdown-item" href="about.html">About page</a>
                                <a class="dropdown-item" href="about-2.html">About page-2</a>
                            </div> --}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Service
                            </a>
                            {{-- <div class="dropdown-menu" >
                                <a class="dropdown-item" href="service.html">Service page</a>
                                <a class="dropdown-item" href="service-2.html">Service page-2</a>
                                <a class="dropdown-item" href="service-single.html">Service Single</a>
                            </div> --}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Pages
                            </a>
                            {{-- <div class="dropdown-menu" >
                                <a class="dropdown-item" href="team.html">Team Page</a>
                                <a class="dropdown-item" href="pricing.html">Pricing Page</a>
                                <a class="dropdown-item" href="project.html">project Page</a>
                                <a class="dropdown-item" href="faqs.html">FAQs Page</a>
                                <a class="dropdown-item" href="project-single.html">Project Single</a>
                                <a class="dropdown-item" href="team-single.html">Team Single</a>
                                <a class="dropdown-item" href="404.html">404 Page</a>
                                <a class="dropdown-item" href="signup.html">Sign Up Page</a>
                                <a class="dropdown-item" href="login.html">Login Page</a>
                                <a class="dropdown-item" href="comming-soon.html">Comming Soon Page</a>
                            </div> --}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Blog
                            </a>
                            {{-- <div class="dropdown-menu" >
                                <a class="dropdown-item" href="blog.html">Blog Page</a>
                                <a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a>
                                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            </div> --}}
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Elements
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>


<!-- /navigation -->

<section class="page-title overlay" style="background-image: url(images/background/page-title.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">Business News</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Business News</li>
                </ol>
            </div>
        </div>
    </div>
</section>

@yield('content')
<!-- *** Blog Section Start *** -->
<!-- *** Blog Section End *** -->

<!-- footer -->
<footer class="bg-secondary">
  <div class="py-100 border-bottom" style="border-color: #454547 !important">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="mb-5 mb-md-0 text-center text-md-left">
            <!-- logo -->
            <img class="mb-30" src="images/logo-footer.png" alt="logo">
            <p class="text-white mb-30">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusm tempor incididunt
              labore dolore magna aliqua enim.</p>
            <!-- social icon -->
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="social-icon-outline" href="#">
                  <i class="ti-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="social-icon-outline" href="#">
                  <i class="ti-twitter-alt"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="social-icon-outline" href="#">
                  <i class="ti-vimeo-alt"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="social-icon-outline" href="#">
                  <i class="ti-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- footer links -->
        <div class="col-lg-2 col-md-4 col-6">
          <h4 class="text-white mb-4">Services</h4>
          <ul class="footer-links">
            <li>
              <a href="#">Company History</a>
            </li>
            <li>
              <a href="about.html">About Us</a>
            </li>
            <li>
              <a href="contact.html">Contact Us</a>
            </li>
            <li>
              <a href="service.html">Service</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
        </div>
        <!-- footer links -->
        <div class="col-lg-2 col-md-4 col-6">
          <h4 class="text-white mb-4">Quick Link</h4>
          <ul class="footer-links">
            <li>
              <a href="#">Company History</a>
            </li>
            <li>
              <a href="about-2.html">About Us</a>
            </li>
            <li>
              <a href="contact.html">Contact Us</a>
            </li>
            <li>
              <a href="service-2.html">Service</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
        </div>
        <!-- subscribe form -->
        <div class="col-lg-3 offset-lg-1">
          <div class="mt-5 mt-lg-0 text-center text-md-left">
            <h4 class="mb-4 text-white">Subscribe Us</h4>
            <p class="text-white mb-4">Lorem ipsum dolor sit amet, consect etur adipisicing. elit sed do
              eiusmod. </p>
            <form action="#" class="position-relative">
              <input type="text" class="form-control subscribe" name="subscribe" id="Subscribe"
                placeholder="Enter Your Email">
              <button class="btn-subscribe" type="submit" value="send">
                <i class="ti-arrow-right"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="pt-4 pb-3 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-5">
          <p class="text-white text-center text-md-left">
            <span class="text-primary">Bizpro</span> &copy; 2017 All Right Reserved</p>
        </div>
        <div class="col-lg-6 col-md-7">
          <ul class="list-inline text-center text-md-right">
            <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
              <a class="font-secondary text-white" href="#">Legal</a>
            </li>
            <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
              <a class="font-secondary text-white" href="#">Sitemap</a>
            </li>
            <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
              <a class="font-secondary text-white" href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">
              <a class="font-secondary text-white" href="#">Terms &amp; Conditions</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- back to top -->
    <button class="back-to-top">
      <i class="ti-angle-up"></i>
    </button>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('User/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('User/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('User/plugins/magnific-popup/jquery.magnific.popup.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('User/plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('User/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script  src="{{asset('User/plugins/google-map/gmap.js')}}"></script>
<!-- Syo Timer -->
<script src="{{asset('User/plugins/syotimer/jquery.syotimer.js')}}"></script>
<!-- aos -->
<script src="{{asset('User/plugins/aos/aos.js')}}"></script>
<!-- swiper -->
<script src="{{asset('User/plugins/swiper/swiper.min.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('User/js/script.js')}}"></script>

</body>

</html>
