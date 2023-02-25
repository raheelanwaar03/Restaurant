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
                                    @foreach ($categorys as $category)
                                        <tr>
                                            <td> {{ $category->title }} </td>
                                            <td> {{ $category->des }} </td>
                                            <td> {{ $category->slug }} </td>
                                            <td><img src="{{ asset('images/' . $category->image) }}"
                                                    class="img-fluid img-thumbnail" height="150px" width="150px"
                                                    alt="{{ $category->image }}"></td>
                                            <td>
                                                <a href="{{ route('Admin.Edit.Category',['slug'=>$category->slug]) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('Admin.Show.Category',['slug'=>$category->slug]) }}" class="btn btn-sm btn-danger">Show</a>
                                                <a href="{{ route('Admin.Destroy.Category',['id'=>$category->id]) }}" class="btn btn-sm btn-danger">Delete</a>
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
@endsection
