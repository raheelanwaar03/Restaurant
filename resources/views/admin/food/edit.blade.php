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
                            <h3>Edit Food</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Food', ['slug' => $food->slug]) }}" method="Post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Food Title</label>
                                    <input type="text" name="title" value="{{ $food->title }}" class="form-control"
                                        placeholder="Edit Food Title">
                                </div>
                                <div class="form-group">
                                    <label for="">Food Price</label>
                                    <input type="number" name="price" value="{{ $food->price }}" class="form-control"
                                        placeholder="Edit Food Price">
                                </div>
                                <div class="form-group">
                                    <label for="">Extera Toping</label>
                                    <input type="number" name="extera" value="{{ $food->extera }}" class="form-control"
                                        placeholder="Edit Extera Toping">
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
                                    <input type="text" name="des" class="form-control" value="{{ $food->des }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Food Image</label>
                                    <input type="file" name="image" class="form-control" placeholder="Add Food Image">
                                </div>
                                <div class="form-gorup">
                                    <img src="{{ asset('images/'. $food->image) }}" height="180px" width="180px"
                                        alt="{{ $food->image }}">
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
