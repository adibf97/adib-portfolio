@extends('layouts.home')

@section('content')

        <!-- Page Hero -->
        <header class="header" id="home" style="background: linear-gradient(120deg, #e0f7fa 0%, #fff1eb 100%); padding-top: 20px; padding-bottom: 0; position:relative; overflow:hidden; min-height:300px;">
            <div class="container py-5 position-relative" style="display: flex; align-items: center; justify-content: flex-start; min-height: 440px;">
                <div class="infos" style="flex: 1.25; z-index:2;">
                    <span class="d-inline-block mb-2" style="background: #f2f8fd; color: #1d83c8; font-size: 0.92rem; font-weight: 600; padding: 7px 20px 7px 16px; border-radius: 20px;">
                        <i class="ti-sparkles" style="margin-right:7px; color:#fbc02d"></i>
                        Hello, I'm
                    </span>
                    <h1 class="mb-1 mt-2" style="font-size:2.9rem; font-weight:800; color:#123d59; letter-spacing: -2px;">
                        Adib Farhan
                        <span style="display:inline-block; animation: popBounce 1.2s infinite alternate; font-size: 2rem; line-height: 1; margin-left:9px;">👋</span>
                    </h1>
                    <h4 class="mb-3" style="color:#1575c6; font-weight:600; letter-spacing:1.1px; font-size:1.36rem;">Full Stack Developer</h4>
                    <p style="font-size:1.09rem; color:#526477; max-width:420px; margin-bottom:1.3rem;">
                        I build elegant, robust web products for digital transformation &amp; public sector innovation.
                    </p>
                    <div class="d-flex align-items-center mb-4" style="gap: 12px;">
                        <a href="#portfolio" class="btn btn-primary" style="font-weight:600; border-radius:28px; padding:10px 28px 10px 22px; box-shadow: 0 2px 12px #1d83c818;">
                            <i class="ti-rocket mr-2" style="font-size:1.15rem;"></i> View Projects
                        </a>
                        <a href="mailto:adibf97@gmail.com" class="btn btn-outline-dark" style="font-weight:500; border-radius:28px; padding:10px 26px;">
                            <i class="ti-email mr-2"></i> Contact Me
                        </a>
                    </div>
                    <div class="socials mt-2">
                        <a class="social-item" href="https://www.linkedin.com/in/muhammad-adib-farhan/" target="_blank" style="margin-right:8px; color: #0077b5; background: #f1fbfa; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; font-size:1.2rem;"><i class="ti-linkedin"></i></a>
                        <a class="social-item" href="https://github.com/adibf97" target="_blank" style="margin-right:8px; color: #222c36; background: #f1fbfa; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; font-size:1.2rem;"><i class="ti-github"></i></a>
                        <a class="social-item" href="https://twitter.com/Adibun97" target="_blank" style="margin-right:8px; color: #1da1f2; background: #f1fbfa; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; font-size:1.2rem;"><i class="ti-twitter"></i></a>
                        <a class="social-item" href="https://www.instagram.com/adibfarhan97/" target="_blank" style="margin-right:8px; color: #e64980; background: #f1fbfa; border-radius: 50%; width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center; font-size:1.2rem;"><i class="ti-instagram"></i></a>
                    </div>
                </div>
                <!-- man.svg illustration placed right beside the info block, now much bigger -->
                <div class="img-holder d-none d-md-flex align-items-center justify-content-center"
                     style="flex:1.3; min-width:500px; max-width:2400px; min-height:550px;">
                    <img
                        src="{{ asset('assets/imgs/man.svg') }}"
                        alt="Adib Farhan Illustration"
                        style="display:block; max-width:2200px; width:100%; min-width:480px; height:auto; filter:drop-shadow(0 21px 60px #1d83c822); opacity:0.97; z-index:2; pointer-events:none;"
                    >
                </div>
            </div>
            <!-- Projects/Widget Bottom Card -->
            <div style="position:absolute; left:0; right:0; bottom:18px; display:flex; justify-content:center; z-index:20; width:100%; pointer-events:auto;">
                <div class="widget" style="background: #fff; border-radius: 15px; box-shadow:0 8px 24px #18425d12; padding: 24px 40px 24px 40px; min-width:280px; text-align:center; display:flex; flex-direction:column; align-items:center;">
                    <span style="font-size:1.9rem; font-weight:900; color:#123d59;">6+</span>
                    <p style="margin-bottom:0; font-size:1.02rem; color:#666; letter-spacing:.6px; font-weight:500;">Projects Completed</p>
                </div>
            </div>
            <!-- Nice-looking SVG circle background for color decoration -->
            <img src="{{ asset('assets/imgs/hero-circ-bg.svg') }}" alt=""
                 style="position:absolute; right:8vw; top:10px; width:27vw; min-width:180px; max-width:340px; z-index:0; opacity:0.45; pointer-events:none;">
        </header>
        <style>
            @keyframes popBounce {
                0%   { transform: scale(1) rotate(-5deg);}
                65%  { transform: scale(1.24) rotate(6deg);}
                100% { transform: scale(1.08) rotate(-3deg);}
            }
            .btn-primary {
                background: linear-gradient(92deg, #1697bf 0%, #47c4ea 100%) !important;
                border: none;
                color: #fff;
            }
            .btn-outline-dark {
                border: 1.5px solid #3b3b4f;
                color: #18425d !important;
                background: #fff !important;
            }
            .socials a.social-item:hover {
                background: #d7f7fa !important;
                transform: translateY(-2px) scale(1.09);
                box-shadow: 0 2px 10px #47c4ea19;
                transition: all 0.17s;
            }

            @media (max-width: 991.98px) {
                .header .img-holder,
                .header img[alt="Adib Farhan Illustration"],
                .header img[alt=""] {
                    display: none !important;
                }
                .header .widget {
                    min-width: 180px;
                    padding: 22px 18px;
                }
            }
        </style>
        <!-- End of Page Header -->

        <section id="about" class="section mt-3">
            <div class="container mt-5">
                <div class="row text-center text-md-left">
                    <div class="col-md-3">
                        <img src="assets/imgs/adibun.jpg" alt="" class="img-thumbnail mb-4">
                    </div>
                    <div class="pl-md-4 col-md-9">
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
                            <div class="mb-3 d-flex align-items-center" style="gap:7px;">
                                <span class="text-muted" style="font-size:1rem;">Dewan Bandaraya Kuala Lumpur &mdash; </span>
                                <img src="{{ asset('assets/imgs/logo-dbt.png') }}" alt="DBT Technologies Logo" style="width:23px;height:23px;vertical-align:middle;border-radius:3px;">
                                <strong class="ml-1" style="color:#18425d;">DBT Technologies Sdn. Bhd.</strong>
                            </div>
                            <ul class="pl-3 mb-1" style="max-width:700px;">
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
                            <ul class="pl-3 mb-1" style="max-width:700px;">
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
                            <ul class="pl-3 mb-1" style="max-width:700px;">
                                <li class="mb-1">Developed multiple in-house systems including the MPA Helpdesk live chat platform and MPA Store.</li>
                                <li class="mb-1">Integrated same-day delivery providers: Grab Express, Lalamove, Borzo, and Bungkusit.</li>
                                <li class="mb-1">Led the front-end redesign for MyParcel Asia’s homepage, enhancing usability and visual appeal.</li>
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
                    <div class="col-md-4">
                        <a href="{{ route('portfolio.dbklhomepage') }}" target="_blank">
                            <div class="img-wrapper">
                                <img src="assets/imgs/dbkl2.png" alt="">
                                <div class="overlay">
                                    <div class="overlay-infos">
                                        <h5>Sistem Perolehan dan Pengurusan Projek</h5>
                                        <p>Dewan Bandaraya Kuala Lumpur</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/helpdesk.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>MPA Helpdesk (Live Chat System)</h5>
                                    <p>Build in-house live chat system for MyParcel Asia Users to chat with MyParcel Asia customer support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/lalamove.png" alt="">
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
                    <div class="col-md-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/appnew.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>MPA New UI/UX Application site</h5>
                                    <p>MyParcel Asia new UI/UX and FrontEnd Development for app site</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/mpastore.png" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>MPA Store</h5>
                                    <p>Feature for MPA users to buy flyers, merchandise, and stationaries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('portfolio.mpahomepage') }}" target="_blank">
                            <div class="img-wrapper">
                                <img src="assets/imgs/webnew.jpg" alt="">
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
                    <div class="col-md-6">
                        <div class="card border mb-4">
                            <img src="assets/imgs/adibunyoutube.jpg" alt="" class="card-img-top w-100">
                            <div class="card-body">
                                <h5 class="card-title">Adibun Gaming YouTube Channel</h5>
                                <p>My YouTube channel where I share my passion for technology and gaming. On my channel, I provide insightful reviews of tech gadgets and share my gaming highlights from my stream.</p>
                                <a class="btn btn-primary rounded" href="https://www.youtube.com/@AdibunGaming" target="_blank">Click Here to Watch</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border mb-4">
                            <img src="assets/imgs/adibunfb.jpg" alt="" class="card-img-top w-100">
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
