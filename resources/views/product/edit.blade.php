@extends('layouts.nav')
@section('title', 'Edit Product')
@section('margin', 'my-md-5')
@section('app-content', 'app-content')

@section('main-content')
    <!-- page-header -->
    <div class="page-header">
        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('product.index')}}">Product</a></li>
            <li class="breadcrumb-item"><a href="{{route('product.create')}}">Create Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Product') }}</li>
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
                        <div class="card-header">{{ __('Edit Product') }}</div>
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
                            <form method="POST" action="{{route('product.update',$product->id)}}">
                                @csrf
                                @method('put')
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control select" name="category_id" data-placeholder="Choose one (with searchbox)">
                                                <option value="{{$product->category->id}}">{{$product->category->category_name}}</option>
                                                @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="product_name" placeholder="Product Name" value="{{$product->product_name}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" onfocus="(this. type = 'date')" class="form-control fc-datepicker" name="date_created" value="{{$product->date_created}}">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select" name="user_id" data-placeholder="Choose one (with searchbox)">
                                                <option value="{{$product->user->id}}">{{$product->user->name}}</option>
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
