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

  <!-- =======================================================
  * Template Name: Clinic
  * Template URL: https://bootstrapmade.com/clinic-bootstrap-template/
  * Updated: Jul 23 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="services-page">

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
            <li><a href="{{ route('service') }}" class="active">Services</a></li>
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
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Services</h1>
              <p class="mb-0">

                At Arimala Hospital, we offer a wide range of healthcare services to meet the needs
                of every patient. From general check-ups and specialized treatments to advanced
                diagnostics and emergency care, our team is committed to delivering safe,
                compassionate, and high-quality medical care.

              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/cardiology-2.webp" alt="Cardiology Services" class="img-fluid">
                <div class="service-overlay">
                  <i class="fas fa-heartbeat"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Cardiology</h3>
                <p>Comprehensive heart care with advanced diagnostic tools and treatment options for cardiovascular
                  conditions.</p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> ECG Testing</span>
                  <span class="feature-item"><i class="fas fa-check"></i> Heart Surgery</span>
                </div>
                <a href="service-details.html" class="service-btn">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/neurology-3.webp" alt="Neurology Services" class="img-fluid">
                <div class="service-overlay">
                  <i class="fas fa-brain"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Neurology</h3>
                <p>Expert neurological care for brain and nervous system disorders with state-of-the-art imaging
                  technology.</p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> MRI Scans</span>
                  <span class="feature-item"><i class="fas fa-check"></i> Stroke Care</span>
                </div>
                <a href="service-details.html" class="service-btn">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/orthopedics-1.webp" alt="Orthopedics Services" class="img-fluid">
                <div class="service-overlay">
                  <i class="fas fa-bone"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Orthopedics</h3>
                <p>Specialized bone and joint treatment including sports medicine and reconstructive surgery procedures.
                </p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Joint Replacement</span>
                  <span class="feature-item"><i class="fas fa-check"></i> Sports Medicine</span>
                </div>
                <a href="service-details.html" class="service-btn">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/pediatrics-4.webp" alt="Pediatrics Services" class="img-fluid">
                <div class="service-overlay">
                  <i class="fas fa-child"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Pediatrics</h3>
                <p>Dedicated healthcare for children from infancy through adolescence with specialized treatment
                  protocols.</p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Well-Child Visits</span>
                  <span class="feature-item"><i class="fas fa-check"></i> Immunizations</span>
                </div>
                <a href="service-details.html" class="service-btn">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/emergency-2.webp" alt="Emergency Services" class="img-fluid">
                <div class="service-overlay">
                  <i class="fas fa-ambulance"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Emergency Care</h3>
                <p>24/7 emergency medical services with rapid response teams and critical care capabilities.</p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Trauma Center</span>
                  <span class="feature-item"><i class="fas fa-check"></i> Critical Care</span>
                </div>
                <a href="service-details.html" class="service-btn">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
            <div class="service-item">
              <div class="service-image">
                <img src="assets/img/health/laboratory-3.webp" alt="Laboratory Services" class="img-fluid">
                <div class="service-overlay">
                  <i class="fas fa-microscope"></i>
                </div>
              </div>
              <div class="service-content">
                <h3>Laboratory Testing</h3>
                <p>Advanced diagnostic laboratory services with comprehensive testing panels and rapid result delivery.
                </p>
                <div class="service-features">
                  <span class="feature-item"><i class="fas fa-check"></i> Blood Tests</span>
                  <span class="feature-item"><i class="fas fa-check"></i> Pathology</span>
                </div>
                <a href="service-details.html" class="service-btn">
                  <span>Learn More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

  </main>

  <footer id="footer" class="footer-16 footer position-relative">

    <div class="container">

      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-start">

          <div class="col-lg-5">
            <div class="brand-section">
              <a href="index.html" class="logo d-flex align-items-center mb-4">
                <img src="{{ asset('img/logo1.jpg') }}" alt="Clinic Logo" class="me-2 styled-logo">
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
                <p>
                  Crafted &amp; Designed by
                  <span class="sitename" style="color: #ffccff;">Astra Software Solutions</span>
                </p>

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