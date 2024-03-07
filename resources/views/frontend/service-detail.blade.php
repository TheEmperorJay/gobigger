@extends('frontend.layout.master') 
@section('style')
@endsection
@section('meta_tags')
@endsection
@section('content') 
    
<!--  Home Start  -->
<section id="home" class="page-header  py-6 breadcrumbs">
    <div class="home-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index-01.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">{{$service->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Home End  -->
<!--  Home End  -->

<!--  Services Start  -->
<section class="services-wrapper py-6">
    <div class="container">
        <div class="row row-sticky">
            <div class="col-lg-4 col-sticky property-sidebar-sticky">
                <div class="menu-services-container">
                    <h4 class="mb-4">Featured Services</h4>
                    <ul class="navbar-nav nav-pills menu-services">
                        @foreach ($services as $item)                            
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('service/'.$item->slug)}}">{{$item->title}}</a>
                        </li>
                        @endforeach                        
                    </ul>
                    
                    <div class="contact-infos">
                        <h4 class="mt-5 mb-4">Contact Info</h4>
                        <div class="row">
                            <!--  Item 01 -->
                            <!-- <div class="col-lg-12">
                                <div class="info-box">
                                    <div class="item-icon">
                                        <i class="lni lni-map-marker"></i>
                                    </div>
                                    <div class="item-text">
                                        <h5>Visit office</h5>
                                        <p class="mb-0">3556 Hartford Way Vlg, Mount of Pleasant, SC, 29466, Australia.</p>
                                    </div>
                                </div>
                            </div> -->
                            <!--  Item 02 -->
                            <div class="col-lg-12">
                                <div class="info-box">
                                    <div class="item-icon">
                                        <i class="lni lni-phone"></i>
                                    </div>
                                    <div class="item-text">
                                        <h5>Phone number</h5>
                                        <p class="mb-0">+91 7276915896</p>
                                       
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
                                        <p class="mb-0"><a href="https://retrina.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f0c2a2f2f302d2b1f3a273e322f333a713c3032">info.gobiggers@gmail.com</a></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="services-content-wrapper">
                    <div class="project-img">
                        <img src="{{asset('storag/app/'.$service->image)}}" alt="/">
                    </div>
                    <h2 class="my-3">{{$service->title}} </h2>
                   {!! $service->content !!}
                    
                    <div class="counted py-5">
                        <div class="row">
                                <!-- Item-01 -->
                                <div class="col-md-4 count-item">
                                <div class="count-icon">
                                    <i class="lni lni-pencil-alt base-color"></i>
                                </div>
                                <div class="count-content">
                                    <span class="timer count-number" data-from="0" data-to="6549" data-speed="5000">0</span>
                                    <p class="mb-0">Project Done</p>
                                </div>
                            </div>
                            <!-- Item-02 -->
                            <div class="col-md-4 count-item">
                                <div class="count-icon">
                                    <i class="lni lni-medall  base-color"></i>
                                </div>
                                <div class="count-content">
                                    <span class="timer count-number" data-from="0" data-to="793" data-speed="5000">0</span>
                                <p class="mb-0">Get Award</p>
                                </div>
                            </div>
                            <!-- Item-03 -->
                            <div class="col-md-4 count-item">
                                <div class="count-icon">
                                    <i class="lni lni-emoji-smile base-color"></i>
                                </div>
                                <div class="count-content">
                                    <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">0</span>
                                    <p class="mb-0">Happy Client</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offering">
                        <h2>What We Offer</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="row">
                            <!--  Item-01  -->
                            <div class="col-lg-6">
                                <div class="offer-box">
                                    <div class="item-icon">
                                        <i class="lni lni-bulb"></i>
                                    </div>
                                    <div class="item-text">
                                        <h5>Logo Design</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    </div>
                                </div>
                            </div>
                                <!--  Item-02  -->
                                <div class="col-lg-6">
                                <div class="offer-box">
                                    <div class="item-icon">
                                        <i class="lni lni-customer"></i>
                                    </div>
                                    <div class="item-text">
                                        <h5>Mobile Apps</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    </div>
                                </div>
                            </div>
                                <!--  Item-03  -->
                                <div class="col-lg-6">
                                <div class="offer-box">
                                    <div class="item-icon">
                                        <i class="lni lni-thunder"></i>
                                    </div>
                                    <div class="item-text">
                                        <h5>Web Hosting</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    </div>
                                </div>
                            </div>
                                <!--  Item-04  -->
                                <div class="col-lg-6">
                                <div class="offer-box">
                                    <div class="item-icon">
                                        <i class="lni lni-protection"></i>
                                    </div>
                                    <div class="item-text">
                                        <h5>Stock Photos</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-box">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="true">Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="advantages-tab" data-toggle="tab" href="#advantages" role="tab" aria-controls="advantages" aria-selected="false">Analysis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="guarantees-tab" data-toggle="tab" href="#guarantees" role="tab" aria-controls="guarantees" aria-selected="false">guarantees</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-4 pb-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>
                            <div class="tab-pane fade" id="advantages" role="tabpanel" aria-labelledby="advantages-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            <div class="tab-pane fade" id="guarantees" role="tabpanel" aria-labelledby="guarantees-tab">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="sidebar-toggler d-lg-none">
                <span><i class="lni lni-pencil-alt"></i></span>
            </div>
        </div>
    </div>
</section>
<!--   Services End   -->

@endsection      