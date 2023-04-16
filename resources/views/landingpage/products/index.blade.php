@extends('layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="d-flex align-items-center justify-content-between mb-3 mt-2">
            <h5 class="mb-0">Top Categories</h5>
        </div>

        <div class="row">
            @forelse ($categorys as $category)
            <div class="col-md-3">
                <a href="{{ route('Welcome.Category',['slug'=>$category->slug]) }}" class="text-dark text-decoration-none col-xl-4 col-lg-12 col-md-12">
                    <div class="bg-white shadow-sm rounded d-flex align-items-center p-1 mb-4 osahan-list">
                        <div class="bg-light p-3 rounded">
                            <img src="{{ asset('images/'.$category->image) }}" class="img-fluid">
                        </div>
                        <div class="mx-3 py-2 w-100">
                            <p class="mb-2 text-black">{{ $category->title }}</p>
                            <p class="small mb-2">
                                {{ $category->des }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @empty

            @endforelse
        </div>

        <div class="d-flex align-items-center justify-content-between mb-3 mt-2">
            <h5 class="mb-0">Popular food</h5>
        </div>

        <div class="row">
            @forelse ($foods as $food)
            <div class="col-md-4">
                <a href="#" class="text-decoration-none col-xl-4 col-md-4 mb-4" data-toggle="modal"
                    data-target="#{{ $food->slug }}">
                    <img src="{{ asset('images/'.$food->image) }}" class="img-fluid rounded">
                    <div class="d-flex align-items-center mt-3 mb-2">
                        <p class="text-black h6 m-0">{{ $food->title }}</p>
                    </div>
                    <p class="small mb-2">{{ $food->des }}</p>
                </a>
            </div>
            @empty
            @endforelse
        </div>
    </div>

    </div>
@endsection
