@extends('frontend.layout.master') 
@section('style')
@endsection
@section('meta_tags')
@endsection
@section('content')  
 <!--  Home Start  -->
<section id="home" class="home home-01 full-screen">
    <div class="home-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home-bg-content">
                        <h1>Need A Better Website to Start Your Business</h1>
                        <p class="my-4">You came to right place for it and we are going to deliver product as you want</p>
                        <div class="mt-2">
                        <a href="{{url('contact-us')}}" class="pill-button-01 mr-3"> <span>Get Started</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Home End  -->

<!--  About Start  -->
<section id="about" class="about-01 py-6">
    <div class="container">
        <div class="about-item">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('public/frontend')}}/assets/img/about-01.png" alt="/">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-box">
                                <h2 class="main-title">About our company</h2>
                                <p class="sub-title">Welcome to world best web development company</p>
                            </div>
                        </div>
                    </div>
                    <p class="about-content">GoBigger, has innovative web planning experts in India. We make profitable sites and portable applications that help your business. An extremely ground-breaking web and versatile improvement organization that utilizes simply the best gifts and innovation for serving the customers needs all around the globe. 

                        The group began from year 2015 making sites, portable applications and giving web services. With its skill the organization is offering complete types of assistance from key counseling to website composition, web application improvement, versatile applications development and web promotion services all through the world. </p>

                    Our Process  
                    <ul class="about-description-box">
                        <li>
                            <p>Strategic Consulting</p>
                        </li>
                        <li>
                            <p> UX / UI Design</p>
                        </li>
                        <li>
                            <p>Web Development.</p>
                        </li>
                        <li>
                            <p>Mobile Development</p>
                        </li>
                        <li>
                            <p>Quality Assurance</p>
                        </li>
                    </ul>
                    <div class="discover-more-btn">
                        <a href="javascript:void(0);" class="pill-button-01 mr-3">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  About End  -->

