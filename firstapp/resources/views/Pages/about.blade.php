
@extends('Pages.layouts.main')

@section('content')

    <!-- Page Header Section Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">About <span>us</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- About us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-image-box wow fadeInUp">
                        <!-- About Us Image Box 1 Start -->
                        <div class="about-us-image-box-1">
                            <!-- About Us Flash Image Start -->
                            <div class="about-us-flash-image">
                                <img src="{{url('assets/images/about-flask-image.png')}}" alt="">
                            </div>
                            <!-- About Us Flash Image End -->

                            <!-- About Us Video Box Start -->
                            <div class="about-us-video-box">
                                <!-- Emergency Support Title Start -->
                                <div class="emergency-support-title">
                                    <h2>24/7 Emergency Support</h2>
                                </div>
                                <!-- Emergency Support Title End -->

                                <!-- About Us Video Start -->
                                <div class="about-us-video">
                                    <figure class="image-anime">
                                        <img src="{{url('assets/images/about-us-video-image.jpg')}}" alt="">
                                    </figure>
                                    <div class="video-play-button">
                                        <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video bg-effect" data-cursor-text="Play">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- About Us Video End -->
                            </div>
                            <!-- About Us Video Box End -->
                        </div>
                        <!-- About Us Image Box 1 End -->

                        <!-- About Us Image Box 2 Start -->
                        <div class="about-us-image-box-2">
                            <!-- About Us Image Start -->
                            <div class="about-us-image">
                                <figure class="image-anime reveal">
                                    <img src="{{url('assets/images/about-us-image.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                        </div>
                        <!-- About Us Image Box 2 End -->
                    </div>
                    <!-- About Us Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title ">
                            <span class="section-sub-title wow fadeInUp">About Our Laboratory</span>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Bridging theory & applied <span>scientific research</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We take scientific theories and turn them into real-world solutions. Through accurate testing, experimentation, and analysis.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Us Body Item Start -->
                            <div class="about-us-body-item">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-about-us-body-item-1.svg')}}" alt="">
                                </div>
                                <div class="about-us-body-item-content">
                                    <h3>Our Mission</h3>
                                    <p>Our mission is validate conduct high acuracy experimentation.</p>
                                </div>
                            </div>
                            <!-- About Us Body Item End -->

                            <!-- About Us Body Item Start -->
                            <div class="about-us-body-item">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-about-us-body-item-2.svg')}}" alt="">
                                </div>
                                <div class="about-us-body-item-content">
                                    <h3>Our Vision</h3>
                                    <p>Our vision is validate conduct high acuracy experimentation.</p>
                                </div>
                            </div>
                            <!-- About Us Body Item End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn">
                                <a href="{{ route('web.contact') }}" class="btn-default">Contact Us</a>
                            </div>
                            <!-- About Us Button End -->

                            <!-- About Author Box Start -->
                            <div class="about-us-author-box">
                                <!-- About Author Image Start -->
                                <div class="about-us-author-image">
                                    <figure class="image-anime">
                                        <img src="{{url('assets/images/author-1.jpg')}}" alt="">
                                    </figure>
                                </div>
                                <!-- About Author Image End -->

                                <!-- About Author detail Start -->
                                <div class="about-us-author-content">
                                    <h3>Savannah Nguyen</h3>
                                    <p>Medical Assistant</p>
                                </div>
                                <!-- About Author detail End -->
                            </div>
                            <!-- About Us Author End -->
                        </div>
                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About us Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach dark-section bg-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Our Approach Box Start -->
                    <div class="our-approach-box">
                        <!-- Approach Item Start -->
                        <div class="approach-item">
                            <!-- Approach Item Content Start -->
                            <div class="approach-item-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <span class="section-sub-title wow fadeInUp">Our Approach</span>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Precision-driven approach <span>to scientific research</span></h2>
                                </div>
                                <!-- Section Title End -->

                                <!-- Approach Body Items List Start -->
                                <div class="apprach-body-items-list wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- Approach Body Item Start -->
                                    <div class="apprach-body-item">
                                        <h3>Objective-Driven Research Planning</h3>
                                        <p>Every project begins with a thorough understanding of research goals, scope, and regulatory requirements. We collaborate closely with clients, institutions.</p>
                                        <ul>
                                            <li>Client-aligned study goals</li>
                                            <li>Strategic research roadmapping</li>
                                        </ul>
                                    </div>
                                    <!-- Approach Body Item End -->
                                </div>
                                <!-- Approach Body Items List Emd -->
                            </div>
                            <!-- Approach Item Content End -->

                            <!-- Approach Item Image Start -->
                            <div class="approach-item-image">
                                <figure class="image-anime reveal">
                                   <img src="{{url('assets/images/approach-image-1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- Approach Item Image End -->
                        </div>
                        <!-- Approach Item End -->

                        <!-- Approach Item Start -->
                        <div class="approach-item">
                            <!-- Approach Item Content Start -->
                            <div class="approach-item-content">
                                <!-- Approach Body Items List Start -->
                                <div class="apprach-body-items-list">
                                    <!-- Approach Body Item Start -->
                                    <div class="apprach-body-item wow fadeInUp">
                                        <h3>Methodical Experimental Design</h3>
                                        <p>Every project begins with a thorough understanding of research goals, scope, and regulatory requirements. We collaborate closely with clients, institutions.</p>
                                        <ul>
                                            <li>Data-focused design strategy</li>
                                            <li>Objective-driven study planning</li>
                                        </ul>
                                    </div>
                                    <!-- Approach Body Item End -->

                                    <!-- Approach Body Item Start -->
                                    <div class="apprach-body-item wow fadeInUp" data-wow-delay="0.2s">
                                        <h3>Advanced Laboratory Execution</h3>
                                        <p>Every project begins with a thorough understanding of research goals, scope, and regulatory requirements. We collaborate closely with clients, institutions.</p>
                                        <ul>
                                            <li>Strict safety and quality protocols</li>
                                            <li>Skilled laboratory professionals</li>
                                        </ul>
                                    </div>
                                    <!-- Approach Body Item End -->
                                </div>
                                <!-- Approach Body Items List End -->
                            </div>
                            <!-- Approach Item Content End -->

                            <!-- Approach Item Image Start -->
                            <div class="approach-item-image">
                                <figure class="image-anime reveal">
                                    <img src="{{url('assets/images/approach-image-2.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- Approach Item Image End -->
                        </div>
                        <!-- Approach Item End -->
                    </div>
                    <!-- Our Approach Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Our Solutions Section Start -->
    <div class="our-solutions">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Solutions</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Data-driven research <span>solutions</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">We deliver research solutions powered by accurate data, advanced analytics, and validated scientific methodologies.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Solutions Item Start -->
                    <div class="solutions-item wow fadeInUp">
                        <!-- Solutions Item header Start -->
                        <div class="solutions-item-header">
                            <div class="icon-box">
                                <img src="{{url('assets/images/icon-solutions-item-1.svg')}}" alt="">
                            </div>
                            <div class="solutions-item-title">
                                <h2>Technology-driven laboratory solutions</h2>
                            </div>
                        </div>
                        <!-- Solutions Item header End -->

                        <!-- Solutions Item Body Start -->
                        <div class="solutions-item-body">
                            <div class="solutions-item-content">
                                <p>We deliver laboratory solutions powered by advanced technologies.</p>
                            </div>
                            <div class="solutions-item-counter-box">
                                <h3><span class="counter">80</span>%</h3>
                                <p>Global collaboration.</p>
                            </div>
                        </div>
                        <!-- Solutions Item Body End -->
                    </div>
                    <!-- Solutions Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Solutions Item Start -->
                    <div class="solutions-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Solutions Item header Start -->
                        <div class="solutions-item-header">
                            <div class="icon-box">
                                <img src="{{url('assets/images/icon-solutions-item-2.svg')}}" alt="">
                            </div>
                            <div class="solutions-item-title">
                                <h2>Innovative Laboratory Research & Develop</h2>
                            </div>
                        </div>
                        <!-- Solutions Item header End -->

                        <!-- Solutions Item Body Start -->
                        <div class="solutions-item-body">
                            <div class="solutions-item-content">
                                <p>We deliver laboratory solutions powered by advanced technologies.</p>
                            </div>
                            <div class="solutions-item-counter-box">
                                <h3><span class="counter">50</span>+</h3>
                                <p>Advanced Laboratory Instruments</p>
                            </div>
                        </div>
                        <!-- Solutions Item Body End -->
                    </div>
                    <!-- Solutions Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Solutions Item Start -->
                    <div class="solutions-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Solutions Item header Start -->
                        <div class="solutions-item-header">
                            <div class="icon-box">
                                <img src="{{url('assets/images/icon-solutions-item-3.svg')}}" alt="">
                            </div>
                            <div class="solutions-item-title">
                                <h2>Regulatory-Compliant Laboratory Testing</h2>
                            </div>
                        </div>
                        <!-- Solutions Item header End -->

                        <!-- Solutions Item Body Start -->
                        <div class="solutions-item-body">
                            <div class="solutions-item-content">
                                <p>We deliver laboratory solutions powered by advanced technologies.</p>
                            </div>
                            <div class="solutions-item-counter-box">
                                <h3><span class="counter">300</span>+</h3>
                                <p>Trusted Research Partners</p>
                            </div>
                        </div>
                        <!-- Solutions Item Body End -->
                    </div>
                    <!-- Solutions Item End -->
                </div>

                <div class="col-xl-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/author-1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="{{url('assets/images/icon-phone-white.svg')}}" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->    
                        <p>Connect with us today and take the first step toward clearer vision - <a href="contact.html">Contact Us</a></p>
                        <ul>
                            <li><span class="counter">4.9</span></li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li>Over 2000 Reviews</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Solutions Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us why-choose-video bg-section dark-section">
        <!-- Video Start -->
        <div class="why-choose-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop playsinline id="myvideo"><source src="images/genlab-why-choose-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay muted loop playsinline id="myvideo"><source src="https://demo.awaikenthemes.com/assets/videos/genlab-why-choose-video.mp4" type="video/mp4"></video>
            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->
        
        <div class="container">
            <div class="row section-row">
                <div class="col-xl-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Why Choose Us</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Why our scientific <span>expertise</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Our team combines domain knowledge, validated methodologies, and specialized laboratory techniques to produce data of high scientific integrity.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Why Choose Us Box Start -->
                    <div class="why-choose-us-boxes">
                        <!-- Why Choose Us 1 Start -->
                        <div class="why-choose-us-box box-1 wow fadeInUp">
                            <!-- Why Choose Us Image Start -->
                            <div class="why-choose-us-image">
                                <figure class="image-anime reveal">
                                    <img src="{{url('assets/images/why-choose-us-image-1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Us Image End -->
                            
                            <!-- Why Choose Counter Box Start -->
                            <div class="why-choose-counter-box">
                                <div class="why-choose-counter-circle">
                                    <div class="circle" data-size="80" data-value="0.75">
                                        <div class="progress_value"><span class="pro_data"></span><span>%</span></div>
                                    </div>
                                </div>                                
                                <div class="why-choose-counter-content">
                                    <h2>High-Accuracy Test Results</h2>
                                </div>
                            </div>
                            <!-- Why Choose Counter Box End -->
                        </div>
                        <!-- Why Choose Us 1 End -->

                        <!-- Why Choose Us 2 Start -->
                        <div class="why-choose-us-box box-2 wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Why Choose Us Image Start -->
                            <div class="why-choose-us-image">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/why-choose-us-image-2.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Us Image End -->

                            <!-- Why Choose Skills List Start -->
                            <div class="why-choose-skills-list">
                                <!-- Skills Progress Bar Start -->
                                <div class="skills-progress-bar">
                                    <!-- Skill Item Start -->
                                    <div class="skillbar" data-percent="90%">
                                        <div class="skill-data">
                                            <div class="skill-title">Safety Compliance</div>
                                            <div class="skill-no">90%</div>
                                        </div>
                                        <div class="skill-progress">
                                            <div class="count-bar"></div>
                                        </div>
                                    </div>
                                    <!-- Skill Item End -->
                                </div>
                                <!-- Skills Progress Bar End -->
                            </div>
                            <!-- Why Choose Skills List End -->
                        </div>
                        <!-- Why Choose Us 2 End -->
                        
                        <!-- Why Choose Us 3 Start -->
                        <div class="why-choose-us-box box-3 wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Why Choose Us Item Start -->
                            <div class="why-choose-us-item">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-why-choose-us-1.svg')}}" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h2><span class="counter">99.9</span>%</h2>
                                    <p>High-end analytical instruments deliver near-perfect precision in measurement.</p>
                                </div>
                            </div>
                            <!-- Why Choose Us Item End -->
                            
                            <!-- Why Choose Us Image Start -->
                            <div class="why-choose-us-image">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/why-choose-us-image-3.jpg')}}" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Us Image End -->
                        </div>
                        <!-- Why Choose Us 3 End -->
                    </div>
                    <!-- Why Choose Us Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/author-1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="{{url('assets/images/icon-phone-white.svg')}}" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->    
                        <p>Connect with us today and take the first step toward clearer vision - <a href="contact.html">Contact Us</a></p>
                        <ul>
                            <li><span class="counter">4.9</span>/5</li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li>Over 4200 Reviews</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div> 
    <!-- Why Choose Us Section End -->

    <!-- What We Do Section Start -->
    <div class="what-we-do">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- What We Do Content Box Start -->
                    <div class="what-we-do-content-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">What We Do</span>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Pioneering research for a <span>smarter future</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We use science and research to create better, smarter solutions for the future—making life easier, industries stronger, and technology more efficient.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- What We Do Skill List Start -->
                        <div class="what-we-do-skill-list">
                            <!-- Skills Progress Bar Start -->
                            <div class="skills-progress-bar">
                                <!-- Skill Item Start -->
                                <div class="skillbar" data-percent="90%">
                                    <div class="skill-data">
                                        <div class="skill-title">Safety Compliance</div>
                                        <div class="skill-no">90%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                            </div>
                            <!-- Skills Progress Bar End -->
                        </div>
                        <!-- What We Do Skill List End -->

                        <!-- What We Do Counter Boxes Start -->
                        <div class="what-we-do-counter-boxes wow fadeInUp" data-wow-delay="0.6s">
                            <!-- What We Do Counter Item Start -->
                            <div class="what-we-do-counter-item">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-what-we-do-counetr-1.svg')}}" alt="">
                                </div>
                                <div class="what-we-counter-item-content">
                                    <h2><span class="counter">80</span>%</h2>
                                    <p>Global collaboration</p>
                                </div>
                            </div>
                            <!-- What We Do Counter Item End -->
                            
                            <!-- What We Do Counter Item Start -->
                            <div class="what-we-do-counter-item">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-what-we-do-counetr-2.svg')}}" alt="">
                                </div>
                                <div class="what-we-counter-item-content">
                                    <h2><span class="counter">24</span>/7</h2>
                                    <p>Emergency Support</p>
                                </div>
                            </div>
                            <!-- What We Do Counter Item End -->
                        </div>
                        <!-- What We Do Counter Boxes End -->
                        
                        <!-- What We Do Footer Start -->
                        <div class="what-we-do-footer wow fadeInUp" data-wow-delay="0.8s">
                            <!-- What We Do Button Start -->
                            <div class="what-we-do-btn">
                                <a href="book-appointment.html" class="btn-default">Book Appointment</a>
                            </div>
                            <!-- What We Do Button End -->
                            
                            <!-- What We Do Author Box Start -->
                            <div class="what-we-do-contact-box">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-phone-accent.svg')}}" alt="">
                                </div>
                                <div class="what-we-contact-content">
                                    <p>Call Us!</p>
                                    <h3><a href="tel:123456789">+123 456 789</a></h3>
                                </div>
                            </div>
                            <!-- What We Do Author Box End -->
                        </div>
                        <!-- What We Do Footer End -->
                    </div>
                    <!-- What We Do Content Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- What We Do Image Box Start -->
                    <div class="what-we-do-images-box wow fadeInUp">
                        <!-- What We Image Box 1 Start -->
                        <div class="what-we-do-image">
                            <figure>
                                <img src="{{url('assets/images/what-we-do-image.png')}}" alt="">
                            </figure>
                        </div>
                        <!-- What We Image Box 1 End -->
                        
                        <!-- What We Do Author Box Start -->
                        <div class="what-we-do-author-box">
                            <div class="what-we-author-image">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/author-1.jpg')}}" alt="">                                    
                                </figure>
                            </div>
                            <div class="what-we-author-content">
                                <h3>Robert Fox</h3>
                                <p>CEO & Founders</p>
                            </div>
                        </div>
                        <!-- What We Do Author Box End -->
                    </div>
                    <!-- What We Do Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team dark-section bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title">Our Team</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Meet our dedicated team of <span>scientific experts</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-item-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/team-1.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Item Contant Start -->
                            <div class="team-item-contant">
                                <h2><a href="team-single.html">Dr. Michael Anderson</a></h2>
                                <p>Chief Scientific Officer</p>
                            </div>
                            <!-- Team Item Contant End -->

                            <!-- Team Social List Box Start -->
                            <div class="team-social-list-box">
                                <!-- Team Social Button Start -->
                                <div class="team-social-btn">
                                    <a href="team-single.html"><img src="{{url('assets/images/icon-share.svg')}}" alt=""></a>
                                </div> 
                                <!-- Team Social Button End -->

                                <!-- Team Social List Start -->
                                <div class="team-social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social List End -->
                            </div>
                            <!-- Team Social List Box End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Team Image Start -->
                        <div class="team-item-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/team-2.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Item Contant Start -->
                            <div class="team-item-contant">
                                <h2><a href="team-single.html">Dr. Jonathan Miller</a></h2>
                                <p>Senior Research Scientist</p>
                            </div>
                            <!-- Team Item Contant End -->

                            <!-- Team Social List Box Start -->
                            <div class="team-social-list-box">
                                <!-- Team Social Button Start -->
                                <div class="team-social-btn">
                                    <a href="team-single.html"><img src="{{url('assets/images/icon-share.svg')}}" alt=""></a>
                                </div> 
                                <!-- Team Social Button End -->

                                <!-- Team Social List Start -->
                                <div class="team-social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social List End -->
                            </div>
                            <!-- Team Social List Box End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Team Image Start -->
                        <div class="team-item-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/team-3.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Item Body Start -->
                        <div class="team-item-body">
                            <!-- Team Item Contant Start -->
                            <div class="team-item-contant">
                                <h2><a href="team-single.html">Dr. Emily Carter</a></h2>
                                <p>Laboratory Operations Manager</p>
                            </div>
                            <!-- Team Item Contant End -->

                            <!-- Team Social List Box Start -->
                            <div class="team-social-list-box">
                                <!-- Team Social Button Start -->
                                <div class="team-social-btn">
                                    <a href="team-single.html"><img src="{{url('assets/images/icon-share.svg')}}" alt=""></a>
                                </div> 
                                <!-- Team Social Button End -->

                                <!-- Team Social List Start -->
                                <div class="team-social-list">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social List End -->
                            </div>
                            <!-- Team Social List Box End -->
                        </div>
                        <!-- Team Item Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="{{url('assets/images/author-1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="{{url('assets/images/icon-phone-white.svg')}}" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->    
                        <p><b>Working Hours:</b> Monday-Saturday, 9:00 AM - 7:00 PM</p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Our Technology Section Start -->
    <div class="our-technology">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Technology Image Box Start -->
                    <div class="technology-image-box wow fadeInUp">
                        <!-- Technology Image Start -->
                        <div class="technology-image">
                            <figure class="image-anime">
                                <img src="{{url('assets/images/technology-image.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Technology Image End -->

                        <!-- Working Hour Box Start -->
                        <div class="working-hour-box">
                            <!-- Working Hour Box Header Start -->
                            <div class="working-hour-box-header">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-clock-white.svg')}}" alt="">
                                </div>
                                <div class="working-hour-box-title">
                                    <h3>Working Hours</h3>
                                </div>
                            </div>
                            <!-- Working Hour Box Header End -->

                            <!-- Working Hour Box Body Start -->
                            <div class="working-hour-box-body">
                                <ul>
                                    <li>Mon -  Fri: 09AM -  06PM</li>
                                    <li>Saturday: 10AM -  02PM</li>
                                    <li>Sunday : Closed</li>
                                </ul>
                            </div>
                            <!-- Working Hour Box Body End -->
                        </div>
                        <!-- Working Hour Box End -->
                    </div>
                    <!-- Technology Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- Technology Content Start -->
                    <div class="technology-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Technology</span>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Advanced technology and <span>research infrastructure</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Our laboratories are equipped with state-of-the-art technology and  infrastructure, enabling precise, efficient, and reliable scientific investigations.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Technology Body Start -->
                        <div class="technology-body">
                            <!-- Technology Counter Start -->
                            <div class="technology-counter-item">
                                <!-- Technology Progress Box Start -->
                                <div class="circle" data-size="120" data-value="0.82">
                                    <div class="progress_value">
                                        <span class="pro_data"></span><span>%</span>
                                    </div>
                                </div>
                                <h3>Data Platforms</h3>
                                <!-- Technology Progress Box End -->
                            </div>
                            <!-- Technology Counter End -->

                            <!-- Technology Counter Start -->
                            <div class="technology-counter-item">
                                <!-- Technology Progress Box Start -->
                                <div class="circle" data-size="120" data-value="0.92">
                                    <div class="progress_value">
                                        <span class="pro_data"></span><span>%</span>
                                    </div>
                                </div>
                                <h3>Research Tools</h3>
                                <!-- Technology Progress Box End -->
                            </div>
                            <!-- Technology Counter End -->

                            <!-- Technology Counter Start -->
                            <div class="technology-counter-item">
                                <!-- Technology Progress Box Start -->
                                <div class="circle" data-size="120" data-value="0.92">
                                    <div class="progress_value">
                                        <span class="pro_data"></span><span>%</span>
                                    </div>
                                </div>
                                <h3>Lab Automation</h3>
                                <!-- Technology Progress Box End -->
                            </div>
                            <!-- Technology Counter End -->
                        </div>
                        <!-- Technology Body End -->

                        <!-- Technology Footer Start -->
                        <div class="technology-footer wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Technology Button Start -->
                            <div class="technology-button">
                                <a href="book-appointment.html" class="btn-default">Book  Appointment</a>
                            </div>
                            <!-- Technology Button End -->

                            <!-- What We Do Author Box Start -->
                            <div class="what-we-do-contact-box">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-phone-accent.svg')}}" alt="">
                                </div>
                                <div class="what-we-contact-content">
                                    <p>Call Us Today!</p>
                                    <h3><a href="tel:123456789">+123 456 789</a></h3>
                                </div>
                            </div>
                            <!-- What We Do Author Box End -->
                        </div>
                        <!-- Technology Footer End -->
                    </div>
                    <!-- Technology Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Technology Section End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Our Testimonials</span>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Voices from <span>our customers</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Hear genuine insights from clients who rely on our laboratory services for accurate testing, data-driven solutions, and research support.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider wow fadeInUp">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-rating">
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“The level of scientific support and data reporting expectations. Their  services helped validate our product for regulatory approval.”</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item-author">
                                            <div class="testimonial-author-image">
                                                <figure class="image-anime">
                                                    <img src="{{url('assets/images/author-1.jpg')}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h2>Eleanor Hayes</h2>
                                                <p>Research Scientist, Biotech</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item Body End -->
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-rating">
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“The level of scientific support and data reporting expectations. Their  services helped validate our product for regulatory approval.”</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item-author">
                                            <div class="testimonial-author-image">
                                                <figure class="image-anime">
                                                    <img src="{{url('assets/images/author-2.jpg')}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h2>Daniel Brooks</h2>
                                                <p>Product Manager, Pharma</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item Body End -->
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-rating">
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“The level of scientific support and data reporting expectations. Their  services helped validate our product for regulatory approval.”</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item-author">
                                            <div class="testimonial-author-image">
                                                <figure class="image-anime">
                                                    <img src="{{url('assets/images/author-3.jpg')}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h2>Olivia Carter</h2>
                                                <p>R&D Lead, Chemical Industry</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item Body End -->
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Item Start -->
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-header">
                                            <div class="testimonial-item-rating">
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                                <i class="fa fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-item-content">
                                                <p>“The level of scientific support and data reporting expectations. Their  services helped validate our product for regulatory approval.”</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-item-author">
                                            <div class="testimonial-author-image">
                                                <figure class="image-anime">
                                                    <img src="{{url('assets/images/author-4.jpg')}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="testimonial-author-content">
                                                <h2>John D.</h2>
                                                <p>Specialist Eye care</p>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item Body End -->
                                    </div>
                                    <!-- Testimonial Item End -->
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>

                <!-- Section Footer Text Start -->
                <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Satisfy Client Images Start -->
                    <div class="satisfy-client-images">
                        <div class="satisfy-client-image">
                            <figure class="image-anime">
                                <img src="{{url('assets/images/author-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="satisfy-client-image add-more">
                            <img src="{{url('assets/images/icon-phone-white.svg')}}" alt="">
                        </div>
                    </div>
                    <!-- Satisfy Client Images End -->    
                    <p>Connect with us today and take the first step toward clearer vision - <a href="testimonials.html">View All Testimonials.</a></p>
                    <ul>
                        <li><span class="counter">4.9</span></li>
                        <li>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li>Over 2000 Reviews</li>
                    </ul>
                </div>
                <!-- Section Footer Text End -->
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Faq Image Box Start -->
                    <div class="faq-image-box wow fadeInUp">
                        <!-- Faq Image Start -->
                         <div class="faq-image">
                            <figure class="image-anime">
                                <img src="{{url('assets/images/faq-image.jpg')}}" alt="">
                            </figure>
                         </div>
                        <!-- Faq Image End -->

                        <!-- Faq CTA Box Start -->
                        <div class="faq-cta-box">
                            <!-- Faq CTA Box Header Start -->
                            <div class="faq-cta-header">
                                <div class="icon-box">
                                    <img src="{{url('assets/images/icon-faq-cta.svg')}}" alt="">
                                </div>
                                <div class="faq-cta-title">
                                    <h2>Knowledge That Supports Your Research</h2>
                                </div>
                            </div>
                            <!-- Faq CTA Box Header End -->

                            <!-- Faq CTA Contant Start -->
                            <div class="faq-cta-contant">
                                <h3><a href="tel:+123456789">+123 456 789</a></h3>
                            </div>
                            <!-- Faq CTA Contant End -->
                        </div>
                        <!-- Faq CTA Box End -->
                    </div>
                    <!-- Faq Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- Faq Contant Start -->
                     <div class="faq-contant">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp">Frequently Asked Questions</span>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Answers to your scientific <span>research questions</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="accordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Q1. What types of laboratory services do you offer?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" role="region" aria-labelledby="heading1" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>All results are obtained using validated methods, advanced instruments, and standardized protocols to ensure accuracy, reproducibility.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        Q2. How accurate are your test results?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" role="region" aria-labelledby="heading2" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>All results are obtained using validated methods, advanced instruments, and standardized protocols to ensure accuracy, reproducibility.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Q3. What industries do you support?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" role="region" aria-labelledby="heading3" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>All results are obtained using validated methods, advanced instruments, and standardized protocols to ensure accuracy, reproducibility.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Q4. Do you support custom research projects?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" role="region" aria-labelledby="heading4" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>All results are obtained using validated methods, advanced instruments, and standardized protocols to ensure accuracy, reproducibility.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                     </div>
                    <!-- Faq Contant End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->

  @endsection