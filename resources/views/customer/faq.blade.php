<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Faq - Arimala Hospital - Kanhangad</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Clinic
  * Template URL: https://bootstrapmade.com/clinic-bootstrap-template/
  * Updated: Jul 23 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        .page-title .heading {
            position: relative;
            background: url("{{ asset('img/background/hospital.jpg') }}") center center / cover no-repeat;
            padding: 100px 0;
            z-index: 1;
        }
    </style>
</head>

<body class="faq-page">

    <header id="header" class="header fixed-top">

        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center me-3">
                        <a href="mailto:arimalahospital@gmail.com">arimalahospital@gmail.com</a>
                    </i>

                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:hrarimala@gmail.com">hrarimala@gmail.com</a>
                    </i>

                    <i class="bi bi-phone d-flex align-items-center ms-4">
                        <span>+91 8281 240 560</span></i>
                    <i class="bi bi-telephone d-flex align-items-center ms-4"><span>0467 220 4560</span>
                    </i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#!" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                    <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#!" class="youtube"><i class="bi bi-youtube"></i></a>
                    <a href="#!" class="mail"><i class="bi bi-envelope"></i></a>
                    <a href="#!" class="location"><i class="bi bi-geo-alt"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center gap-2">
                    <img src="{{ asset('img/back-logo.png') }}" alt="Arimala Hospital" class="logo-img">
                    {{-- <span class="logo-title">
            Arimala Hospital
          </span> --}}
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('dashboard') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('career') }}">Career</a></li>
                        <li><a href="{{ route('doctors') }}">Doctors</a></li>
                        <li class="dropdown"><a href="#"><span>Departments</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li>
                                    <a href="{{ route('departments') }}" class="dropdown-dept-link">
                                        <span class="dept-icon">
                                            <img src="{{ asset('img/background/SKETCH.jpg') }}" alt="Departments">
                                        </span>
                                        <span>Departments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('gallery') }}" class="dropdown-dept-link">
                                        <span class="dept-icon">
                                            <img src="{{ asset('img/background/Blog.jpg') }}" alt="Departments">
                                        </span>
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}" class="dropdown-dept-link">
                                        <span class="dept-icon">
                                            <img src="{{ asset('img/background/NURSE.jpg') }}" alt="Departments">
                                        </span>
                                        <span>Blog</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}" class="dropdown-dept-link active">
                                        <span class="dept-icon">
                                            <img src="{{ asset('img/background/faqq.png') }}" alt="Departments">
                                        </span>
                                        <span>FAQ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('ContactUs.index') }}">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>
    </header>
    <!-- Lottie container -->

    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <br><br>
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <div class="glass-card">
                                <h1 class="heading-title">Frequently Asked Questions</h1>
                                <p class="mb-0">
                                    Find answers to common questions about Arimala Hospital’s medical services,
                                    appointments, emergency care, insurance support, and patient facilities.
                                    We are committed to providing clear information and compassionate healthcare.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Faq</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        {{--  --}}

        <section id="faq" class="faq section"
            style="background: url('img/background/faq-professional.png') center center / cover no-repeat;">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="faq-wrapper">

                            <!-- FAQ 01 -->
                            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="150">
                                <div class="faq-header">
                                    <span class="faq-number">01</span>
                                    <h4>What medical services does Arimala Hospital provide?</h4>
                                    <div class="faq-toggle">
                                        <i class="bi bi-plus"></i>
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Arimala Hospital offers comprehensive healthcare services including General
                                            Medicine, Pediatrics, Gynecology, Orthopedics, Emergency Care, Laboratory
                                            Services, and Pharmacy support. Our experienced doctors and modern
                                            facilities ensure quality treatment for patients of all ages.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 02 -->
                            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="faq-header">
                                    <span class="faq-number">02</span>
                                    <h4>What are the visiting hours for patients?</h4>
                                    <div class="faq-toggle">
                                        <i class="bi bi-plus"></i>
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Visiting hours at Arimala Hospital are designed to ensure patient comfort and
                                            proper medical care.
                                            Visitors are generally allowed during designated hours, and we request
                                            family members to follow hospital
                                            guidelines to maintain a safe and peaceful environment for all patients.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 03 -->
                            <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                                <div class="faq-header">
                                    <span class="faq-number">03</span>
                                    <h4>Does Arimala Hospital provide emergency services?</h4>
                                    <div class="faq-toggle">
                                        <i class="bi bi-plus"></i>
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Yes, our emergency department operates 24/7 with trained medical
                                            professionals ready to handle urgent and critical cases. Immediate care is
                                            provided with advanced medical equipment and support staff.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 04 -->
                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="faq-header">
                                    <span class="faq-number">04</span>
                                    <h4>Are diagnostic and laboratory services available?</h4>
                                    <div class="faq-toggle">
                                        <i class="bi bi-plus"></i>
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Yes, we provide in-house laboratory testing and diagnostic services including
                                            blood tests, scans, and routine health check-ups to ensure accurate and
                                            timely diagnosis.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 05 -->
                            <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
                                <div class="faq-header">
                                    <span class="faq-number">05</span>
                                    <h4>What facilities are available for in-patient care?</h4>
                                    <div class="faq-toggle">
                                        <i class="bi bi-plus"></i>
                                        <i class="bi bi-dash"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Arimala Hospital provides well-equipped in-patient rooms designed for comfort
                                            and safety. Our facilities include attentive nursing care, modern medical
                                            equipment, pharmacy support, and hygienic surroundings to ensure a smooth
                                            and comfortable recovery for every patient.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer id="footer" class="footer-16 footer position-relative">

        <div class="container">

            <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-start">

                    <div class="col-lg-5">
                        <div class="brand-section">
                            <a href="index.html" class="logo d-flex align-items-center mb-4">
                                <span class="sitename">Clinic</span>
                            </a>
                            <p class="brand-description">Crafting exceptional digital experiences through thoughtful
                                design and
                                innovative solutions that elevate your brand presence.</p>

                            <div class="contact-info mt-5">
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>123 Creative Boulevard, Design District, NY 10012</span>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span>+1 (555) 987-6543</span>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <span>hello@designstudio.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="footer-nav-wrapper">
                            <div class="row">

                                <div class="col-6 col-lg-3">
                                    <div class="nav-column">
                                        <h6>Studio</h6>
                                        <nav class="footer-nav">
                                            <a href="#!">Our Story</a>
                                            <a href="#!">Design Process</a>
                                            <a href="#!">Portfolio</a>
                                            <a href="#!">Case Studies</a>
                                            <a href="#!">Awards</a>
                                        </nav>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-3">
                                    <div class="nav-column">
                                        <h6>Services</h6>
                                        <nav class="footer-nav">
                                            <a href="#!">Brand Identity</a>
                                            <a href="#!">Web Design</a>
                                            <a href="#!">Mobile Apps</a>
                                            <a href="#!">Digital Strategy</a>
                                            <a href="#!">Consultation</a>
                                        </nav>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-3">
                                    <div class="nav-column">
                                        <h6>Resources</h6>
                                        <nav class="footer-nav">
                                            <a href="#!">Design Blog</a>
                                            <a href="#!">Style Guide</a>
                                            <a href="#!">Free Assets</a>
                                            <a href="#!">Tutorials</a>
                                            <a href="#!">Inspiration</a>
                                        </nav>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-3">
                                    <div class="nav-column">
                                        <h6>Connect</h6>
                                        <nav class="footer-nav">
                                            <a href="#!">Start Project</a>
                                            <a href="#!">Schedule Call</a>
                                            <a href="#!">Join Newsletter</a>
                                            <a href="#!">Follow Updates</a>
                                            <a href="#!">Partnership</a>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>© <span class="sitename">Clinic</span>. All rights reserved.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="legal-links">
                                <a href="#!">Privacy Policy</a>
                                <a href="#!">Terms of Service</a>
                                <a href="#!">Cookie Policy</a>
                                <div class="credits">
                                    <!-- All the links in the footer should remain intact. -->
                                    <!-- You can delete the links only if you've purchased the pro version. -->
                                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>. Distributed by
                                    <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#!" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
