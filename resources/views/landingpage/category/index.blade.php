@extends('layouts.app')

@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('Welcome') }}">Home</a></li>
                    <li class="active">All Categories </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-area pt-95 pb-70">
        <div class="custom-container">
            <div class="product-tab-list-wrap text-center mb-40 yellow-color">
                <div class="product-tab-list nav">
                    <a class="active" href="#tab1" data-bs-toggle="tab">
                        <h4>All Categories in-stock</h4>
                    </a>
                </div>
                <p>We have thousond of food items to feel you joy and healthy.</p>
            </div>
            <div class="tab-content jump yellow-color">
                <div id="tab1" class="tab-pane active">
                    <div class="row">
                        @forelse ($categorys as $category)
                            <div class="custom-col-5">
                                <div class="product-wrapper mb-25">
                                    <div class="product-img">
                                        <a href="{{ route('Welcome.Category',['slug'=>$category->slug]) }}">
                                            <img src="{{ asset('images/' . $category->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4>
                                            <a href="{{ route('Welcome.Category',['slug'=>$category->slug]) }}">{{ $category->title }}</a>
                                        </h4>

                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4>No category added yet</h4>
                        @endforelse
                        <div class="">
                            {{ $categorys->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
