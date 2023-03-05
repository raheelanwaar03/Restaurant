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
                            <h3>Add Food</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Food') }}" method="Post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Food Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Add Food Title">
                                </div>
                                <div class="form-group">
                                    <label for="">Food Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Add Food slug">
                                </div>
                                <div class="form-group">
                                    <label for="">Food Price</label>
                                    <input type="number" name="price" class="form-control" placeholder="Add Food Price">
                                </div>
                                <div class="form-group">
                                    <label for="">Slect Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($categorys as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Food Description</label>
                                    <input type="text" name="des" placeholder="Enter Food Details"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Food Image</label>
                                    <input type="file" name="image" class="form-control" placeholder="Add Food Image">
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
