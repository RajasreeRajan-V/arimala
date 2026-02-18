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
    <link href="{{ asset('css/career-apply-section.css') }}" rel="stylesheet">

</head>

<body class="doctors-page">
    <main class="main">

        <!-- Page Title -->
        <div class="page-title d-flex justify-content-between align-items-center px-4 py-3">

            <div class="page-logo">
                <img src="{{ asset('img/back-logo.png') }}" alt="Hospital Logo">
            </div>
            {{-- <h2 class="mb-0">Employment Application</h2> --}}

            <a href="{{ url()->previous() }}" class="btn-back-home">
                <i class="bi bi-arrow-left"></i>
                Back
            </a>
        </div>

        <section class="career-apply-section py-5">
            <div class="container">
                <div class="application-form-card">

                    <!-- Form Header -->
                    <div class="form-header text-center mb-5">
                        <h2 class="form-title">Employment Application</h2>
                        <p class="form-subtitle">Fill out the form below and we'll get back to you soon</p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success alert-modern">
                            <i class="bi bi-check-circle me-2"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="career_id" value="{{ $career->id }}">

                        <div class="row g-4">

                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="bi bi-person-fill label-icon"></i>
                                        Full Name
                                    </label>
                                    <input type="text" name="name" class="form-control-modern" placeholder="John Doe"
                                        required>
                                    @error('name')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="bi bi-envelope-fill label-icon"></i>
                                        Email
                                    </label>
                                    <input type="email" name="email" class="form-control-modern"
                                        placeholder="john@example.com" required>

                                    <!-- Validation Error for Email -->
                                    @error('email')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="bi bi-telephone-fill label-icon"></i>
                                        Phone
                                    </label>
                                    <input type="text" name="phone" class="form-control-modern"
                                        placeholder="+91 98765 43210" required>

                                    <!-- Validation Error for Phone -->
                                    @error('phone')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <!-- Position -->
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="bi bi-briefcase-fill label-icon"></i>
                                        Position Applying For
                                    </label>
                                    <input type="text" name="position" class="form-control-modern"
                                        value="{{ $career->position }}" readonly>

                                    @error('position')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Highest Qualification -->
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="bi bi-mortarboard-fill label-icon"></i>
                                        Highest Qualification
                                    </label>
                                    <input type="text" name="qualification" class="form-control-modern"
                                        placeholder="Master's / Diploma / Degree" required>
                                    @error('qualification')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Years of Experience -->
                            <div class="col-md-6">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="bi bi-award-fill label-icon"></i>
                                        Years of Experience
                                    </label>
                                    <select name="experience" class="form-control-modern" required>
                                        <option value="">Select experience...</option>
                                        <option value="0-1">0-1 years</option>
                                        <option value="1-3">1-3 years</option>
                                        <option value="3-5">3-5 years</option>
                                        <option value="5-10">5-10 years</option>
                                        <option value="10+">10+ years</option>
                                    </select>
                                    @error('experience')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Upload Resume -->
                            <div class="col-12">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="bi bi-file-earmark-pdf-fill label-icon"></i>
                                        Upload Resume (PDF, optional)
                                    </label>
                                    <div class="file-upload-wrapper">
                                        <input type="file" name="resume" id="resume" class="file-input-modern"
                                            accept=".pdf,.doc,.docx">
                                        <label for="resume" class="file-label-modern">
                                            <i class="bi bi-cloud-upload me-2"></i>
                                            <span class="file-text">Choose File</span>
                                            <span class="file-name">No file chosen</span>
                                        </label>
                                    </div>
                                    @error('resume')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Cover Letter -->
                            <div class="col-12">
                                <div class="form-group-modern">
                                    <label class="form-label-modern">
                                        <i class="bi bi-chat-left-text-fill label-icon"></i>
                                        Cover Letter / Additional Information (optional)
                                    </label>
                                    <textarea name="cover_letter" rows="5" class="form-control-modern"
                                        placeholder="Tell us why you'd be a great fit..."></textarea>
                                    @error('cover_letter')
                                        <span class="error-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 text-center">
                                <button type="submit" class="btn-submit-modern">
                                    <i class="bi bi-send me-2"></i>
                                    Submit Application
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </section>

        <script>
            // File input handler
            document.addEventListener('DOMContentLoaded', function () {
                const fileInput = document.getElementById('resume');
                const fileLabel = document.querySelector('.file-label-modern');
                const fileName = fileLabel.querySelector('.file-name');

                if (fileInput) {
                    fileInput.addEventListener('change', function (e) {
                        if (this.files && this.files.length > 0) {
                            fileName.textContent = this.files[0].name;
                            fileLabel.classList.add('file-selected');
                        } else {
                            fileName.textContent = 'No file chosen';
                            fileLabel.classList.remove('file-selected');
                        }
                    });
                }
            });
        </script>

    </main>

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