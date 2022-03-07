@extends('layouts.app')

@section('body-class', 'app sidebar-mini rtl')

@section('nav')
<div class="page">
    <div class="page-main">
        <!--app-header-->
        <div class="app-header header d-flex">
            <div class="container-fluid">
                <div class="d-flex">
                    <a class="header-brand" href="{{route('home')}}">
                        <img src="{{asset('assets/images/brand/logo1.png')}}" class="header-brand-img main-logo" alt="Hogo logo">
                        <img src="{{asset('assets/images/brand/icon.png')}}" class="header-brand-img icon-logo" alt="Hogo logo">
                    </a><!-- logo-->
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href=""></a>
                    <div class="d-flex order-lg-2 ml-auto header-rightmenu">

                        <div class="dropdown">
                            <ul class="nav header-nav">
                                <li class="nav-item dropdown header-option m-2">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-user mr-2"></i>{{ Auth::user()->name }}<i class="mr-2"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="fe fe-log-out mr-2"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- logout -->
                        <div class="dropdown">
                            <a  class="nav-link icon full-screen-link" id="fullscreen-button">
                                <i class="fe fe-maximize-2"></i>
                            </a>
                        </div><!-- full-screen -->
                    </div>
                </div>
            </div>
        </div>
        <!--app-header end-->

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
                <div class="tab-content">
                    <div class="tab-pane active " id="index1">
                        <div class="row row-demo-list">
                            <div id="parentVerticalTab" class="col-md-12">
                                <ul class="resp-tabs-list hor_1">
                                    <li class="resp-tab-active"><i class="side-menu__icon typcn typcn-device-desktop"></i></li>
                                    <li><i class="side-menu__icon typcn typcn-book"></i></li>
                                    <li><i class="side-menu__icon typcn typcn-briefcase"></i></li>
                                </ul>
                                <div class="resp-tabs-container hor_1">

                                    <!-- col 1 -->
                                    <div class="resp-tab-content-active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="font-weight-semibold">Home</h4>
                                                <a class="slide-item" href="{{route('home')}}">Dashboard</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End col 1 -->

                                    <!-- Col 2 -->
                                    <div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="font-weight-semibold">Categories</h4>
                                                <a href="{{route('category.index')}}" class="slide-item">All Categories</a>
                                                <a href="{{route('category.create')}}" class="slide-item">Create Category</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col 2 -->

                                    <!-- Col 3 -->
                                    <div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="font-weight-semibold">Products</h4>
                                                <a href="{{route('product.index')}}" class="slide-item">All Product</a>
                                                <a href="{{route('product.create')}}" class="slide-item">New Product</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col 3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--sidemenu end-->
@endsection
