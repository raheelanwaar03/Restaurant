@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <ul class="nav nav-tabs border-0 mb-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active border-0 bg-primary text-white rounded" id="home-tab" data-toggle="tab"
                    href="#home" role="tab" aria-controls="home" aria-selected="true"><i
                        class="mdi mdi-home-variant-outline mr-2"></i>Categories</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                <div class="row">
                    @forelse ($categorys as $category)
                        <a href="{{ route('Welcome.Category',['slug'=>$category->slug]) }}" class="text-dark text-decoration-none col-xl-4 col-lg-12 col-md-12">
                            <div class="bg-white shadow-sm rounded d-flex align-items-center p-1 mb-4 osahan-list">
                                <div class="bg-light p-3 rounded">
                                    <img src="{{ asset('images/'.$category->image) }}">
                                </div>
                                <div class="mx-3 py-2 w-100">
                                    <p class="mb-2 text-black">{{ $category->title }}</p>
                                    <p class="small mb-2">
                                        {{ $category->des }}
                                    </p>
                                    <a href="{{ route('Welcome.Category',['slug'=>$category->slug]) }}" class="btn btn-primary">Show Food</a>
                                </div>
                            </div>
                        </a>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
