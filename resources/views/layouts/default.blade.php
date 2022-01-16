<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
   <header class="topbar" data-navbarbg="skin5">
    <div id="">
        <div id="">
            <h1 id=""><a href="/admin/fashion">FASHION</a></h1>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li><a class="" href="/admin/fashion">HOME</a></li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=" in">
                        <form role="search" class="app-search d-none d-md-block me-3">
                            <input type="text" placeholder="Search..." class="form-control mt-0">
                            <a href="" class="active">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li>
                        <a class="profile-pic" href="#">
                            <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">Steave</span></a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>

              <ul>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="" style="margin-top: 100px">
                            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="" >
                        <a id="" class="" href="#" role="button">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="" aria-labelledby=""  >
                            <a class="" href="{{ route('logout') }}" style="color:blue"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            </div> 
          </div>
        </div>
   </header>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <aside class="left-sidebar" data-sidebarbg="skin6" style="margin-top: 100px">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/fashion/create"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden=""></i>
                                <span class="hide-menu">Clothing manager</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>   
            <div class="container" style="margin-top: 200px">
                <p class="lead">
                    @yield('content')
                </p>
            </div>
    </div>

    
    <script src="/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/app-style-switcher.js"></script>
    <script src="/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>