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

  <style>
    .page-title .heading {
      position: relative;
      background: url("{{ asset('img/background/hospital.jpg') }}") center center / cover no-repeat;
      padding: 100px 0;
      z-index: 1;
    }
  </style>
</head>

<body class="about-page">

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
        <a href="index.html" class="logo d-flex align-items-center gap-2">
          <img src="{{ asset('img/back-logo.png') }}" alt="Arimala Hospital" class="logo-img">
          {{-- <span class="logo-title">
            Arimala Hospital
          </span> --}}
        </a>


        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="active">About</a></li>
            <li><a href="{{ route('departments') }}">Departments</a></li>
            <li><a href="{{ route('service') }}">Services</a></li>
            <li><a href="{{ route('doctors') }}">Doctors</a></li>
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
            <div class="col-lg-8">
              <div class="glass-card">
                <h1 class="heading-title">About</h1>
                <p>
                  At Arimala Hospital, we prioritize the well-being of every patient. Our dedicated team
                  works tirelessly to provide personalized care, advanced treatments, and a supportive
                  environment. We believe in healing with compassion and building lasting trust with
                  the families we serve.
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
            <li class="current">About</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        @foreach($abouts as $about)

          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <div class="about-content">
                <h2>{{ $about->title }}</h2>
                <p class="lead">
                  {{ $about->description }}
                </p>

                <div class="stats-grid">
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="15000"
                      data-purecounter-duration="2">15000</span>
                    <span class="stat-label">Patients Treated</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="25"
                      data-purecounter-duration="2">25</span>
                    <span class="stat-label">Years Experience</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number" data-purecounter-start="0" data-purecounter-end="50"
                      data-purecounter-duration="2">50</span>
                    <span class="stat-label">Medical Specialists</span>
                  </div>
                </div><!-- End Stats Grid -->
              </div><!-- End About Content -->
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
              <div class="image-wrapper">
                <img src="{{ asset('storage/' . $about->image) }}" class="img-fluid main-image" alt="About Image">
                <div class="floating-image" data-aos="zoom-in" data-aos-delay="400">
                  <img src="{{ asset('img/logo.jpg') }}" class="img-fluid" alt="Medical team">
                </div>
              </div><!-- End Image Wrapper -->
            </div>
          </div>
        @endforeach

        <div class="values-section" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3>Our Core Values</h3>
              <p class="section-description">These principles guide everything we do in our commitment to exceptional
                healthcare</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-heart-pulse"></i>
                </div>
                <h4>Compassion</h4>
                <p>Providing care with empathy and understanding for every patient's unique needs and circumstances.</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h4>Excellence</h4>
                <p>Maintaining the highest standards of medical care through continuous learning and innovation.</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-people"></i>
                </div>
                <h4>Integrity</h4>
                <p>Building trust through honest communication and ethical practices in all our interactions.</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="value-item">
                <div class="value-icon">
                  <i class="bi bi-lightbulb"></i>
                </div>
                <h4>Innovation</h4>
                <p>Embracing cutting-edge technology and treatments to improve patient outcomes.</p>
              </div>
            </div>
          </div><!-- End Values Row -->
        </div><!-- End Values Section -->

      </div>

    </section><!-- /About Section -->

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

              <p class="brand-description">Committed to delivering trusted healthcare services with modern facilities,
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
                  <small>© <a href="#" class="text-decoration-none" style="color: #ffccff;">2026 Arimala Hospital</a> -
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