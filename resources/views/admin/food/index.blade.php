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
                            <h3 class="text-center">All Food</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-borderd" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Food Title</th>
                                        <th>Food Price</th>
                                        <th>Food Slug</th>
                                        <th>Food Image</th>
                                        <th>Food Category</th>
                                        <th>Food Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($foods as $food)
                                        <tr>
                                            <td> {{ $food->title }} </td>
                                            <td> {{ $food->price }} </td>
                                            <td> {{ $food->slug }} </td>
                                            <td><img src="{{ asset('images/' . $food->image) }}"
                                                    class="img-fluid img-thumbnail" height="150px" width="150px"
                                                    alt="{{ $food->image }}"></td>
                                            <td> {{ $food->category }} </td>
                                            <td> {{ $food->des }} </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('Admin.Show.Food', ['slug' => $food->slug]) }}"
                                                    class="btn btn-sm btn-info">Show</a>
                                                <a href="{{ route('Admin.Destroy.Food',['id'=>$food->id]) }}" class="btn btn-sm btn-danger">Delete</a>
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
