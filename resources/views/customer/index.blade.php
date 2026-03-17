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

    <!-- Make sure Font Awesome is loaded -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/get_in_touch.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">
    <link href="{{ asset('css/review.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/map.css') }}" rel="stylesheet"> --}}

    <style>
        /* Force dropdown background to black only on index page */
        #index-page #navmenu .dropdown ul {
            background-color: rgba(16, 122, 124, 0.12) !important;
        }

        #index-page #navmenu .dropdown ul li a {
            color: black !important;
            background-color: rgba(16, 122, 124, 0.12) !important;
        }

        /* Hover */
        #index-page #navmenu .dropdown ul li a:hover {
            background-color: #107A7C !important;
            color: white !important;
        }
    </style>


</head>

<!-- ===== MODAL ===== -->
<div class="modal-overlay" id="modal">
    <div class="custom-modal">
        <span class="close-btn" id="closeModal">&times;</span>

        <div class="hospital-brand">
            <img src="img/back-logo.png" alt="Arimala Hospital Logo">
            <p class="hospital-desc">
                Arimala Hospital is committed to delivering compassionate,
                patient-centered healthcare with advanced medical facilities
                and experienced specialists you can trust.
            </p>
        </div>

        <h3>Get In Touch</h3>

        <form id="contactModalForm" action="{{ route('ContactUs.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <input type="hidden" name="subject" value="Get In Touch">
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="form-group">
                <input type="tel" name="phone" placeholder="Phone">
            </div>

            <div class="form-group">
                <textarea name="message" rows="3" placeholder="Your Message" required></textarea>
            </div>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</div>

<body class="index-page" id="index-page">
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
                        <li><a href="{{ route('dashboard') }}" class="active">Home</a></li>
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
    <!-- Lottie container -->

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <br><br><br>
                            <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
                                <div class="badge-item">
                                    <i class="bi bi-shield-check"></i>
                                    <span>Accredited</span>
                                </div>
                                <div class="badge-item">
                                    <i class="bi bi-clock"></i>
                                    <span>24/7 Emergency</span>
                                </div>
                                <div class="badge-item">
                                    <i class="bi bi-star-fill"></i>
                                    <span>4.9/5 Rating</span>
                                </div>
                            </div>

                            <h1 data-aos="fade-right" data-aos-delay="300">
                                Excellence in <span class="highlight">Healthcare</span> With Compassionate Care
                            </h1>

                            <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
                                Providing compassionate, patient-centered healthcare with advanced medical technology
                                and a team of
                                experienced specialists. We are committed to delivering safe, reliable, and personalized
                                treatment to
                                support your health and well-being at every stage of life.
                            </p>

                            <div class="hero-stats mb-4" data-aos="fade-right" data-aos-delay="500">
                                <div class="stat-item">
                                    <h3><span data-purecounter-start="0" data-purecounter-end="67"
                                            data-purecounter-duration="2" class="purecounter"></span>+</h3>
                                    <p>Years Experience</p>
                                </div>
                                <div class="stat-item">
                                    <h3><span data-purecounter-start="0" data-purecounter-end="5000"
                                            data-purecounter-duration="2" class="purecounter"></span>+</h3>
                                    <p>Patients Treated</p>
                                </div>
                                <div class="stat-item">
                                    <h3><span data-purecounter-start="0" data-purecounter-end="50"
                                            data-purecounter-duration="2" class="purecounter"></span>+</h3>
                                    <p>Medical Experts</p>
                                </div>
                            </div>



                            <div class="emergency-contact" data-aos="fade-right" data-aos-delay="700">
                                <div class="emergency-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="emergency-info">
                                    <small>Emergency Hotline</small>
                                    <strong>+91 8281 240 560</strong>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">

                            <div class="main-image image-slider">
                                <!-- Slide 1 -->
                                <img src="{{ asset('img/arimala-slide.jpg') }}" alt="Modern Healthcare Facility"
                                    class="img-fluid slide active">

                                <!-- Slide 2 -->
                                <img src="{{ asset('img/arimala-slide.jpg') }}"
                                    alt="Advanced Hospital Infrastructure" class="img-fluid slide">
                            </div>
                            <div class="background-elements">
                                <div class="element element-1"></div>
                                <div class="element element-2"></div>
                                <div class="element element-3"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Popper Animation -->
            <!-- Left Hero Popper -->
            <div class="hero-popper popper-left" id="heroPopperLeft">
                <iframe src="https://lottie.host/embed/36c5a82a-fa2c-4b1f-bbd8-415e665b23f6/2435EIhn07.lottie"
                    frameborder="0" allowfullscreen>
                </iframe>
            </div>

            <!-- Right Hero Popper -->
            <div class="hero-popper popper-right" id="heroPopperRight">
                <iframe src="https://lottie.host/embed/36c5a82a-fa2c-4b1f-bbd8-415e665b23f6/2435EIhn07.lottie"
                    frameborder="0" allowfullscreen>
                </iframe>
            </div>
        </section>

        <!-- Home About Section -->
        <section id="home-about" class="home-about section"
            style="
  position: relative;
  background-image:
    url('{{ asset('img/background/hospital.jpg') }}');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
