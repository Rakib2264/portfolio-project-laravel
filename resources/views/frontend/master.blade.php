<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary fw-bold m-0">Rakib Khan</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#skill" class="nav-item nav-link">Skills</a>
                <a href="#service" class="nav-item nav-link">Services</a>
            </div>
            <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-primary fw-bold m-0">ProMan</h1>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#project" class="nav-item nav-link">Projects</a>
                <a href="#team" class="nav-item nav-link">Team</a>
                 <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    @if ($banner)
                    <h1 class="display-3 mb-3">{{ $banner->name }}</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Full Stack Web Developer , Web Designer</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="{{ asset('backend/cv/' . $banner->cv) }}" class="btn btn-primary py-3 px-4 me-3 me-sm-5"
                            download>Download CV</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="{{ $banner->link }}" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-3 mb-0 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{ asset('backend/banner/' . $banner->banner_image) }}" alt="">
                </div>
                @endif
            </div>
        </div>
    </div>



    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio using Bootstrap utility classes -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/l1N1kpoR1eM?si=nCLFIMMPM0iLbHhE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                @foreach ($abouts as $about)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">{{ $about->howmanyyearex }}</h1>
                            <h5 class="mb-0">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0">of working experience as a web designer & developer</h3>
                    </div>
                    <p class="mb-4">{{ $about->des1 }}</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>{{ $about->des2 }}</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>{{ $about->des3 }}</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>{{ $about->des4 }}</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="#contact">Hire Me</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="{{ asset('backend/about/' . $about->imageone) }}" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="{{ asset('backend/about2/' . $about->imagetwo) }}" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">{{ $about->allclientsnum }}</h2>
                    </div>
                    <p class="mb-4">{{ $about->clientdes }}</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">{{ $about->allprojectsnum }}</h2>
                    </div>
                    <p class="mb-0">{{ $about->projectdes }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- About End -->


    <!-- Expertise Start -->
    User
 <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                @foreach ($skills as $skill)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>



                    <p class="mb-4">{{$skill->shortdes}}.</p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->html}}</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->css}}</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->bootstrap}}</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->js}}</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->jquery}}</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->ajax}}</h6>
                                    <h6 class="font-weight-bold">91%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->php}}</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->php}}</h6>
                                    <h6 class="font-weight-bold">88%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->php_oop}}</h6>
                                    <h6 class="font-weight-bold">98%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">{{$skill->restapi}}</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold">{{$skill->laravel}}</h6>
                                <h6 class="font-weight-bold">95%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill"
                                href="#tab-1">Education</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill"
                                href="#tab-2">Experience</button>
                        </li>
                    </ul>
                    <p class="mb-4">Become a successful IT professional by channeling my technical knowledge and skills to
                        ensure personal and professional growth and contribute to organizational prosperity.
                        Pursue job opportunities in a competitive environment that will challenge me to push my
                        boundaries and expand my knowledge in the field of informatics and allow me to add
                        value to the company's dynamics.</p>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4 mt-5">
                                <div class="col-sm-6">
                                    <h5>Bachelor of Science(CSE)</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2018 - 2022</p>
                                    <h6 class="mb-0">Daffodil International University.</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>HSC</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2015 - 2017</p>
                                    <h6 class="mb-0">Miapur Haji Jasimuddin High School & College</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>SSC</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - 2015</p>
                                    <h6 class="mb-0">Miapur Dakhil Madrasah</h6>
                                </div>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4 mt-5">
                                <div class="col-sm-6">
                                    <h5>Webcoder-IT Institute</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">8 + Month</p>
                                 </div>
                                 <div class="col-sm-6">
                                    <h5>Secure Ambit</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2 + Month</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Expertise End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Services</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="#contact">Hire Me</a>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($Services as $Service)
                <!-- First Service -->
                <div class="col-lg-6 wow fadeInUp">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-laptop-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-6">
                            <h4 class="mb-3">{{ $Service->design }}</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">{{ $Service->start }} &#2547;</span></h6>
                            <span>{{ $Service->design_des }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Service End -->


    <!-- Projects Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Projects Here</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($peojects  as $project)
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('backend/project/' . $project->image) }}" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1"
                                href="{{ asset('backend/project/' . $project->image) }}" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Projects End -->


    <!-- Team Start -->
    <div class="container-xxl py-6 pb-5" id="team">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Team Members</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="#contact">Contact Us</a>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($members as $member)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="{{ asset('backend/team/' . $member->image) }}" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>{{ $member->name }}</h5>
                                <span>{{ $member->occupation }}</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="#contact">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h4 class="fw-bold">Bashir Uddin School and College Mirpur-1 House 242/2</h4>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">01729542809</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">2264rakibkhan@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{ route('contactstore') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                                        required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject Optional">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="msg" placeholder="Leave a message here"
                                        id="message" style="height: 100px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact End -->


    <!-- Map Start -->
<!-- Map Start -->
<div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-xxl pt-5 px-0">
        <div class="embed-responsive embed-responsive-16by9 bg-dark">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.6726083647715!2d90.35745426962568!3d23.79403552577832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1cf6d8a9b17%3A0x853eb202c3a27edd!2sGreen%20Century%20Ltd.!5e0!3m2!1sen!2sbd!4v1699788396689!5m2!1sen!2sbd"
                class="embed-responsive-item" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- Map End -->

<!-- Copyright Start -->
<div class="container-fluid bg-dark text-white py-5 mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-md-center mb-3 mb-md-0">
                &copy; All Right Reserved By Rakib Khan
            </div>
        </div>
    </div>
</div>


    </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/typed/typed.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend') }}/js/main.js"></script>
</body>

</html>
