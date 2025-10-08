@extends('layouts.home')

@section('content')
    <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

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

        <!-- About section -->
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
                        <a href="/assets/files/M. Adib Farhan Resume 2023.pdf" download>
                            <button class="btn btn-primary rounded mt-3">DOWNLOAD CV</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

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

        <!-- Skills section -->
        <!-- <section id="portfolio" class="section">
            <div class="container text-center">
                <h6 class="subtitle">Skills</h6>
                <h6 class="section-title mb-4">Check My Wonderful Works</h6>
                <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
                    rerum commodi corrupti, temporibus non quam.</p>

                <div class="row">
                    <div class="col-sm-6 col-md-3 mb-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-1.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>Project Title</h5>
                                    <p></p>
                                    <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-1.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>Project Title</h5>
                                    <p></p>
                                    <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-1.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>Project Title</h5>
                                    <p></p>
                                    <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-4">
                        <div class="img-wrapper">
                            <img src="assets/imgs/folio-1.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-infos">
                                    <h5>Project Title</h5>
                                    <p></p>
                                    <a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>
                                    <a href="javascript:void(0)"><i class="ti-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- End of Skills Section -->

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

        <!-- Testmonial Section -->
            <!-- <section id="testmonial" class="section">
                <div class="container text-center">
                    <h6 class="subtitle">Reviews</h6>
                    <h6 class="section-title mb-4">What People Say About Me</h6>

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card testmonial-card border">
                                    <div class="card-body">
                                        <img src="assets/imgs/robotys.jpg" alt="">
                                        <p></p>
                                        <h1 class="title">Izwan Wahab @ Robotys</h1>
                                        <h1 class="subtitle">CTO MyParcel Asia Sdn. Bhd.</h1>
                                        <a class="social-item" href="https://twitter.com/robotys" target="_blank"><i class="ti-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        <!-- End of testmonial section -->

        <!-- Hire me section -->
        <!-- <section class="bg-gray p-0 section">
            <div class="container">
                <div class="card bg-primary">
                    <div class="card-body text-light">
                        <div class="row align-items-center">
                            <div class="col-sm-9 text-center text-sm-left">
                                <h5 class="mt-3">Hire Me For Your Project</h5>
                                <p class="mb-3">Accusantium labore nostrum similique quisquam.</p>
                            </div>
                            <div class="col-sm-3 text-center text-sm-right">
                                <button class="btn btn-light rounded">Hire Me!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End od Hire me section. -->

        <!-- Contact Section -->
        <!-- <section id="contact" class="position-relative section">
            <div class="container text-center">
                <h6 class="subtitle">Contact</h6>
                <h6 class="section-title mb-4">Get In Touch With Me</h6>
                <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br>
                    rerum commodi corrupti, temporibus non quam.</p>

                <div class="contact text-left">
                    <div class="form">
                        <h6 class="subtitle">Available 24/7</h6>
                        <h6 class="section-title mb-4">Get In Touch</h6>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <textarea name="contact-message" id="" cols="30" rows="5" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
                        </form>
                    </div>
                    <div class="contact-infos">
                        <div class="item">
                            <i class="ti-location-pin"></i>
                            <div class="">
                                <h5>Location</h5>
                                <p> 12345 Fake ST NoWhere AB Country</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="ti-mobile"></i>
                            <div>
                                <h5>Phone Number</h5>
                                <p>(123) 456-7890</p>
                            </div>
                        </div>
                        <div class="item">
                            <i class="ti-email"></i>
                            <div class="mb-0">
                                <h5>Email Address</h5>
                                <p>info@website.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map">
                <iframe src="https://snazzymaps.com/embed/61257"></iframe>
            </div>
        </section> -->
        <!-- End of Contact Section -->

    </body>

@endsection