">
            <div class="container glassy-box" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
                        <div class="about-content">
                            <h2>Compassionate Care, Advanced Medicine</h2>

                            {{-- class="section-heading" --}}
                            <p>
                                {{-- class="lead-text" --}}
                                For more than two decades, Arimala Hospital has been dedicated to providing trusted
                                healthcare by
                                combining
                                advanced medical technology with compassionate, personalized patient care.
                            </p>
                            <p>
                                Our team of experienced doctors, nurses, and healthcare professionals work together to
                                deliver complete,
                                patient-centered care. From preventive health services to advanced treatments, we are
                                committed to
                                maintaining
                                the highest standards of medical excellence while ensuring comfort, safety, and trust at
                                every step of
                                care.
                            </p>

                            <div class="stats-grid">
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0"
                                        data-purecounter-end="15000" data-purecounter-duration="1"></div>
                                    <div class="stat-label">Patients Served</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0"
                                        data-purecounter-end="25" data-purecounter-duration="1"></div>
                                    <div class="stat-label">Years of Excellence</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number purecounter" data-purecounter-start="0"
                                        data-purecounter-end="15" data-purecounter-duration="1"></div>
                                    <div class="stat-label">Medical Specialists</div>
                                </div>
                            </div>

                            <div class="cta-section">
                                <a href="{{ route('about') }}" class="btn-primary">Learn More About Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-visual">
                            <div class="main-image">
                                <img src="{{ asset('img/arimalalabel.png') }}" alt="Modern medical facility"
                                    class="img-fluid">
                            </div>
                            <div class="floating-card">
                                <div class="card-content">
                                    <div class="icon">
                                        <i class="bi bi-heart-pulse"></i>
                                    </div>
                                    <div class="card-text">
                                        <h4>24/7 Emergency Care</h4>
                                        <p>Always here when you need us most</p>
                                    </div>

                                    <div class="experience-badge">
                                        <div class="badge-content">
                                            <span class="years">67+</span>
                                            <span class="text">Years of Trusted Care</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Home About Section -->

        <!-- Featured Departments Section -->
        <section id="featured-departments" class="featured-departments section"
            style="
    position: relative;
    background-image:
    linear-gradient(rgba(16,122,124,0.35), rgba(16,122,124,0.35)),
    url('{{ asset('img/background/heart-doc.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Featured Departments</h2>
                <p>Explore our specialized medical departments</p>
            </div>

            <div class="container glassy-box" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    @php
                        $icons = [
                            'bi-shield-plus',
                            'bi-people',
                            'bi-activity',
                            'bi-heart-pulse',
                            'bi-cpu',
                            'bi-lungs',
                            'bi-eye',
                            'bi-bandaid',
                        ];
                    @endphp

                    @foreach ($departments as $department)
                        @php
                            $iconIndex = $loop->index % count($icons);
                        @endphp

                        <div class="col-lg-4 doctor-card" data-aos="fade-up">
                            <div class="department-highlight">

                                <div class="highlight-icon">
                                    <i class="bi {{ $icons[$iconIndex] }}"></i>
                                </div>

                                <h4>{{ $department->title }}</h4>

                                <p>
                                    {{ $department->description }}
                                </p>

                                @if ($department->image)
                                    <div class="dept-img-wrap">
                                        <img src="{{ asset('storage/' . $department->image) }}"
                                            alt="{{ $department->title }}">
                                    </div>
                                @endif
                                <a href="{{ route('departments') }}" class="highlight-cta">
                                    Learn More
                                </a>

                            </div>
                        </div>
                    @endforeach

                </div>


                <!-- Emergency Banner -->
                <div class="emergency-banner mt-5" data-aos="fade-up">
                    <div class="row align-items-center">

                        <div class="col-lg-8">
                            <div class="emergency-content">
                                <h3>Emergency Services Available 24/7</h3>
                                <p>
                                    Our emergency department is equipped with advanced
                                    medical technology and experienced doctors ready
                                    to provide immediate care.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 text-lg-end">
                            <a href="tel:918281240560" class="emergency-btn">
                                <i class="bi bi-telephone-fill"></i>
                                Call Emergency: +91 8281 240 560
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section"
            style="
    position: relative;
    background-image: url('{{ asset('img/bg/career1.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Featured Services</h2>
                <p>
                    Arimala Hospital delivers advanced medical care with compassion, combining
                    expert doctors, modern technology, and patient-centered treatment to ensure
                    the best health outcomes.
                </p>
            </div><!-- End Section Title -->


            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-0">

                    <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                        <div class="featured-service-main">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('img/health/consultation-4.webp') }}"
                                    alt="Premier Healthcare Services" class="img-fluid" loading="lazy">
                                <div class="service-overlay">
                                    <div class="service-badge">
                                        <i class="bi bi-heart-pulse"></i>
                                        <span>Emergency Care</span>
                                    </div>
                                </div>
                            </div>
                            <div class="frost-service-panel">
                                <div class="frost-service-inner">
                                    <h2 class="frost-title">Comprehensive Healthcare at Arimala Hospital</h2>

                                    <p class="frost-description">
                                        Arimala Hospital is committed to delivering high-quality healthcare with
                                        compassion
                                        and professionalism. Our experienced doctors, modern medical facilities, and
                                        patient-focused approach ensure reliable diagnosis, effective treatment, and
                                        continuous care for every patient.
                                    </p>

                                    <a href="{{ route('service') }}" class="frost-btn">Explore Our Services</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                        <div class="services-sidebar">

                            @php
                                $icons = ['bi-capsule', 'bi-bandaid', 'bi-activity', 'bi-heart-pulse', 'bi-hospital'];
                            @endphp

                            @foreach ($services->take(3) as $service)
                                @php
                                    $iconIndex = $loop->index % count($icons);
                                @endphp

                                <div class="service-item service-card" data-aos="fade-up"
                                    data-aos-delay="{{ 400 + $loop->index * 100 }}">

                                    <div class="service-icon-wrapper">
                                        <i class="bi {{ $icons[$iconIndex] }}"></i>
                                    </div>

                                    <div class="service-info">
                                        <h4>{{ $service->title }}</h4>

                                        <p>
                                            {{ $service->description }}
                                        </p>

                                        <a href="{{ route('service') }}" class="service-link">
                                            Learn More
                                        </a>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>


                </div>

                <div class="specialties-grid" data-aos="fade-up" data-aos-delay="300">
                    <div class="swiper specialties-swiper">
                        <div class="swiper-wrapper">

                            @foreach ($services as $service)
                                <div class="swiper-slide">
                                    <div class="specialty-card">

                                        <div class="specialty-image">
                                            @if ($service->image)
                                                <img src="{{ asset('storage/' . $service->image) }}"
                                                    alt="{{ $service->title }}" loading="lazy">
                                            @else
                                                <img src="{{ asset('img/health/emergency-1.webp') }}" alt="Service"
                                                    loading="lazy">
                                            @endif
                                        </div>

                                        <div class="specialty-content">
                                            <h4>{{ $service->title }}</h4>
                                            <span style="color: black">{{ $service->description }}</span>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                        {{-- Navigation arrows --}}
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        {{-- Pagination dots --}}
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>

        </section><!-- /Featured Services Section -->
