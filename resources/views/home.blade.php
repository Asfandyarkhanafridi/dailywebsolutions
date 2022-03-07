@extends('layouts.nav')
@section('title', 'home')
@section('margin', 'my-md-5')
@section('app-content', 'app-content')


@section('main-content')
    <!-- page-header -->
    <div class="page-header">
        <ol class="breadcrumb"><!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Dashboard') }}</li>
        </ol><!-- End breadcrumb -->
    </div>
    <!-- End page-header -->

    <!-- Enter Your Main Content -->
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
