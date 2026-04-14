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
    <link href="{{ asset('css/doctor.css') }}" rel="stylesheet">

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
                        <span>+91 8281 240 560</span></i>
                    <i class="bi bi-telephone d-flex align-items-center ms-4"><span>0467 220 4560</span>
                    </i>
                </div>
                <div class="topbar-socials d-none d-md-flex align-items-center gap-1">
                    <a href="https://wa.me/918281240560" class="topbar-social whatsapp"><i
                            class="bi bi-whatsapp"></i></a>
                    <a href="https://www.instagram.com/arimala_hospital" class="topbar-social instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/arimalahospital.kgd" target="_blank"
                        class="topbar-social facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.youtube.com/@ArimalaHospital" class="topbar-social youtube"><i
                            class="bi bi-youtube"></i></a>
                    <a href="mailto:arimalahospital@gmail.com" class="topbar-social mail"><i class="bi bi-envelope"></i></a>
                    <a href="https://maps.app.goo.gl/9EqkKZXV4ahtfeqh7" class="topbar-social location"><i class="bi bi-geo-alt"></i></a>
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
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('career') }}">Career</a></li>
                        <li><a href="{{ route('doctors') }}" class="active">Doctors</a></li>
                        <li class="dropdown"><a href="#"><span>Departments</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li>
                                    <a href="{{ route('departments') }}" class="dropdown-dept-link">
                                        <span class="dept-icon">
                                            <img src="{{ asset('img/background/doctdepart.jpg') }}" alt="Departments">
                                        </span>
                                        <span>Departments</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('gallery') }}" class="dropdown-dept-link">
                                        <span class="dept-icon">
                                            <img src="{{ asset('img/background/doctor-patien.png') }}"
                                                alt="Departments">
                                        </span>
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blog') }}" class="dropdown-dept-link">
                                        <span class="dept-icon">
                                            <img src="{{ asset('img/background/patient-nurse.png') }}"
                                                alt="Departments">
                                        </span>
                                        <span>Blog</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}" class="dropdown-dept-link">
                                        <span class="dept-icon">
                                            <img src="{{ asset('img/background/question.png') }}" alt="Departments">
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
    <main class="main">

        <!-- Page Title -->
        <div class="page-title">
            <br><br>
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8 glass-card">
                            <h1 class="heading-title">Doctors</h1>
                            <p class="mb-0">
                                At Arimala Hospital, our team of experienced and compassionate doctors is committed
                                to delivering exceptional medical care. With expertise across multiple specialties,
                                they focus on accurate diagnosis, advanced treatment, and personalized attention
                                to ensure every patient receives the highest standard of healthcare.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="current">Doctors</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Doctors Section -->
        <section id="doctors" class="doctors section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4" style="background-color: #107A7C;">

                    @foreach ($doctors as $index => $doctor)
                        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 + $index * 100 }}">

                            <div class="doctor-card">

                                <div class="doctor-image">
                                    <img src="{{ $doctor->image ? asset('storage/' . $doctor->image) : asset('/img/DOCTORS/dpmale.jpg') }}"
                                        alt="{{ $doctor->name }}" class="img-fluid">

                                    {{-- <div class="doctor-overlay">
                                        <div class="social-links">
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                            <a href="#"><i class="bi bi-envelope"></i></a>
                                            <a href="#"><i class="bi bi-phone"></i></a>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="glass-doctor-card">
                                    <div class="glass-doctor-body">
                                        <h4 class="glass-doctor-name">{{ $doctor->name }}</h4>
                                        <span class="glass-doctor-specialty">{{ $doctor->specialization }}</span>

                                        <p class="glass-doctor-qualification">{{ $doctor->qualification }}</p>

                                        <div class="glass-doctor-meta">
                                            <div class="glass-doctor-department">
                                                <i class="bi bi-building"></i>
                                                <span>{{ $doctor->department->title ?? 'Department' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- /Doctors Section -->


    </main>

  <footer id="footer" class="footer-16 footer position-relative">

        <div class="container">

            <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-start">

                    <div class="col-lg-5">
                        <div class="brand-section">
                            <a href="{{ route('dashboard') }}"
                                class="logo footer-logo d-flex align-items-center mb-4">
                                <img src="{{ asset('img/logo1.jpg') }}" class="footer-logo" alt="Logo">
                            </a>
                            <p class="brand-description">Committed to delivering trusted healthcare services with
                                modern facilities,
                                experienced doctors, and a patient-first approach at Arimala Hospital.</p>

                            <div class="contact-info mt-5">
                                <div class="contact-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Arimala Hospital, Near Railway Station, Kanhangad, Kerala 671315</span>
                                </div>
                                <div class="contact-item">
                                    <i class="fa-solid fa-phone"></i>
                                    <span>+91 8281 240 560</span>

                                    <i class="fa-solid fa-phone"></i>
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
                                        <h6>Hospital</h6>
                                        <nav class="footer-nav">
                                            <a href="{{ route('about') }}">About Us</a>
                                            <a href="{{ route('doctors') }}">Our Doctors</a>
                                            <a href="{{ route('departments') }}">Departments</a>
                                            <a href="{{ route('about') }}">Facilities</a>
                                            <a href="{{ route('service') }}">Patient Care</a>
                                        </nav>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-3">
                                    <div class="nav-column">
                                        <h6>Services</h6>
                                        <nav class="footer-nav">
                                            <a href="#!">Emergency Care</a>
                                            <a href="#!">Outpatient Services</a>
                                            <a href="#!">Inpatient Care</a>
                                            <a href="#!">Laboratory Services</a>
                                            <a href="#!">Pharmacy</a>
                                        </nav>
                                    </div>
                                </div>


                                <div class="col-6 col-lg-3">
                                    <div class="nav-column">
                                        <h6>Resources</h6>
                                        <nav class="footer-nav">
                                            <a href="{{ route('service') }}">Health Tips</a>
                                            <a href="{{ route('about') }}">Patient Care</a>
                                            <a href="{{ route('blog') }}">Medical Articles</a>
                                            <a href="{{ route('faq') }}">FAQs</a>

                                        </nav>
                                    </div>
                                </div>


                                <div class="col-6 col-lg-3">
                                    <div class="nav-column">
                                        <h6>Connect</h6>
                                        <nav class="footer-nav">
                                            <a href="{{ route('ContactUs.index') }}">Contact Us</a>
                                            <a href="{{ route('ContactUs.index') }}">Emergency Contact</a>
                                            <a href="{{ route('doctors') }}">Find a Doctor</a>
                                            <a href="{{ route('ContactUs.index') }}">Get Directions</a>
                                            <a href="{{ route('ContactUs.index') }}">Help Desk</a>
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
                                    <small>© <a href="#" class="text-decoration-none"
                                            style="color: #ffccff;">2026 Arimala Hospital</a> -
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
