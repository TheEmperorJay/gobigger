<div class="sidebar" data-color="purple" data-image="http://via.placeholder.com/1080x1920">
    <div class="sidebar-wrapper">
            <!--Begins Logo-->
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                {{Auth::user()->first_name}} {{Auth::user()->last_name}}
            </a>
        </div>
        <!--End Logo-->
        
        <ul class="nav">

            <li class="nav-item {{URL::to('admin') == url()->current() ? 'active' : ''}}">
                <a class="nav-link" href="{{URL::to('admin')}}">
                    <i class="fa fa-th-large"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <!--Service Management-->
            <li class="nav-item {{(URL::to('admin/service-list') == url()->current()) || (URL::to('admin/add-service') == url()->current()) || (URL::to('admin/view-service').'/'.collect(request()->segments())->last() == url()->current()) || (URL::to('admin/edit-category').'/'.collect(request()->segments())->last() == url()->current()) ? 'active' : ''}}">
                <a class="nav-link" href="{{URL::to('admin/service-list')}}">
                    <i class="fas fa-list"></i>
                    <p>
                        Service Management
                    </p>
                </a>
            </li>
            <!--Category Management-->
            <li class="nav-item {{(URL::to('admin/category-list') == url()->current()) || (URL::to('admin/add-category') == url()->current()) || (URL::to('admin/view-category').'/'.collect(request()->segments())->last() == url()->current()) || (URL::to('admin/edit-category').'/'.collect(request()->segments())->last() == url()->current()) ? 'active' : ''}}">
                <a class="nav-link" href="{{URL::to('admin/category-list')}}">
                    <i class="fas fa-list"></i>
                    <p>
                        Category Management
                    </p>
                </a>
            </li>

            <!--CMS Management-->
            {{-- <li
                class="nav-item {{(URL::to('admin/page-list') == url()->current()) || (URL::to('admin/add-page') == url()->current()) || (URL::to('admin/edit-page').'/'.collect(request()->segments())->last() == url()->current()) || (URL::to('admin/view-page').'/'.collect(request()->segments())->last() == url()->current()) ? 'active' : ''}}">
                <a class="nav-link" data-toggle="collapse" href="#cmsManagement">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <p>
                        CMS Management
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse sub-menu {{(URL::to('admin/page-list') == url()->current()) || (URL::to('admin/add-page') == url()->current()) || (URL::to('admin/edit-page').'/'.collect(request()->segments())->last() == url()->current()) || (URL::to('admin/view-page').'/'.collect(request()->segments())->last() == url()->current()) ? 'show' : ''}}"
                    id="cmsManagement">
                    <ul class="nav">
                        <li
                            class="nav-item {{(URL::to('admin/page-list') == url()->current()) || (URL::to('admin/add-page') == url()->current()) || (URL::to('admin/edit-page').'/'.collect(request()->segments())->last() == url()->current()) || (URL::to('admin/view-page').'/'.collect(request()->segments())->last() == url()->current()) ? 'active' : ''}}">
                            <a class="nav-link sub_link second_level_link"
                                href="{{URL::to('admin/page-list')}}">
                                <p>
                                    <i class="fa fa-cog"></i> CMS Pages
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{(URL::to('admin/faq-list') == url()->current()) ? 'active' : ''}}">
                            <a class="nav-link sub_link second_level_link"
                                href="{{URL::to('admin/faq-list')}}">
                                <p>
                                    <i class="fa fa-cog"></i> FAQ
                                </p>
                            </a>
                        </li>
                        <!-- <li
                            class="nav-item {{(URL::to('admin/howitworks') == url()->current()) ? 'active' : ''}}">
                            <a class="nav-link sub_link second_level_link"
                                href="{{URL::to('admin/howitworks')}}">
                                <p>
                                    <i class="fa fa-cog"></i> How It Works
                                </p>
                            </a>
                        </li> -->
                        <!-- <li
                            class="nav-item {{(URL::to('admin/footer') == url()->current()) ? 'active' : ''}}">
                            <a class="nav-link sub_link second_level_link"
                                href="{{URL::to('admin/footer')}}">
                                <p>
                                    <i class="fa fa-cog"></i> Footer
                                </p>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </li> --}}

            {{-- Blog Management --}}
            <li class="nav-item {{(URL::to('admin/blog-list') == url()->current()) || (URL::to('admin/add-blog') == url()->current()) || (URL::to('admin/edit-blog').'/'.collect(request()->segments())->last() == url()->current()) ? 'active' : ''}}">
                <a class="nav-link" href="{{URL::to('admin/blog-list')}}">
                    <i class="fas fa-list"></i>
                    <p>
                        Blog Management
                    </p>
                </a>
            </li>
              {{-- Testimonial Management --}}
            <li class="nav-item {{(URL::to('admin/testimonial-list') == url()->current()) || (URL::to('admin/add-testimonial') == url()->current()) || (URL::to('admin/edit-testimonial').'/'.collect(request()->segments())->last() == url()->current()) ? 'active' : ''}}">
                <a class="nav-link" href="{{URL::to('admin/testimonial-list')}}">
                    <i class="fas fa-list"></i>
                    <p>
                        Testimonial Management
                    </p>
                </a>
            </li>

            <li class="nav-item {{(URL::to('admin/customer-queries') == url()->current()) || (URL::to('admin/view-query').'/'.collect(request()->segments())->last() == url()->current())? 'active' : ''}}">
                <a class="nav-link" href="{{URL::to('admin/customer-queries')}}">
                    <i class="fa fa-address-card"></i>
                    <p>
                        Customer Queries
                    </p>
                </a>
            </li>
            
        </ul>
    </div>
</div>
    <!--End Sidebar
