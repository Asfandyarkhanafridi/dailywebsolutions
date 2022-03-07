@extends('layouts.nav')
@section('title', 'New Category')
@section('margin', 'my-md-5')
@section('app-content', 'app-content')


@section('main-content')
    <!-- page-header -->
    <div class="page-header">
        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Create Category') }}</li>
        </ol>
        <!-- End breadcrumb -->
    </div>
    <!-- End page-header -->

    <!-- Enter Your Main Content -->
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Create Category') }}</div>
                        <div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @include('message')
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('category.store')}}">
                                @csrf
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" onfocus= "(this. type='date')" class="form-control" name="date_created" value="<?php echo date('Y-m-d');?>" required>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select" name="user_id" data-placeholder="Choose one (with searchbox)">
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{route('category.index')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Back</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
