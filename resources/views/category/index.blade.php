@extends('layouts.nav')
@section('title', 'Category')
@section('margin', 'my-md-5')
@section('app-content', 'app-content')


@section('main-content')
    <!-- page-header -->
    <div class="page-header">
        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('category.create')}}">Create Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Category') }}</li>
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
                        <div class="card-header">{{ __('Category') }}</div>
                        <div class="card-body">
                            @include('message')
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped table-bordered text-nowrap" >
                                    <thead>
                                    <tr style="font: bold">
                                        <th>Category ID</th>
                                        <th>Category Name</th>
                                        <th>Date Created</th>
                                        <th>Created By User</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td>{{$category->date_created}}</td>
                                        <td>{{$category->user->name}}</td>
                                        <td>
                                            <form method="Post" action="{{route('category.destroy',$category->id)}}">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('category.edit', $category->id)}}" class="btn btn-success">EDIT</a>
                                                <button type="submit" class="btn btn-danger">DEL</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection

@section('more-script')
    <!-- Datatables-->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3 ]
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3 ]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3 ]
                        }
                    }
                ]
            } );
        } );
    </script>
@stop