<!--  Why Choose Start  -->
<section class="why-choose-01 pb-6">
    <div class="container">
        <!--  Title  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2 class="main-title">Why choose us</h2>
                    <h5 class="sub-title">We're ready to share our experience.</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="tab-boxes">
                    <div class="card tab-card border-0">
                        <div class="card-header tab-card-header px-0">
                        <ul class="nav nav-tabs card-header-tabs m-0" id="myTab" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true"><span>Our Skills</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false"><span>Our Mission</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false"><span>Our Advantage</span></a>
                            </li>
                            <li class="tab-background"></li>
                        </ul>
                        </div>
                        <div class="tab-content h-100 mt-4" id="myTabContent">
                            <!-- Item 01 -->
                            <div class="tab-pane fade show active py-3" id="one" role="tabpanel" aria-labelledby="one-tab">          
                                <p class="about-content">We created sites with most recent innovations to give you runtime arrangement. The immaculately planned and created sites help in business advertising and impact marking. The immense involvement with its field makes us fit for creating different web applications like Custom Management Software, Customized Web Solutions, Online Web Portals, Static, Dynamic & E-commerce web sites in latest technology and frameworks.</p>
                                <ul class="about-description-box">
                                    <li>
                                        <p>PHP</p>
                                    </li>
                                    <li>
                                        <p>Laravel</p>
                                    </li>
                                    <li>
                                        <p> AJAX</p>
                                    </li>
                                    <li>
                                        <p>API Integration</p>
                                    </li>
                                    <li>
                                        <p>UI/UX Development</p>
                                    </li>
                                    <li>
                                        <p>Custom Web and App Development</p>
                                    </li>
                                </ul>         
                            </div>
                            <!-- Item 02 -->
                            <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                <p class="about-content">
                                    Taking your business to another Level
                                </p>
                                <p class="about-content"> 

                                    We attempt  to come up with ample insights and result-driven perspectives by offering serious edge answers for our customers, and the economy overall. To create advanced web and portable programming answers for organizations going from new businesses to ventures with fulfillment.</p>
                                <ul class="about-description-box">
                                    <li>
                                        <p>Your business growth is our first priority</p>
                                    </li>
                                    <li>
                                        <p>User friendly Website and App</p>
                                    </li>
                                    <li>
                                        <p>Help your business to grow digitally</p>
                                    </li>
                                </ul>         
                            </div>
                            <!-- Item 03 -->
                            <div class="tab-pane property-desc fade p-3 h-100 position-relative" id="three" role="tabpanel" aria-labelledby="three-tab">
                                <p class="about-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <ul class="about-description-box">
                                    <li>
                                        <p>Save time – we focus on the details.</p>
                                    </li>
                                    <li>
                                        <p>Save money – we help protect expences.</p>
                                    </li>
                                    <li>
                                        <p> Grow – We keep focus on increasing revenue.</p>
                                    </li>
                                    <li>
                                        <p>Save time – we focus on the details.</p>
                                    </li>
                                </ul>             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6 boxes">
                        <div class="why-choose-box">
                            <i class="lni lni-thunder"></i>
                            <h5 class="title">Total Website Solution  </h5>
                            <p class="mb-0">GoBigger ultimate website design and development services . We created sites with most recent innovations to give you runtime solution.</p>
                        </div>
                    </div>
                    <div class="col-md-6 boxes">
                        <div class="why-choose-box">
                            <i class="lni lni-protection"></i>
                            <h5 class="title">Having Years of Experienced</h5>
                            <p class="mb-0">
                                5 years of experience gives us the knowledge to suggest clients best technologies according to his project. It is helping us to the satisfied customer in every parameter.</p>
                        </div>
                    </div>
                    <div class="col-md-6 boxes">
                        <div class="why-choose-box">
                            <i class="lni lni-grow"></i>
                            <h5 class="title">Quality Assurance</h5>
                            <p class="mb-0">Clients can judge the quality of work, the design of website and functionality of the website. Our previous work creates confidence in clients to take a decision-related project.</p>
                        </div>
                    </div>
                    <div class="col-md-6 boxes">
                        <div class="why-choose-box">
                            <i class="lni lni-bulb"></i>
                            <h5 class="title">Best Support</h5>
                            <p class="mb-0">The organization ought to offer progressing help to Customers since you don't have a clue when will you needed help from our side. We are consistently eager to assist customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>
<!--  Why Choose End  -->

<!--  Counted Start  -->
<section class="counted-01 py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">Fun Facts</h2>
                            <h5 class="sub-title">Have  many funfacts for the best works. </h5>
                        </div>
                    </div>
                </div>
                <p>We don’t pursue every company that needs computer support. We choose only clients that share in our values.</p>
            </div>
            <div class="col-lg-7">
                <div class="counted">
                    <div class="row">
                        <!-- Item-01 -->
                        <div class="col-6 col-sm-3 count-item">
                            <div class="count-content">
                                <span class="timer count-number" data-from="0" data-to="6" data-speed="5000">0</span>
                            <p class="mb-0">Team Member</p>
                            </div>
                        </div>
                        <!-- Item-02 -->
                        <div class="col-6 col-sm-3 count-item">
                            <div class="count-content">
                                <span class="timer count-number" data-from="0" data-to="21" data-speed="5000">0</span>
                                <p class="mb-0">Project Done</p>
                            </div>
                        </div>
                        <!-- Item-03 -->
                        <div class="col-6 col-sm-3 count-item">
                            <div class="count-content">
                                <span class="timer count-number" data-from="0" data-to="3" data-speed="5000">0</span>
                            <p class="mb-0">Get Award</p>
                            </div>
                        </div>
                        <!-- Item-04 -->
                        <div class="col-6 col-sm-3 count-item">
                            <div class="count-content">
                                <span class="timer count-number" data-from="0" data-to="20" data-speed="5000">0</span>
                                <p class="mb-0">Happy Client</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--   Counted End   -->

