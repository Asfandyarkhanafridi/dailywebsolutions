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

     <!-- Sidebar Accordions css -->
    <link href="{{asset('assets/plugins/accordion1/css/dark-easy-responsive-tabs.css')}}" rel="stylesheet">

    <!---Font icons css-->
    <link href="{{asset('assets/plugins/iconfonts/plugin.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/iconfonts/icons.css')}}" rel="stylesheet" />
    <link  href="{{asset('assets/fonts/fonts/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Data table css -->
    <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />

    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
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

<!-- include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<!--Bootstrap.min js-->
<script src="{{asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!--Side-menu js-->
<script src="{{asset('assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>

<!-- Sidebar Accordions js -->
<script src="{{asset('assets/plugins/accordion1/js/easyResponsiveTabs.js')}}"></script>

<!-- Custom scroll bar js-->
<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- Data tables js-->
<script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/datatable.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

<!-- Custom js-->
<script src="{{asset('assets/js-dark/custom.js')}}"></script>


<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

<script>
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[id="avatar"]');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement);

    FilePond.setOptions({
        server: {
            url: '/upload',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        },
    });

</script>

@yield('more-script')

</body>
</html>
