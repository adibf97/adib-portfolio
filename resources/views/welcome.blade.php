@extends('layouts.home')

@section('content')

        <!-- Page Hero -->
        <header class="header" id="home">
            <div class="container">
                <div class="infos">
                    <h6 class="subtitle">Hello,I'm</h6>
                    <h6 class="title">Adib Farhan</h6>
                    <p>Developer</p>

                    <!-- <div class="buttons pt-3">
                        <button class="btn btn-primary rounded">HIRE ME</button>
                        <button class="btn btn-dark rounded">DOWNLOAD CV</button>
                    </div>-->

                    <div class="socials mt-4">
                        <a class="social-item" href="https://www.linkedin.com/in/muhammad-adib-farhan/"><i
                                class="ti-linkedin"></i></a>
                        <a class="social-item" href="https://github.com/adibf97"><i class="ti-github"></i></a>
                        <a class="social-item" href="https://twitter.com/Adibun97"><i class="ti-twitter"></i></a>
                        <a class="social-item" href="https://www.instagram.com/adibfarhan97/"><i
                                class="ti-instagram"></i></a>
                    </div>
                </div>
                <div class="img-holder">
                    <img src="assets/imgs/man.svg" alt="">
                </div>
            </div>

            <!-- Header-widget -->
            <div class="widget">
                <div class="widget-item">
                    <h2>5</h2>
                    <p>Project (In-House) Completed</p>
                </div>
                <!-- <div class="widget-item">
                    <h2>***</h2>
                    <p>Awards Won</p>
                </div> -->
            </div>
        </header>
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
                        <p>Hello, my name is Muhammad Adib Farhan bin Haris Fadillah, and I am a Full Stack Developer with expertise in Web Design and Digital Marketing. With 4 years of experience in the logistics industry, I have gained valuable insights into the
                            intricacies of this sector.</p>
                        <p>As a Full Stack Developer, I possess a comprehensive understanding of both front-end and back-end development. My expertise in Web Design enables me to craft visually appealing and user-friendly interfaces that enhance the overall user experience.</p>
                        <p>In addition to my technical skills, I have a strong background in Digital Marketing. I understand the usage of Facebook Ads, Google Ads and Google Analytics. Through my knowledge and experience in this field, I can develop strategies that drive traffic, increase conversions, and maximize the online presence of
                            businesses.</p>
                        <p>My 4 years of experience in the logistics industry have provided me with a deep understanding of its unique challenges and requirements. I have successfully developed and implemented digital solutions that streamline operations, optimize supply chains, and enhance customer experiences. This industry experience has equipped me with problem-solving abilities and an attention to detail that are crucial in delivering high-quality results.</p>

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
                            <img src="assets/imgs/mpa store.png" alt="">
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
