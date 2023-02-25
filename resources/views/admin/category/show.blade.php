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
                            <h3 class="text-center">Show Category</h3>
                        </div>
                        <div class="card-body">
                            <h2>Titl:{{ $category->title }}</h2>
                            <p>Price:{{ $category->price }}</p>
                            <p>Description:{{ $category->des }}</p>
                            <p>Category:{{ $category->category }}</p>
                            <img src="{{ asset('images/' . $category->image) }}" alt="{{ $category->image }}" height="250px"
                                width="250px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