<!-- Reviews Section -->

<section id="reviews" class="reviews-section section"  style="
    position: relative;
    background-image: url('{{ asset('img/bg/for-review.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">

    <div class="container section-title" data-aos="fade-up">
        <h2>Patient Reviews</h2>
        <p>What our patients say about their experience with our doctors and services</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="reviews-carousel-wrapper">

            <!-- Carousel Track -->
<div class="reviews-track-container">
    <div class="reviews-track" id="reviewsTrack">

        @foreach($reviews as $review)
        <div class="review-card">
            <div class="review-top">
                <div class="quote-icon">
                    <i class="bi bi-quote"></i>
                </div>

                <div class="stars">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $review->rating)
                            <i class="bi bi-star-fill"></i>
                        @else
                            <i class="bi bi-star"></i>
                        @endif
                    @endfor
                </div>
            </div>

            <p class="review-text">
                "{{ $review->description }}"
            </p>

            <div class="reviewer-info">
                <div class="reviewer-avatar">
                    <span>{{ strtoupper(substr($review->name,0,1)) }}</span>
                </div>

                <div class="reviewer-details">
                    <h5>{{ $review->name }}</h5>
                    <span>{{ $review->department ?? 'Patient' }}</span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

            <!-- Navigation Arrows -->
            <button class="carousel-nav prev" id="reviewsPrev" aria-label="Previous">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="carousel-nav next" id="reviewsNext" aria-label="Next">
                <i class="bi bi-chevron-right"></i>
            </button>

        </div>

        <!-- Dots -->
        <div class="carousel-dots" id="reviewsDots"></div>

    </div>

