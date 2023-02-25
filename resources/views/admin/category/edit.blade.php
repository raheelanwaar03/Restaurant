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
                        <h3>Update Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Admin.Update.Category',['slug'=>$category->slug]) }}" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{ $category->title }}" class="form-control" placeholder="Update Category Title">
                            </div> 
                             <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" name="des" value="{{ $category->des }}" class="form-control" placeholder="Update Category Description">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Update Category Image">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('images/'.$category->image) }}" height="180px" width="180px" alt="{{ $category->image }}">
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
