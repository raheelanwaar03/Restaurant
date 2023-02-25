@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">Admin Dashboard</h2>
            </div>
            <div class="row">
               <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">All Categories</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-borderd" id="myTable">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($categorys as $category)
                                    <td> {{ $category->title }} </td>
                                    <td> {{ $category->des }} </td>
                                    <td> {{ $category->slug }} </td>
                                    <td><img src="{{ asset('images/'.$category->image) }}" class="img-fluid img-thumbnail" height="150px" width="150px" alt="{{ $category->image }}"></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
@endsection
