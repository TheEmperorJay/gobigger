     <!-- Header Start -->
     <header id="header" class="header-section @if(url()->current() == url('/')) fixed-top @endif  w-100  ">
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-header-info">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <i class="lni lni-envelope"></i>
                                    <a href="javascript:void(0);"><span class="__cf_email__" data-cfemail="481b3d3838273a3c082d30292538242d662b2725">info.gobigger@gmail.com</span></a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="lni lni-mobile"></i>
                                    <a href="javascript:void(0);">+91 7276915896</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-header-social">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <i class="lni lni-alarm-clock"></i>
                                    Mon-Fri  10:00 am - 7:00 pm
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>   
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);">
                                        <i class="lni lni-twitter-original"></i>
                                    </a>   
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);">
                                        <i class="lni lni-pinterest"></i>
                                    </a>   
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);">
                                        <i class="lni lni-instagram-original"></i>
                                    </a>   
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
        <div class="row header-bottom dir-ltr">
            <nav class="navbar navbar-expand-lg w-100 header-nav py-0 pl-0">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/frontend')}}/assets/img/gobiggerlogo.png" alt="/"></a>
                <button type="button" data-toggle="collapse" data-target="#toggle-menu" aria-controls="toggle-menu" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed">
                    <span class="lni lni-menu"></span>
                </button>
                <div id="toggle-menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item dropdown ml-auto">
                        <a role="button" href="{{url('/')}}" class="nav-link "><h2>Home</h2></a>                            
                        </li>
                        <li class="nav-item dropdown">
                        <a role="button"  aria-expanded="false" href="{{url('about-us')}}" class="nav-link"><h2>About</h2></a>                            
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>Services</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <?php $services = App\Models\Service::all();?>
                                    @foreach ($services as $item)
                                        
                                    <h3 class="title-feature">
                                        <a href="{{url('service/'.$item->slug)}}">{{$item->title}}</a>
                                    </h3>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </li>
                     
                        {{-- <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>Portfolio</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="portfolio-2-columns-01.html">
                                            portfolio 2 columns
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="portfolio-3-columns-01.html">
                                            portfolio 3 columns
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="portfolio-4-columns-01.html">
                                            portfolio 4 columns
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="portfolio-single-01.html">
                                            portfolio Single
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li> --}}
                        {{-- <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>Blog</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="blog-grid-01.html">
                                            Blog Grid
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="blog-01.html">
                                            Blog
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="blog-single-01.html">
                                            Single Blog
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li> --}}
                        
                        
                        <li class="nav-item dropdown">
                        <a role="button" aria-haspopup="true" aria-expanded="false" href="{{url('contact-us')}}" class="nav-link "><h2>Contact</h2></a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        </div>
    </header>
    <!-- Header End -->
