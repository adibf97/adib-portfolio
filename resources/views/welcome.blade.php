@extends('layouts.home')

@section('content')

        <!-- Page Hero -->
        <header class="header" id="home" style="background: linear-gradient(120deg, #e0f7fa 0%, #fff1eb 100%); padding-top: 20px; padding-bottom: 0; position:relative; overflow:hidden; min-height:300px;">
            <div class="container py-3 py-md-5 position-relative" style="display: flex; align-items: center; justify-content: flex-start; min-height: 440px;">
                <div class="infos" style="flex: 1.25; z-index:2;">
                    <span class="d-inline-block mb-2 hero-badge">
                        <i class="ti-sparkles" style="margin-right:7px; color:#fbc02d"></i>
                        Hello, I'm
                    </span>
                    <h1 class="mb-1 mt-2 hero-title">
                        Adib Farhan
                        <span class="wave-emoji">👋</span>
                    </h1>
                    <h4 class="mb-3 hero-subtitle">Full Stack Developer</h4>
                    <p class="hero-description">
                        I build elegant, robust web products for digital transformation &amp; public sector innovation.
                    </p>
                    <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center mb-4 hero-buttons">
                        <a href="#portfolio" class="btn btn-primary mb-2 mb-sm-0">
                            <i class="ti-rocket mr-2"></i> View Projects
                        </a>
                        <a href="mailto:adibf97@gmail.com" class="btn btn-outline-dark">
                            <i class="ti-email mr-2"></i> Contact Me
                        </a>
                    </div>
                    <div class="socials mt-2">
                        <a class="social-item" href="https://www.linkedin.com/in/muhammad-adib-farhan/" target="_blank"><i class="ti-linkedin"></i></a>
                        <a class="social-item" href="https://github.com/adibf97" target="_blank"><i class="ti-github"></i></a>
                        <a class="social-item" href="https://twitter.com/Adibun97" target="_blank"><i class="ti-twitter"></i></a>
                        <a class="social-item" href="https://www.instagram.com/adibfarhan97/" target="_blank"><i class="ti-instagram"></i></a>
                    </div>
                </div>
                <!-- man.svg illustration placed right beside the info block, now much bigger -->
                <div class="img-holder d-none d-md-flex align-items-center justify-content-center">
                    <img
                        src="{{ asset('assets/imgs/man.svg') }}"
                        alt="Adib Farhan Illustration"
                        class="hero-illustration"
                    >
                </div>
            </div>
            <!-- Projects/Widget Bottom Card -->
            <div class="hero-widget-container">
                <div class="widget">
                    <span class="widget-number">6+</span>
                    <p class="widget-text">Projects Completed</p>
                </div>
            </div>
            <!-- Nice-looking SVG circle background for color decoration -->
            <img src="{{ asset('assets/imgs/hero-circ-bg.svg') }}" alt="" class="hero-bg-decoration">
        </header>
        <style>
            @keyframes popBounce {
                0%   { transform: scale(1) rotate(-5deg);}
                65%  { transform: scale(1.24) rotate(6deg);}
                100% { transform: scale(1.08) rotate(-3deg);}
            }

            /* Hero Section Styles */
            .hero-badge {
                background: #f2f8fd;
                color: #1d83c8;
                font-size: 0.85rem;
                font-weight: 600;
                padding: 6px 16px 6px 14px;
                border-radius: 20px;
            }

            .hero-title {
                font-size: 2rem;
                font-weight: 800;
                color: #123d59;
                letter-spacing: -1px;
                line-height: 1.2;
            }

            .wave-emoji {
                display: inline-block;
                animation: popBounce 1.2s infinite alternate;
                font-size: 1.5rem;
                line-height: 1;
                margin-left: 8px;
            }

            .hero-subtitle {
                color: #1575c6;
                font-weight: 600;
                letter-spacing: 0.8px;
                font-size: 1.1rem;
            }

            .hero-description {
                font-size: 0.95rem;
                color: #526477;
                max-width: 420px;
                margin-bottom: 1.3rem;
            }

            .hero-buttons {
                gap: 10px;
            }

            .hero-buttons .btn {
                font-weight: 600;
                border-radius: 28px;
                padding: 10px 24px 10px 20px;
                white-space: nowrap;
                font-size: 0.9rem;
            }

            .hero-buttons .btn-primary {
                background: linear-gradient(92deg, #1697bf 0%, #47c4ea 100%) !important;
                border: none;
                color: #fff;
                box-shadow: 0 2px 12px #1d83c818;
            }

            .hero-buttons .btn-outline-dark {
                border: 1.5px solid #3b3b4f;
                color: #18425d !important;
                background: #fff !important;
            }

            .socials {
                display: flex;
                gap: 8px;
                flex-wrap: wrap;
            }

            .social-item {
                color: #222c36;
                background: #f1fbfa;
                border-radius: 50%;
                width: 38px;
                height: 38px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 1.1rem;
                text-decoration: none;
                transition: all 0.17s;
            }

            .social-item:hover {
                background: #d7f7fa !important;
                transform: translateY(-2px) scale(1.09);
                box-shadow: 0 2px 10px #47c4ea19;
            }

            .hero-illustration {
                display: block;
                max-width: 100%;
                width: 100%;
                height: auto;
                filter: drop-shadow(0 21px 60px #1d83c822);
                opacity: 0.97;
                z-index: 2;
                pointer-events: none;
            }

            .hero-widget-container {
                position: absolute;
                left: 0;
                right: 0;
                bottom: 18px;
                display: flex;
                justify-content: center;
                z-index: 20;
                width: 100%;
                pointer-events: auto;
            }

            .widget {
                background: #fff;
                border-radius: 15px;
                box-shadow: 0 8px 24px #18425d12;
                padding: 20px 30px;
                min-width: 200px;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .widget-number {
                font-size: 1.6rem;
                font-weight: 900;
                color: #123d59;
            }

            .widget-text {
                margin-bottom: 0;
                font-size: 0.9rem;
                color: #666;
                letter-spacing: 0.5px;
                font-weight: 500;
            }

            .hero-bg-decoration {
                position: absolute;
                right: 8vw;
                top: 10px;
                width: 27vw;
                min-width: 120px;
                max-width: 340px;
                z-index: 0;
                opacity: 0.45;
                pointer-events: none;
            }

            /* Tablet and Desktop */
            @media (min-width: 768px) {
                .hero-title {
                    font-size: 2.5rem;
                    letter-spacing: -2px;
                }

                .wave-emoji {
                    font-size: 2rem;
                    margin-left: 9px;
                }

                .hero-subtitle {
                    font-size: 1.36rem;
                }

                .hero-description {
                    font-size: 1.09rem;
                }

                .hero-badge {
                    font-size: 0.92rem;
                    padding: 7px 20px 7px 16px;
                }

                .hero-buttons .btn {
                    padding: 10px 28px 10px 22px;
                    font-size: 1rem;
                }

                .social-item {
                    width: 40px;
                    height: 40px;
                    font-size: 1.2rem;
                }

                .widget {
                    padding: 24px 40px;
                    min-width: 280px;
                }

                .widget-number {
                    font-size: 1.9rem;
                }

                .widget-text {
                    font-size: 1.02rem;
                }
            }

            @media (min-width: 992px) {
                .hero-title {
                    font-size: 2.9rem;
                }
            }

            /* Mobile Responsive */
            @media (max-width: 767.98px) {
                .header {
                    min-height: auto;
                    padding-bottom: 100px;
                }

                .header .container {
                    min-height: auto;
                    padding-top: 20px;
                    padding-bottom: 20px;
                }

                .hero-bg-decoration {
                    display: none;
                }

                .hero-widget-container {
                    position: relative;
                    bottom: auto;
                    margin-top: 30px;
                    padding-bottom: 20px;
                }

                .widget {
                    min-width: 180px;
                    padding: 18px 20px;
                }
            }

            @media (max-width: 991.98px) {
                .header .img-holder,
                .header img[alt="Adib Farhan Illustration"],
                .header img[alt=""] {
                    display: none !important;
                }
            }

            /* About Section Responsive */
            @media (max-width: 767.98px) {
                #about .card {
                    font-size: 0.9rem;
                }

                #about .card h6 {
                    font-size: 1rem;
                }

                #about .card ul {
                    font-size: 0.9rem;
                    padding-left: 1.5rem;
                }

                #about .badge {
                    font-size: 0.85rem !important;
                    padding: 0.4em 0.9em !important;
                }
            }

            /* Portfolio Section Responsive */
            .img-wrapper {
                overflow: hidden;
                border-radius: 8px;
            }

            .img-wrapper img {
                transition: transform 0.3s ease;
            }

            .img-wrapper:hover img {
                transform: scale(1.05);
            }

            @media (max-width: 575.98px) {
                .img-wrapper .overlay-infos h5 {
                    font-size: 1rem;
                }

                .img-wrapper .overlay-infos p {
                    font-size: 0.85rem;
                }
            }

            /* Skills Section Responsive */
            @media (max-width: 767.98px) {
                .custom-card .card-body {
                    padding: 35px 0;
                }

                .custom-card .card-body h5 {
                    font-size: 1rem;
                }
            }

            /* Navbar Responsive */
            @media (max-width: 991.98px) {
                .navbar-logo {
                    width: 60px !important;
                }

                .navbar-nav {
                    text-align: center;
                    padding: 20px 0;
                }

                .navbar-nav .nav-link {
                    padding: 10px 0;
                    font-size: 1rem;
                }
            }

            /* General Mobile Improvements */
            @media (max-width: 575.98px) {
                .section-title {
                    font-size: 1.5rem;
                }

                .subtitle {
                    font-size: 0.85rem;
                }

                .title {
                    font-size: 1.3rem;
                }

                .card-body {
                    padding: 1rem;
                }

                .card-title {
                    font-size: 1.1rem;
                }
            }

            /* Ensure proper spacing on mobile */
            @media (max-width: 767.98px) {
                .section {
                    padding: 40px 0;
                }

                .container {
                    padding-left: 15px;
                    padding-right: 15px;
                }
            }
        </style>
        <!-- End of Page Header -->

        <section id="about" class="section mt-3">
            <div class="container mt-3 mt-md-5">
                <div class="row text-center text-md-left">
                    <div class="col-12 col-md-3 mb-4 mb-md-0">
                        <img src="{{ asset('assets/imgs/adibun.jpg') }}" alt="Adib Farhan" class="img-thumbnail w-100" style="max-width: 250px;">
                    </div>
                    <div class="col-12 col-md-9 pl-md-4">
                        <h6 class="title">Muhammad Adib Farhan</h6>
                        <p class="subtitle">Full Stack Developer</p>
                        <p>Hello, my name is Muhammad Adib Farhan bin Haris Fadillah, and I am a Full Stack Developer with hands-on experience in system development, front-end architecture, and digital transformation projects. Over the years, I have been actively involved in delivering large-scale web solutions for both private companies and government sectors.</p>

                        <div class="card mb-3 p-3 shadow-sm" style="background: #f9fbfd; border-radius: 8px; border: 1px solid #eee;">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge badge-info mr-2" style="font-size: .93rem; padding: .52em 1.1em; letter-spacing: .6px; background: #e0f7fa; color: #18425d;">
                                    Current Role
                                </span>
                            </div>
                            <h6 style="font-weight:600; margin-bottom: 7px;">
                                PHP Developer,
                                <span style="color:#1575c6;">Sistem e-Perolehan & Pengurusan Projek (ePPP)</span>
                            </h6>
                            <div class="mb-3 d-flex flex-wrap align-items-center" style="gap:7px;">
                                <span class="text-muted" style="font-size:0.95rem;">Dewan Bandaraya Kuala Lumpur &mdash; </span>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/imgs/logo-dbt.png') }}" alt="DBT Technologies Logo" style="width:23px;height:23px;vertical-align:middle;border-radius:3px;">
                                    <strong class="ml-1" style="color:#18425d; font-size:0.95rem;">DBT Technologies Sdn. Bhd.</strong>
                                </div>
                            </div>
                            <ul class="pl-3 mb-1" style="max-width:100%;">
                                <li class="mb-1">Oversee registration modules and public user management system.</li>
                                <li class="mb-1">Supervise junior developers and an intern, fostering team collaboration and growth.</li>
                                <li class="mb-1">Ensure on-time delivery of project phases: UAT, PAT, FAT, and live deployment (Phase 1).</li>
                                <li class="mb-1">Designed and maintain landing page for improved user experience.</li>
                                <li>Key contributor to ongoing <span style="font-style:italic;">Phase 2 &amp; Phase 3</span> (<b>&quot;Kerja&quot; module</b>) development.</li>
                            </ul>
                        </div>

                        <div class="card mb-3 p-3 shadow-sm" style="background: #f9fbfd; border-radius: 8px; border: 1px solid #eee;">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge badge-info mr-2" style="font-size: .93rem; padding: .52em 1.1em; letter-spacing: .6px; background: #fbe9e7; color: #8d3536;">
                                    Previous Role
                                </span>
                            </div>
                            <h6 style="font-weight:600; margin-bottom: 7px;">
                                Full Stack Developer,
                                <span style="color:#d74439;">
                                    <span style="display: inline-flex; align-items: center;">
                                        <img src="{{ asset('assets/imgs/mog-logo.png') }}" alt="MOG Logo" style="width:22px; height:22px; margin-right:6px; vertical-align:middle; border-radius:3px;">
                                        The Makeover Guys
                                    </span>
                                </span>
                            </h6>
                            <ul class="pl-3 mb-1" style="max-width:100%;">
                                <li class="mb-1">Integrated Payex payment system for CozyHomes platform to streamline online transactions.</li>
                                <li class="mb-1">Implemented Mandarin SMS messaging using the Google Sheets API for improved communication workflows.</li>
                                <li>Performed daily debugging and maintenance for the Garage web application, ensuring system stability and usability.</li>
                            </ul>
                        </div>

                        <div class="card mb-3 p-3 shadow-sm" style="background: #f9fbfd; border-radius: 8px; border: 1px solid #eee;">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge badge-info mr-2" style="font-size: .93rem; padding: .52em 1.1em; letter-spacing: .6px; background: #e8f5e9; color: #237946;">
                                    Previous Role
                                </span>
                            </div>
                            <h6 style="font-weight:600; margin-bottom: 7px;">
                                Web Developer,
                                <span style="color:#237946;">
                                    <span style="display: inline-flex; align-items: center;">
                                        <img src="{{ asset('assets/imgs/mpa-logo.png') }}" alt="MPA Logo" style="width:22px; height:22px; margin-right:6px; vertical-align:middle; border-radius:3px;">
                                        MyParcel Asia
                                    </span>
                                </span>
                            </h6>
                            <ul class="pl-3 mb-1" style="max-width:100%;">
                                <li class="mb-1">Developed multiple in-house systems including the MPA Helpdesk live chat platform and MPA Store.</li>
                                <li class="mb-1">Integrated same-day delivery providers: Grab Express, Lalamove, Borzo, and Bungkusit.</li>
                                <li class="mb-1">Led the front-end redesign for MyParcel Asia's homepage, enhancing usability and visual appeal.</li>
                                <li>Worked at MyParcel Asia for nearly four years, focusing on robust, scalable logistics technology solutions.</li>
                            </ul>
                        </div>

                        <p>With strong proficiency in front-end and back-end technologies, I am passionate about building efficient, scalable, and user-centric web applications. My diverse experience — from logistics to property tech and government digital systems — has equipped me with solid problem-solving skills, leadership experience, and an eye for creating seamless user experiences that align with business goals.</p>


                        <!-- View PDF Button -->
                        <button class="btn btn-primary rounded mt-3" data-bs-toggle="modal" data-bs-target="#pdfModal">
                            VIEW CV
                        </button>
                    </div>
                </div>
            </div>
        </section>

        {{-- Include CVV Modal --}}
        @include('include.cvModal')

        <!-- Service section -->
        <section id="service" class="section">
            <div class="container text-center">
                <h6 class="subtitle">Skills</h6>
                <h6 class="section-title mb-4">What Skills Do I Have</h6>

                <div class="row">
                    <div class="col-sm-6 col-md-3 mb-4">
                        <div class="custom-card card border">
                            <div class="card-body">
                                <i class="icon ti-desktop"></i>
                                <h5>Front-End Development</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <div class="custom-card card border">
                            <div class="card-body">
                                <i class="icon ti-desktop"></i>
                                <h5>Back End-Development</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <div class="custom-card card border">
                            <div class="card-body">
                                <i class="icon ti-server"></i>
                                <h5>Dev Ops</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <div class="custom-card card border">
                            <div class="card-body">
                                <i class="icon ti-bar-chart"></i>
                                <h5>Digital Marketing</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Sectoin -->

        <!-- Portfolio section -->
        <section id="portfolio" class="section">
            <div class="container text-center">
                <h6 class="subtitle">Portfolio</h6>
                <h6 class="section-title mb-4">Check My Wonderful Works</h6>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="{{ route('portfolio.dbklhomepage') }}" target="_blank">
                            <div class="img-wrapper">
                                <img src="assets/imgs/dbkl2.png" alt="DBKL Project" class="img-fluid">
                                <div class="overlay">
                                    <div class="overlay-infos">
                                        <h5>Sistem Perolehan dan Pengurusan Projek</h5>
                                        <p>Dewan Bandaraya Kuala Lumpur</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/helpdesk.jpg" alt="MPA Helpdesk" class="img-fluid">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>MPA Helpdesk (Live Chat System)</h5>
                                    <p>Build in-house live chat system for MyParcel Asia Users to chat with MyParcel Asia customer support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/lalamove.png" alt="Same Day Delivery" class="img-fluid">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>Same Day Delivery</h5>
                                    <p>Bring in Same Day Delivery providers into MyParcel Asia :
                                        <br> - Grab Express
                                        <br> - Lalamove
                                        <br> - Borzo (Previously known as MrSpeedy)
                                        <br> - Bungkusit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/appnew.jpg" alt="MPA App" class="img-fluid">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>MPA New UI/UX Application site</h5>
                                    <p>MyParcel Asia new UI/UX and FrontEnd Development for app site</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/mpastore.png" alt="MPA Store" class="img-fluid">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>MPA Store</h5>
                                    <p>Feature for MPA users to buy flyers, merchandise, and stationaries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <a href="{{ route('portfolio.mpahomepage') }}" target="_blank">
                            <div class="img-wrapper">
                                <img src="assets/imgs/webnew.jpg" alt="MPA Homepage" class="img-fluid">
                                <div class="overlay">
                                    <div class="overlay-infos">
                                        <h5>MPA New UI/UX Homepage Site</h5>
                                        <p>MyParcel Asia new UI/UX and FrontEnd Development for website homepage</p>
                                        {{-- The entire image wrapper is now clickable, so the explicit button is redundant and removed to avoid nested links. --}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
            <!-- End of portfolio section -->

        <!-- Blog Section -->
        <section id="blog" class="section">
            <div class="container text-center">
                <h6 class="subtitle">Other than Coding</h6>
                <h6 class="section-title mb-4">Things I do other than Coding.</h6>
                <!-- <p class="mb-5 pb-4">This section is about </p> -->

                <div class="row text-left">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card border h-100">
                            <img src="{{ asset('assets/imgs/adibunyoutube.jpg') }}" alt="YouTube Channel" class="card-img-top w-100">
                            <div class="card-body">
                                <h5 class="card-title">Adibun Gaming YouTube Channel</h5>
                                <p>My YouTube channel where I share my passion for technology and gaming. On my channel, I provide insightful reviews of tech gadgets and share my gaming highlights from my stream.</p>
                                <a class="btn btn-primary rounded" href="https://www.youtube.com/@AdibunGaming" target="_blank">Click Here to Watch</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="card border h-100">
                            <img src="{{ asset('assets/imgs/adibunfb.jpg') }}" alt="Facebook Page" class="card-img-top w-100">
                            <div class="card-body">
                                <h5 class="card-title">Adibun Gaming Facebook Page</h5>
                                <p>Hey there! I want to tell you about the Adibun Gaming Facebook Page. It's where I stream playing video games. Come join and watch me dive into exciting gaming adventures and share tips and tricks.</p>
                                <a class="btn btn-primary rounded" href="https://www.facebook.com/adibungaming" target="_blank">Click Here to Stream</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="card border mb-4">
                            <img src="assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                            <div class="card-body">
                                <h5 class="card-title">Bootstrap Framework</h5>
                                <div class="post-details">
                                    <a href="javascript:void(0)">Posted By: Admin</a>
                                    <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                    <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit,
                                    minima? Voluptas nemo harum impedit nisi.</p>
                                <a href="javascript:void(0)">Read More..</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>


@endsection
