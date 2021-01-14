<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jul 2020 17:52:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Pandey Ji</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Favicon -->
    
    <link href="{{asset('img/favicon.png')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link href="{{asset('img/favicon.png')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="{{asset('img/favicon.png')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/all.min.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('fonts/flaticon.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/fullcalendar.min.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/animate.min.css')}}" rel='stylesheet' type='text/css' />
   <link href="{{asset('../css/style.css')}}" rel='stylesheet' type='text/css' />
   
    <script src="{{asset('js/modernizr-3.6.0.min.js')}}"></script>
   @yield('styles')
</head>

<body >
   
    <div id="preloader"></div>
    <div id="wrapper" class="wrapper " style="background-color: #abcdef;" >
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="{{asset('images/corona world.jpg')}}" alt="logo" style="border-radius: 5px;height: 40px;width: 40px;">
                    </a>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                   
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">Admin</h5>
                            </div>
                            <div class="admin-img">
                                <img src="{{asset('img/figure/admin.jpg')}}" alt="Admin">
                            </div>
                        </a>
                        
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{asset('img/logo1.png')}}" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view text-right">
                       
                       
                       
                        <li class="nav-item">
                            <a href="/home" class="nav-link"><span>World</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/countries" class="nav-link"><span>All Country</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/country/from/to" class="nav-link"><span>World From-To</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/india/states" class="nav-link"><span>India States</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/india/state/district" class="nav-link"><span>India Districts</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="/india/from/to" class="nav-link"><span>India From-To</span></a>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->
<!-- ************************************************** -->


@yield('main_page')



<!-- ************************************************************** -->
                <!-- Footer Area Start Here -->
                <footer class="footer-wrap-layout1">
                    <div style="width: 100%;height: 3px;background-image: linear-gradient(to left ,red,#cc06cc, blue);">
                        
                    </div>
                    <div class="copyright">
                        @Pandey ji
                        ( smpandey.2008@gmail.com )
                    </div>
                </footer>
                <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
   <!--  <script src="js/jquery-3.3.1.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Plugins js -->
   <!--  <script src="js/plugins.js"></script> -->
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <!-- Popper js -->
    <!-- <script src="js/popper.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Counterup Js -->
    <!-- <script src="js/jquery.counterup.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <!-- Moment Js -->
    <!-- <script src="js/moment.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
    <!-- Waypoints Js -->
    <!-- <script src="js/jquery.waypoints.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- Scroll Up Js -->
    <!-- <script src="js/jquery.scrollUp.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <!-- Full Calender Js -->
    <!-- <script src="js/fullcalendar.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/fullcalendar.min.js')}}"></script>
    <!-- Chart Js -->
    <!-- <script src="js/Chart.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/Chart.min.js')}}"></script>
    <!-- Custom Js -->
    <!-- <script src="js/main.js"></script> -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    



@yield('scripts')


</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jul 2020 17:53:18 GMT -->
</html>