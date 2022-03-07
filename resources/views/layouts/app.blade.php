<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="-Daily WebSolutions" name="description">
    <meta content="Daily WebSolutions" name="Asfand Afridi">
    <meta name="keywords" content=""/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('assets/images/brand/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/favicon.ico')}}" />

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Dashboard css -->
    <link href="{{asset('assets/css-dark/style.css')}}" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

    <!-- Sidemenu css -->
    <link href="{{asset('assets/plugins/toggle-sidebar/dark-full-sidemenu.css')}}" rel="stylesheet" />

    <!--Daterangepicker css-->
    <link href="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

    <!-- Rightsidebar css -->
    <link href="{{asset('assets/plugins/sidebar/dark-sidebar.css')}}" rel="stylesheet">

    <!-- Sidebar Accordions css -->
    <link href="{{asset('assets/plugins/accordion1/css/dark-easy-responsive-tabs.css')}}" rel="stylesheet">

    <!-- Owl Theme css-->
    <link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

    <!-- Morris  Charts css-->
    <link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" />

    <!---Font icons css-->
    <link href="{{asset('assets/plugins/iconfonts/plugin.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/iconfonts/icons.css')}}" rel="stylesheet" />
    <link  href="{{asset('assets/fonts/fonts/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Data table css -->
    <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" />

    <!--Select2 css -->
    <link href="{{('assets/plugins/select2/select2.min-dark.css')}}" rel="stylesheet" />

    <!-- Date Picker css-->
    <link href="{{('assets/plugins/date-picker/spectrum.css')}}" rel="stylesheet" />


</head>
<body class="@yield('body-class') sb-nav-fixed">
<div id="global-loader">
    <img src="{{asset('assets/images/icons/loader.svg')}}" alt="loader">
</div>
@yield('nav')
<!-- app-content-->
            <div class="my-3 @yield('margin') @yield('app-content')">
                <div class="side-app">
                    @yield('main-content')
                </div>
                <!--End side app-->

                <!--footer-->
                <footer class="footer" style=" margin-left: 20px;">
                    <div class="container">
                        <div class="row align-items-center flex-row-reverse">
                            <div class="col-lg-12 col-sm-12   text-center">
                                Copyright © 2022 <a href="https://www.dailywebsolutions.com/" target="_blank">Daily Web Solutions</a>. Designed by <a href="#">Asfand Afridi</a> All rights reserved.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer-->
            </div>
<!-- End app-content-->
    </div>
<!-- End Page Main-->
</div>
<!-- End Page -->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Jquery js-->
<script src="{{asset('assets/js-dark/vendors/jquery-3.2.1.min.js')}}"></script>

<!--Bootstrap.min js-->
<script src="{{asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!--Jquery Sparkline js-->
<script src="{{asset('assets/js-dark/vendors/jquery.sparkline.min.js')}}"></script>

<!-- Star Rating js-->
<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

<!--Moment js-->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>

<!-- Daterangepicker js-->
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!--Side-menu js-->
<script src="{{asset('assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>

<!-- Sidebar Accordions js -->
<script src="{{asset('assets/plugins/accordion1/js/easyResponsiveTabs.js')}}"></script>

<!-- Custom scroll bar js-->
<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!--Owl Carousel js -->
<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/plugins/owl-carousel/owl-main.js')}}"></script>

<!-- Rightsidebar js -->
<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

<!-- Data tables js-->
<script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/datatable.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

<!--Select2 js -->
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js-dark/select2.js')}}"></script>

<!-- Datepicker js -->
<script src="{{('assets/plugins/date-picker/spectrum.js')}}"></script>
<script src="{{('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

<!-- Custom js-->
<script src="{{asset('assets/js-dark/custom.js')}}"></script>

@yield('more-script')

</body>
</html>
