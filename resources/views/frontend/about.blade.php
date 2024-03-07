@extends('frontend.layout.master') 
@section('style')
@endsection
@section('meta_tags')
@endsection
@section('content') 
    
    <!--  About Start  -->
    <section id="about" class="about-wrapper-02 ">
        <div class="container">
            <div class="about-item py-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title-box">
                            <h2 class="main-title">About our company</h2>
                            <p class="sub-title">Welcome to world best Website & App Devlopment company</p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <!-- Skill -->
                            <div class="skill-box">
                            <div class="skillbar clearfix" data-percent="95%">
                                <div class="skillbar-title"><span>Business</span></div>
                                <div class="skillbar-bar fill-skillbar"></div>
                                <div class="skill-bar-percent">95%</div>
                            </div>
                            <div class="skillbar clearfix " data-percent="85%">
                                <div class="skillbar-title"><span>Commercial</span></div>
                                <div class="skillbar-bar fill-skillbar"></div>
                                <div class="skill-bar-percent">85%</div>
                            </div>
                            <div class="skillbar clearfix" data-percent="80%">
                                <div class="skillbar-title"><span>Developing</span></div>
                                <div class="skillbar-bar fill-skillbar"></div>
                                <div class="skill-bar-percent">80%</div>
                            </div>
                            <div class="skillbar clearfix" data-percent="70%">
                                <div class="skillbar-title"><span>Consulting</span></div>
                                <div class="skillbar-bar fill-skillbar"></div>
                                <div class="skill-bar-percent">70%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-7 pr-0">
                                <div class="year-box">
                                    <h2 class="mb-0">5+ Years Experience In Development.</h2>
                                </div>
                            </div>
                            <div class="col-sm-5 mt-4 pl-0">
                                <img class="image-01" src="{{'public/frontend'}}/assets/img/about-01.jpg" alt="/">
                            </div>
                        </div>
                        <div class="row margin-negative">
                            <div class="col-lg-10 mx-auto">
                                <img class="image-02" src="{{'public/frontend'}}/assets/img/about-02.jpg" alt="/">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  About End  -->
      <!--  Counted Start -->
      <section class="counted-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="counted">
                        <div class="row">
                            <!-- Item-01 -->
                            <div class="col-sm-6 col-lg-3 count-item">
                                <div class="count-icon">
                                    <i class="lni lni-users"></i>
                                </div>
                                <div class="count-content">
                                    <span class="timer count-number" data-from="0" data-to="6" data-speed="5000">0</span>
                                <h6 class="mb-0">Team member</h6>
                                </div>
                            </div>
                            <!-- Item-02 -->
                            <div class="col-sm-6 col-lg-3 count-item">
                                <div class="count-icon">
                                    <i class="lni lni-pencil-alt"></i>
                                </div>
                                <div class="count-content">
                                    <span class="timer count-number" data-from="0" data-to="21" data-speed="5000">0</span>
                                    <h6 class="mb-0">Project Done</h6>
                                </div>
                            </div>
                            <!-- Item-03 -->
                            <div class="col-sm-6 col-lg-3 count-item">
                                <div class="count-icon">
                                    <i class="lni lni-medall"></i>
                                </div>
                                <div class="count-content">
                                    <span class="timer count-number" data-from="0" data-to="3" data-speed="5000">0</span>
                                <h6 class="mb-0">Get Award</h6>
                                </div>
                            </div>
                            <!-- Item-04 -->
                            <div class="col-sm-6 col-lg-3 count-item">
                                <div class="count-icon">
                                    <i class="lni lni-emoji-smile"></i>
                                </div>
                                <div class="count-content">
                                    <span class="timer count-number" data-from="0" data-to="21" data-speed="5000">0</span>
                                    <h6 class="mb-0">Happy Client</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!--   Counted End  -->

    <!--  More About Start  -->
    <section class="more-about-wrapper-02">
        <div class="container">
            <div class="about-item py-6">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{'public/frontend'}}/assets/img/building.jpg" alt="/">
                    </div>
                    <div class="col-lg-6">
                        <div class="title-box">
                            <h2 class="main-title">More About us</h2>
                            <h5 class="sub-title">Learn more about our consulting plans. </h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="more-about">
                            <div class="row mt-4">
                                <!--  Item 01 -->
                                <div class="col-lg-12">
                                    <div class="info-box">
                                        <div class="item-icon">
                                            <i class="lni lni-thunder"></i>
                                        </div>
                                        <div class="item-text">
                                            <h5>Effective leader</h5>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        </div>
                                    </div>
                                </div>
                                <!--  Item 02 -->
                                <div class="col-lg-12">
                                    <div class="info-box">
                                        <div class="item-icon">
                                            <i class="lni lni-customer"></i>
                                        </div>
                                        <div class="item-text">
                                            <h5>Customer Oriented</h5>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        </div>
                                    </div>
                                </div>
                                <!--  Item 03 -->
                                <div class="col-lg-12">
                                    <div class="info-box">
                                        <div class="item-icon">
                                            <i class="lni lni-protection"></i>
                                        </div>
                                        <div class="item-text">
                                            <h5>The tax advantages</h5>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  More About End  -->
    @endsection