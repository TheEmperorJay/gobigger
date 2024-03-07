@extends('frontend.layout.master') 
@section('style')
@endsection
@section('meta_tags')
@endsection
@section('content') 
    
   <!--  Contact Start  -->
   <section class="contact contact-02 py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2 class="main-title">Contact Us</h2>
                    <p class="sub-title">Get in touch for any kind of help.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 pr-lg-0">
                <div class="contact-form">
                    <form id="contactForm" action="{{url('store-contact-us')}}" method="post">
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
                            <div class="col-sm-12 text-left pb-4">
                                <a href="javascript:void(0)" class="pill-button-02" id="submit-btn" onclick="sendEmail()">Send Message</a>
                                    
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
            <div class="col-lg-6 pl-lg-0">
                <div class="contact-img">
                    <img src="{{asset('public/frontend')}}/assets/img/bg-contact-02.jpg" alt="/">
                </div>
            </div>
        </div>
    </div>
</section>
<!--   Contact End   -->
@endsection   