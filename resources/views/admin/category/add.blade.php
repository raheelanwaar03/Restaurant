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
                        <h3>Add Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Admin.Store.Category') }}" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Add Category Title">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug" class="form-control" placeholder="Add Category slug">
                            </div>
                             <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="des" class="form-control" placeholder="Add Category Description">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Add Category Image">
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </form>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
@endsection