</section><!-- /Reviews Section -->
       
<!-- Find A Doctor Section -->
        <section id="find-a-doctor" class="find-a-doctor section"
            style="
    position: relative;
    background-image: url('{{ asset('img/bg/abstract-bg-4.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Find A Doctor</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-8 text-center">
                        <div class="search-section">
                            <h3 class="search-title">Find Your Perfect Healthcare Provider</h3>
                            <p class="search-subtitle">Search through our comprehensive directory of experienced
                                medical professionals
                            </p>
                            <form class="search-form" action="{{ route('dashboard') }}" method="GET">
                                <input type="hidden" name="searched" value="1">
                                <div class="search-input-group">

                                    <div class="input-wrapper">
                                        <i class="bi bi-person"></i>
                                        <input type="text" class="form-control" name="doctor_name"
                                            placeholder="Enter doctor name" value="{{ request('doctor_name') }}">
                                    </div>

                                    <div class="select-wrapper">
                                        <i class="bi bi-heart-pulse"></i>
                                        <select class="form-select" name="specialty">
                                            <option value="">All Specialties</option>

                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}"
                                                    {{ request('specialty') == $department->id ? 'selected' : '' }}>
                                                    {{ $department->title }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <button type="submit" class="search-btn">
                                        <i class="bi bi-search"></i>
                                        Find Doctors
                                    </button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="doctors-grid" data-aos="fade-up" data-aos-delay="300">

                    @foreach ($doctors as $doctor)
                        <div class="doctor-profile" data-aos="zoom-in">

                            <div class="profile-header">
                                <div class="doctor-avatar">
                                    <img src="{{ asset('storage/' . $doctor->image) }}" alt="{{ $doctor->name }}"
                                        class="img-fluid">

                                    <div class="status-indicator available"></div>
                                </div>

                                <div class="doctor-details">
                                    <h4>{{ $doctor->name }}</h4>

                                    <span class="specialty-tag">
                                        {{ $doctor->specialization }}
                                    </span>

                                    <div class="experience-info">
                                        <i class="bi bi-mortarboard"></i>
                                        <span>{{ $doctor->qualification }}</span>
                                    </div>

                                    <div class="department-info">
                                        <i class="bi bi-hospital"></i>
                                        <span>{{ $doctor->department->title ?? 'Department' }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="action-buttons">
                                <a href="{{ route('doctors') }}" class="btn-secondary">
                                    View Details
                                </a>
                            </div>

                        </div>
                    @endforeach

                </div>

                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="700">
                    <a href="{{ route('doctors') }}" class="btn-view-all">
                        View All Doctors
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>

        </section><!-- /Find A Doctor Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section"
            style="
    position: relative;
    background-image: url('{{ asset('img/bg/career2.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="medical-glass-card"> --}}
                <div class="hero-content">
                    <div class="row align-items-center medical-glass-card">

                        <div class="col-lg-6">
                            <div class="content-wrapper" data-aos="fade-up" data-aos-delay="200">
                                <h1>Excellence in Medical Care, Every Day</h1>
                                <p>
                                    Arimala Hospital is committed to delivering compassionate, high-quality healthcare
                                    with a
                                    patient-first approach.
                                    Our team of experienced doctors and medical professionals use advanced technology to
                                    provide accurate
                                    diagnosis,
                                    effective treatment, and comprehensive care for every patient.
                                </p>


                                <div class="cta-wrapper">
                                    <a href="{{ route('ContactUs.index') }}" class="primary-cta">
                                        <span>Contact us</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="{{ route('service') }}" class="secondary-cta">
                                        <span>Explore Services</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="image-container" data-aos="fade-left" data-aos-delay="300">
                                <img src="{{ asset('img/health/facilities-9.webp') }}" alt="Medical Excellence"
                                    class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="features-section">

                    <div class="row g-0">

                        <div class="col-lg-4">
                            {{-- feature-card-gap --}}
                            <div class="feature-block" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h4>Advanced Medical Care</h4>
                                <p>Arimala Hospital provides modern medical facilities with advanced diagnostic and
                                    treatment technologies to ensure accurate care and better patient outcomes.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="feature-block" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <h4>24/7 Emergency Services</h4>
                                <p>Our hospital is equipped to provide round-the-clock emergency care with dedicated
                                    doctors, nurses, and support staff ready to serve patients anytime.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="feature-block" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h4>Experienced Medical Team</h4>
                                <p>Arimala Hospital is supported by a team of skilled doctors, nurses, and healthcare
                                    professionals committed to providing compassionate and quality healthcare.</p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="contact-block" style="border:2px solid #000; padding:30px; border-radius:10px;">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="contact-content" data-aos="fade-up" data-aos-delay="200">
                                <h4>Need Immediate Medical Assistance?</h4>
                                <p style="color: #000 !important;">Our emergency response team is available around the
                                    clock to provide immediate
                                    medical support when
                                    you need it most.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="contact-actions" data-aos="fade-up" data-aos-delay="300">
                                <a href="tel:918281240560" class="emergency-call">
                                    <i class="bi bi-telephone"></i>
                                    <span>+91 8281 240 560</span>
                                </a>
                                <a href="{{ route('ContactUs.index') }}" class="contact-link">Find Location</a>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </section>
     <section class="location-section" style="
    position: relative;
    background-image: url('{{ asset('img/bg/for-review.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  ">
  <div class="location-container">

    <div class="location-map-box">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.943989537925!2d75.0832076748299!3d12.319556887939084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba47c6ac0074653%3A0x775bf502fbe100e!2sArimala%20Hospital!5e0!3m2!1sen!2sin!4v1773735447267!5m2!1sen!2sin"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen
        loading="lazy">
      </iframe>
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
                            <a href="{{ route('dashboard') }}" class="logo footer-logo d-flex align-items-center mb-4">
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

    <div id="chatFloatingWrap">

        <!-- Social Icons FIRST (so they appear above the chat button) -->
        <div class="social-icons">
            <a href="https://wa.me/919XXXXXXXXX" target="_blank" class="whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>

            <a href="https://instagram.com/your_instagram" target="_blank" class="instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>

        <!-- Lottie Chat Button -->
        <div id="lottieChatBtn">
            <iframe src="https://lottie.host/embed/7ed012d7-ed41-492b-8ac8-82c35cc06a6e/oBxttvF3cs.lottie"></iframe>
        </div>

    </div>

    <!-- Chatbox (separate, outside the floating wrap) -->
    <div id="chatBox">
        <div class="chat-header">
            <span>Chatbot</span>
            <button id="closeChat">✖</button>
        </div>

        <div id="chatMessages" class="chat-body"></div>

        <div class="chat-input">
            <input type="text" id="userInput" placeholder="Type your message..." />
            <button id="sendBtn" aria-label="Send message">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>


    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/chatbot.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".image-slider .slide");
            let currentIndex = 0;

            setInterval(() => {
                slides[currentIndex].classList.remove("active");
                currentIndex = (currentIndex + 1) % slides.length;
                slides[currentIndex].classList.add("active");
            }, 4000);
        });
    </script>
    <!-- Include Swiper JS (add in <head> or before </body>) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.specialties-swiper', {
                slidesPerView: 4, // Show 4 cards
                spaceBetween: 24, // Gap between cards
                loop: true, // Infinite loop
                autoplay: {
                    delay: 3000, // Auto-swipe every 3 seconds
                    disableOnInteraction: false, // Resume after user swipes
                },
                navigation: {
                    prevEl: '.swiper-button-prev',
                    nextEl: '.swiper-button-next',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                // Responsive breakpoints
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    576: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    992: {
                        slidesPerView: 4,
                    },
                },
            });
        });
    </script>
    @if (request('searched'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    document.getElementById('find-a-doctor')
                        .scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                }, 300);
            });
        </script>
    @endif
</body>

</html>
