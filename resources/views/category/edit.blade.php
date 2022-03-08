@extends('layouts.nav')
@section('title', 'Edit Category')
@section('margin', 'my-md-5')
@section('app-content', 'app-content')

@section('main-content')
    <!-- page-header -->
    <div class="page-header">
        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
            <li class="breadcrumb-item"><a href="{{route('category.create')}}">Create Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Category') }}</li>
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
                        <div class="card-header">{{ __('Edit Category') }}</div>
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
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('category.update',$category->id)}}">
                                @csrf
                                @method('put')
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="category_name" placeholder="Category Name" value="{{$category->category_name}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" onfocus="(this. type = 'date')" class="form-control fc-datepicker" name="date_created" value="{{$category->date_created}}">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select" name="user_id" data-placeholder="Choose one (with searchbox)">
                                                <option value="{{$category->user->id}}">{{$category->user->name}}</option>
                                                @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
