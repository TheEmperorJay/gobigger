 <!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <i class="glyphicon glyphicon-success"></i> {{ Session::get('success') }}
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <i class="glyphicon glyphicon-danger"></i> {{ Session::get('error') }}
            </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <i class="glyphicon glyphicon-danger"></i> {{$errors->first()}}
        </div>
        @endif
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" data-color="purple"
                        class="btn btn-fill btn-round btn-icon d-none d-lg-block">
                    <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                    <i class="fa fa-bars visible-on-sidebar-mini"></i>
                </button>
            </div>
            <!-- <a class="navbar-brand" id="page_header_title" href="javascript:void(0)">
                <i class="material-icons">check_box_outline_blank</i>
                Page Blank
            </a> -->
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            {{-- <ul class="nav navbar-nav">
                <li>
                    <form class="navbar-form navbar-left navbar-search-form d-none d-lg-block" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon"><i class="icons icon-magnifier p-r-10"></i></span>
                        </div>
                    </form>
                </li>
            </ul> --}}
            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-slide">
                    <a class="nav-link" href="{{URL::to('admin/notifications')}}" id="navbarDropdownMenuLink"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span>{{auth()->user()->unreadNotifications->count()}}</span>
                    </a>
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">account_box</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{URL::to('admin/profile')}}">
                            <i class="material-icons align-middle">account_circle</i> Profile
                        </a>
                        <a class="dropdown-item" href="{{URL::to('admin/change-password')}}">
                            <i class="material-icons align-middle">lock</i> Change Password
                        </a>
                        <a href="{{URL::to('admin/logout')}}" class="dropdown-item">
                            <i class="material-icons align-middle">power_settings_new</i> Log out
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
