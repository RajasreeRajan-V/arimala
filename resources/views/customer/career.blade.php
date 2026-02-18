<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Arimala Hospital - Kanhangad</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    <link href="{{ asset('css/career.css') }}" rel="stylesheet">

    <style>
        .page-title .heading {
            position: relative;
            background: url("{{ asset('img/background/hospital.jpg') }}") center center / cover no-repeat;
            padding: 100px 0;
            z-index: 1;
        }

        /* White Glass Card */
        .white-glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            border-radius: 20px;
            padding: 50px 40px;

            /* Soft Blue Border */
            border: 2px solid rgba(75, 153, 195, 0.8);

            box-shadow: 0 15px 40px rgba(14, 73, 104, 0.15);

            transition: 0.3s ease;
        }

        /* Hover Effect */
        .white-glass-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(14, 73, 104, 0.25);
        }

        /* Title */
        .white-glass-card .heading-title {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #0E4968;
        }

        /* Paragraph */
        .white-glass-card p {
            font-size: 18px;
            line-height: 1.7;
            color: #333333;
        }

        /* .careers-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url("{{ asset('img/bg/career1.jpg') }}") center center / cover no-repeat;
            padding: 80px 0;
        }

        .careers-bg .section-title h2,
        .careers-bg .section-title p {
            color: #ffffff;
        } */
    </style>

</head>

<body class="doctors-page">

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
                        <span>+91 8281 240 560</span>
                    </i>
                </div>

                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#!" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#!" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#!" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#!" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center gap-2">
                    <img src="{{ asset('img/back-logo.png') }}" alt="Arimala Hospital" class="logo-img">
                    {{-- <span class="logo-title">
                        Arimala Hospital
                    </span> --}}
                </a>


                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('dashboard') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('departments') }}">Departments</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('doctors') }}">Doctors</a></li>
                        <li><a href="{{ route('doctors') }}" class="active">Career</a></li>
                        <li class="dropdown"><a href="#"><span>More Pages</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="department-details.html">Department Details</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                                <li><a href="appointment.html">Appointment</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="faq.html">Frequently Asked Questions</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="terms.html">Terms</a></li>
                                <li><a href="privacy.html">Privacy</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="#">Deep Dropdown 1</a></li>
                                        <li><a href="#">Deep Dropdown 2</a></li>
                                        <li><a href="#">Deep Dropdown 3</a></li>
                                        <li><a href="#">Deep Dropdown 4</a></li>
                                        <li><a href="#">Deep Dropdown 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('ContactUs.index') }}">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>
    </header>
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <br><br>
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8 glass-card">
                            <h1 class="heading-title">Careers</h1>
                            <p class="mb-0">
                                Join the team at Arimala Hospital and be part of a dynamic, patient-focused healthcare
                                environment.
                                We offer rewarding career opportunities across medical, administrative, and support
                                roles,
                                encouraging professional growth, continuous learning, and collaboration.
                                If you are passionate about making a difference in healthcare, we welcome your expertise
                                and dedication.
                            </p>
                        </div>


                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Career</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->
        <section id="careers" class="careers section py-5">
            <div class="careers-bg">
                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="section-title text-center mb-5">
                        <h2 class="fw-bold">Current Openings</h2>
                        <p class="text-muted">Join our team and make a difference in healthcare</p>
                    </div>

                    <div class="row g-5 gy-5">
                        @foreach($careers as $career)
                            <div class="col-lg-6 col-12">
                                <div class="career-card-modern">

                                    <!-- Header -->
                                    <div class="career-header">
                                        <div class="career-title-section">
                                            <h4>{{ $career->job_title }}</h4>

                                            <div class="career-meta">
                                                <span class="career-type-badge">
                                                    <i class="bi bi-briefcase"></i>
                                                    {{ $career->position }}
                                                </span>
                                            </div>
                                        </div>

                                        {{-- <div class="career-status">
                                            @if($career->due_date->lt(now()->startOfDay()))
                                                <button class="btn-apply bg-secondary text-white" disabled>
                                                    Applications Closed
                                                </button>
                                            @endif
                                        </div> --}}

                                    </div>

                                    <!-- Image (Optional) -->
                                    @if(!empty($career->imge) && file_exists(public_path('storage/' . $career->imge)))
                                        <img src="{{ asset('storage/' . $career->imge) }}" class="img-fluid w-100"
                                            style="max-height:200px; object-fit:cover;" alt="{{ $career->job_title }}">
                                    @endif

                                    <!-- Description -->
                                    <div class="career-description">
                                        <p>{{ $career->description }}</p>
                                    </div>

                                    <!-- Requirements -->
                                    <div class="career-requirements">

                                        <div class="requirement-item">
                                            <div class="requirement-label">
                                                <i class="bi bi-mortarboard"></i>
                                                <span>Qualification</span>
                                            </div>
                                            <div class="requirement-value">
                                                {{ $career->qualification }}
                                            </div>
                                        </div>

                                        <div class="requirement-item">
                                            <div class="requirement-label">
                                                <i class="bi bi-calendar-event"></i>
                                                <span>Last Date</span>
                                            </div>
                                            <div class="requirement-value">
                                                {{ \Carbon\Carbon::parse($career->due_date)->format('d M Y') }}
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Footer -->
                                    <div class="career-footer">
                                        <div class="career-posted">
                                            <i class="bi bi-clock"></i>
                                            <span>Posted on {{ $career->created_at->format('d M Y') }}</span>
                                        </div>

                                        @if($career->due_date->gte(now()->startOfDay()))
                                            <a href="{{ route('apply.show', $career->id) }}" class="btn-apply">
                                                Apply Now
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        @else
                                            <button class="btn-apply bg-secondary text-white" disabled>
                                                Applications Closed
                                            </button>
                                        @endif

                                    </div>


                                </div>
                            </div>
                        @endforeach
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
                            <a href="index.html" class="logo footer-logo d-flex align-items-center mb-4">
                                <img src="{{ asset('img/logo1.jpg') }}" class="footer-logo" alt="Logo">
                            </a>

                            <p class="brand-description">Committed to delivering trusted healthcare services with modern
                                facilities,
                                experienced doctors, and a patient-first approach at Arimala Hospital.</p>

                            <div class="contact-info mt-5">
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Arimala Hospital, Near Railway Station, Kanhangad, Kerala 671315</span>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-telephone"></i>
                                    <span>+91 8281 240 560</span>
                                    <span>0467 220 4560</span>
                                </div>
                                <div class="contact-item">
                                    <i class="bi bi-envelope"></i>
                                    <span>arimalahospital@gmail.com</span>
                                    <span>hrarimala@gmail.com</span>
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
                                <div class="text-center py-3">
                                    <small>© <a href="#" class="text-decoration-none" style="color: #ffccff;">2026
                                            Arimala Hospital</a> -
                                        All Rights Reserved.</small>
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