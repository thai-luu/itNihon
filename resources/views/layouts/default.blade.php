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
    <link href="/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="/css/style.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .dcmquang:hover{
            background-color: #fcd7d7 !important;
        }
            
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
   <header class="" data-navbarbg="skin5" style="height: 100px; background-color:#EEEEEE">
    <div id="">
        <div id="" style="display: flex !important;margin-left: 15px">
            <h1 id="" style="margin-top:20px"><a href="/admin/fashion" style="font-family: monospace !important ">Admin page</a></h1>
    
                   
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    
             

                  
     
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                   
                        <a class="dcmquang" href="{{ route('login') }}" style="background-color: #D8D8D8;
                        padding: 10px;
                        border-radius: 10px;
                        margin-right: 50px;
                        margin-top:20px;
                        width: 100px;
                        text-align: center;
                        ">
                            {{ __('Login') }}</a>
                </a>
          
                    @endif
                @else
                        
                            <a class="dcmquang" href="{{ route('logout') }}" style="background-color: #D8D8D8;
                            padding: 10px;
                            border-radius: 10px;
                            margin-right: 50px;
                            margin-top:20px;
                            width: 100px;
                            text-align: center;
                            "
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                            </form>
                       
                  
                @endguest
            </ul>
            </div> 
          </div>
        </div>
   </header>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <aside class="left-sidebar" data-sidebarbg="skin6" style="margin-top: 100px; background-color: darkslategrey !important">
            <!-- Sidebar scroll-->
            
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/fashion"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden=""></i>
                                <span class="hide-menu">All clothes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin/fashion/create"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden=""></i>
                                <span class="hide-menu">Add clothes</span>
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
