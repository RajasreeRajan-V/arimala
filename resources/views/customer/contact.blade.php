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

</head>

<body class="contact-page">

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
            <li><a href="{{ route('ContactUs.index') }}" class="active">Contact</a></li>
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
              <h1 class="heading-title">Contact</h1>
              <p class="mb-0">
                At Arimala Hospital, we are dedicated to providing comprehensive healthcare with
                compassion and expertise. Our experienced medical team ensures that every patient
                receives personalized attention, advanced treatments, and support for a healthier,
                happier life.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5">
          <div class="col-lg-5">
            <div class="contact-info-wrapper">
              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="100">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Our Address</h3>
                  <p>1842 Maple Avenue, Portland, Oregon 97204</p>
                </div>
              </div>

              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="200">
                <div class="info-icon">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="info-content">
                  <h3>Email Address</h3>
                  <p>arimalahospital@gmail.com</p>
                  <p>hrarimala@gmail.com</p>
                </div>
              </div>

              <div class="contact-info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <div class="info-content">
                  <h3>Hours of Operation</h3>
                  <p>Open 24/7</p>

                </div>
              </div>
            </div>
          </div>
          @if(session('success'))
            <div class="alert alert-success mb-4">
              {{ session('success') }}
            </div>
          @endif

          <div class="col-lg-7">
            <div class="contact-form-card" data-aos="fade-up" data-aos-delay="200">
              <h2>Send us a Message</h2>
              <p class="mb-4">Have questions or want to learn more? Reach out to us and our team will get back to you
                shortly.</p>

              <form action="{{ route('ContactUs.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                  <div class="col-md-6">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                      value="{{ old('name') }}" placeholder="Your Name">

                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>


                  <div class="col-md-6">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                      value="{{ old('email') }}" placeholder="Your Email">

                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>


                  <div class="col-12">
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                      value="{{ old('subject') }}" placeholder="Subject">

                    @error('subject')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>


                  <div class="col-12">
                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="6"
                      placeholder="Your Message">{{ old('message') }}</textarea>

                    @error('message')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid map-container" data-aos="fade-up" data-aos-delay="200">
        <div class="map-overlay"></div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
          width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </section><!-- /Contact Section -->

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
    <small>© <a href="#" class="text-decoration-none" style="color: #ffccff;">2026 Arimala Hospital</a> - All Rights Reserved.</small>
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