<!--  Services Start  -->
<section id="services" class="services-01 py-6">
    <div class="container">
        <!--  Services Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2 class="main-title">Our Services</h2>
                    <p class="sub-title">The ideal Business Consulting Services</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!--  Item 01  -->
            @foreach ($services as $item)
                
            <div class="col-md-6 col-lg-4">
                <div class="services-box">
                    <i class="{{$item->icon}}"></i>
                    <h5 class="services-title">{{$item->title}}</h5>
                    <?php $description = strip_tags($item->content);
                    $description = substr($description,0,60);?>
                    <p>{{$description}}</p>
                <a class="services-link" href="{{url('service/'.$item->slug)}}">Read More</a>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</section>
<!--   Services End   -->

<!--  Banner  Start  -->
<Section class="banner-01 py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner-content">
                    <i class="lni lni-phone"></i>
                    <div class="banner-text">
                        <h5>Do You Have Any Question About Our Services ?</h5>
                        <p>We Provide Free Consultation So lets Talk With Us.</p>
                    </div>
                    <div class="align-items-center d-flex">
                        <a href="javascript:void(0);" class="pill-button-02">Contact Us</a>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</Section>
<!--  Banner  End  -->

<!--  Portfolio Start  -->
{{-- <section id="portfolio" class="portfolio-01 py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2 class="main-title">Our Work</h2>
                    <p class="sub-title">See our latest work to get to know us</p>
                </div>
            </div>
        </div>
        <div class="portfolio-body">
            <div class="row">
                <!--  Item 01  -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-box">
                        <div class="portfolio-img">
                            <img src="{{asset('public/frontend')}}/assets/img/portfolio-01.jpg" alt="/">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <div class="portfolio-hover-icon">
                                    <a href="portfolio-single-01.html">
                                        <i class="lni lni-plus"></i>
                                    </a>
                                </div>
                                <h6 class="portfolio-title-box">
                                    <a href="portfolio-single-01.html">Business Growth</a>
                                </h6>
                                <p class="portfolio-category">Business</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Item 02  -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-box">
                        <div class="portfolio-img">
                            <img src="{{asset('public/frontend')}}/assets/img/portfolio-02.jpg" alt="/">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <div class="portfolio-hover-icon">
                                    <a href="portfolio-single-01.html">
                                        <i class="lni lni-plus"></i>
                                    </a>
                                </div>
                                <h6 class="portfolio-title-box">
                                    <a href="portfolio-single-01.html">Digital Analysis</a>
                                </h6>
                                <p class="portfolio-category">Consulting</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Item 03  -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-box">
                        <div class="portfolio-img">
                            <img src="{{asset('public/frontend')}}/assets/img/portfolio-03.jpg" alt="/">
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <div class="portfolio-hover-icon">
                                    <a href="portfolio-single-01.html">
                                        <i class="lni lni-plus"></i>
                                    </a>
                                </div>
                                <h6 class="portfolio-title-box">
                                    <a href="portfolio-single-01.html">Business Growth</a>
                                </h6>
                                <p class="portfolio-category">Consulting</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-more-button">
                    <a class="pill-button-01" href="portfolio-3-columns-01.html">
                        <span>View More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--   Portfolio End   -->



<!--  Client Start  -->
<section id="testimonial" class="testimonial-01 py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2 class="main-title">Testimonial</h2>
                    <p class="sub-title"> We are happy to share client’s review.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-4 mt-lg-0">
                <div class="testimonial-items">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--  Item 01 -->
                            <div class="swiper-slide">
                                <div class="testimonial-image">
                                    <img src="{{asset('public/frontend')}}/assets/img/client-01.jpg" alt="/">
                                </div>
                                <div class="testimonial-content">
                                    <p class="testimonial-comment">"In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder. "</p>
                                    <h6 class="testimonial-name">Merry Doe, <span class="testimonial-job">Seo Manager</span></h6>
                                </div>
                            </div>
                            <!--  Item 02 -->
                            <div class="swiper-slide">
                                <div class="testimonial-image">
                                    <img src="{{asset('public/frontend')}}/assets/img/client-02.jpg" alt="/">
                                </div>
                                <div class="testimonial-content">
                                    <p class="testimonial-comment">"In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder. "</p>
                                    <h6 class="testimonial-name">John Doe, <span class="testimonial-job">Seo Manager</span></h6>
                                </div>
                            </div>
                            <!--  Item 03 -->
                            <div class="swiper-slide">
                                <div class="testimonial-image">
                                    <img src="{{asset('public/frontend')}}/assets/img/client-03.jpg" alt="/">
                                </div>
                                <div class="testimonial-content">
                                    <p class="testimonial-comment">"In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder a publication to be made.In a professional context it often happens that private or corporate clients corder. "</p>
                                    <h6 class="testimonial-name">Sarah Doe, <span class="testimonial-job">Seo Manager</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button"></div>
                        <div class="swiper-button-prev swiper-button"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Client End  -->

<!--  Price Start  -->
{{-- <section id="price" class="price-01 py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2 class="main-title">Pricing Plan</h2>
                    <p class="sub-title">We offer the best price for you!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!--  Item 01  -->
            <div class="col-md-6 col-lg-4">
                <div class="price-box">
                    <div class="price-cost"><span>$</span> 368.99
                        <div class="price-cost-border"></div>
                    </div>
                    <h3 class="price-title">Basic Plan</h3>
                    <div class="price-text">
                        <p>Standard Feature</p>
                        <p>Business And Finance Analyzing</p>
                        <p>tricket Management</p>
                        <p>24/7 Hours Support</p>
                    </div>
                    <div class="price-button">
                        <a class="pill-button-01 mt-3" href="javascript:void(0);">Get Started</a>
                    </div>
                </div>
            </div>
            <!--  Item 02  -->
            <div class="col-md-6 col-lg-4">
                <div class="price-box">
                    <div class="price-cost"><span>$</span> 568.99
                        <div class="price-cost-border"></div>
                    </div>
                    <h3 class="price-title">Standard Plan</h3>
                    <div class="price-text">
                        <p>Standard Feature</p>
                        <p>Business And Finance Analyzing</p>
                        <p>tricket Management</p>
                        <p>24/7 Hours Support</p>
                    </div>
                    <div class="price-button">
                        <a class="pill-button-01 mt-3" href="javascript:void(0);">Get Started</a>
                    </div>
                </div>
            </div>
            <!--  Item 03  -->
            <div class="col-md-6 col-lg-4">
                <div class="price-box">
                    <div class="price-cost"><span>$</span> 968.99
                        <div class="price-cost-border"></div>
                    </div>
                    <h3 class="price-title">Extended Plan</h3>
                    <div class="price-text">
                        <p>Standard Feature</p>
                        <p>Business And Finance Analyzing</p>
                        <p>tricket Management</p>
                        <p>24/7 Hours Support</p>
                    </div>
                    <div class="price-button">
                        <a class="pill-button-01 mt-3" href="javascript:void(0);">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--  Price End  -->

<!--  Contact Start  -->
<section class="contact-01 py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2 class="main-title">Contact us</h2>
                    <p class="sub-title">Get in touch for any kind of informations</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <!--  Item 01 -->
                    {{-- <div class="col-lg-12">
                        <div class="info-box">
                            <div class="item-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="item-text">
                                <h5>Visit office</h5>
                                <p class="mb-0">3556 Hartford Way Vlg, Mount of Pleasant, SC, 29466, Australia.</p>
                            </div>
                        </div>
                    </div> --}}
                    <!--  Item 02 -->
                    <div class="col-lg-12">
                        <div class="info-box">
                            <div class="item-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="item-text">
                                <h5>Phone number</h5>
                                <p class="mb-0">+91 7276915896</p>
                                {{-- <p class="mb-0">+(123)4567899</p> --}}
                            </div>
                        </div>
                    </div>
                    <!--  Item 03 -->
                    <div class="col-lg-12">
                        <div class="info-box">
                            <div class="item-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="item-text">
                                <h5>Email us</h5>
                                <p class="mb-0"><a href="https://retrina.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="35664045455a474175504d54584559501b565a58">info.gobigger@gmail.com</a></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-box">
                    <div class="contact-form">
                    <form id="contactForm" action="{{url('store-contact-us')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6 form-item">
                                    <div class="form-group">
                                        <input name="first_name" id="name" type="text" class="form-control" placeholder="First name*" required >
                                    </div>
                                </div>
                                <div class="col-lg-6 form-item">
                                    <div class="form-group">
                                        <input name="last_name" id="family" type="text" class="form-control" placeholder="Last name*" required >
                                    </div>
                                </div>
                                <div class="col-lg-6 form-item">
                                    <div class="form-group">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email*" required >
                                    </div>
                                </div>
                                <div class="col-lg-6 form-item">
                                    <div class="form-group">
                                        <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject*" required >
                                    </div>
                                </div>
                                <div class="col-12 form-item">
                                    <div class="form-group">
                                        <textarea name="comments" id="comments" rows="4" class="form-control textarea" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-left">
                                    <a href="javascript:void(0)" class="pill-button-01" id="submit-btn" onclick="sendEmail()">Send Message</a>
                                    <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                        <div class="toast-body d-inline-block"></div>
                                        <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true" class="lni lni-close size-xs "></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--   Contact End   -->

{{-- <!--  Blog Start  -->
<section id="blog" class="blog-01 py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2 class="main-title">Our Latest News</h2>
                    <p class="sub-title">We're ready to share our experience.</p>
                </div>
            </div>
            <!-- Item 01 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-box">
                    <div class="blog-image">
                        <a href="blog-single-01.html"><img src="{{asset('public/frontend')}}/assets/img/blog-01.jpg" alt="/"></a>
                    </div>
                    <div class="blog-post-item">
                        <div class="blog-post-content">
                            <div class="blog-dates">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="lni lni-calendar"></i>
                                        Oct,28,2020
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="lni lni-user"></i>
                                        Admin
                                    </li>
                                </ul>
                            </div>
                            <h5 class="blog-title">Why a visual identity system is memorable?</h5>
                        </div>
                        <div class="blog-post-content-hover">
                            <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                            <a class="blog-link" href="blog-single-01.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 02 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-box">
                    <div class="blog-image">
                        <a href="blog-single-01.html"><img src="{{asset('public/frontend')}}/assets/img/blog-02.jpg" alt="/"></a>
                    </div>
                    <div class="blog-post-item">
                        <div class="blog-post-content">
                            <div class="blog-dates">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="lni lni-calendar"></i>
                                        May,18,2020
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="lni lni-user"></i>
                                        Admin
                                    </li>
                                </ul>
                            </div>
                            <h5 class="blog-title">8 Steps to making better decisions</h5>
                        </div>
                        <div class="blog-post-content-hover">
                            <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                            <a class="blog-link" href="blog-single-01.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Item 03 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-box">
                    <div class="blog-image">
                        <a href="blog-single-01.html"><img src="{{asset('public/frontend')}}/assets/img/blog-03.jpg" alt="/"></a>
                    </div>
                    <div class="blog-post-item">
                        <div class="blog-post-content">
                            <div class="blog-dates">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="lni lni-calendar"></i>
                                        June,11,2020
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="lni lni-user"></i>
                                        Admin
                                    </li>
                                </ul>
                            </div>
                            <h5 class="blog-title">Team we want to work with less mistakes</h5>
                        </div>
                        <div class="blog-post-content-hover">
                            <p class="blog-text">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                            <a class="blog-link" href="blog-single-01.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--   Blog End   --> --}}
@endsection  
@section('script')
    
@endsection
