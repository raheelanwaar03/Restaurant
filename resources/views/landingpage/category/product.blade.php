@extends('landingpage.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="banner-image p-0 mt-n4 mx-n4 position-relative">
            <div class="position-absolute heart-icon">
                <a href="#" class="bg-white text-decoration-none rounded p-2 text-dark font-weight-bold"><i
                        class="far fa-heart"></i></a>
            </div>
            <img src="{{ asset('assets/img/banner.jpg') }}" class="img-fluid shadow">
        </div>
        <div class="mt-n5 bg-white p-3 mb-4 rounded shadow position-relative">
            <div class="osahan-single-top-info d-flex">
                <img src="{{ asset('images/' . $category->image) }}"
                    class="img-fluid border p-2 mb-auto rounded brand-logo shadow-sm">
                <div class="ml-3">
                    <p class="text-muted p-0 mt-2 mb-2">{{ $category->des }}</p>
                    <p class="mb-0 small">
                        <i class="mdi mdi-star text-warning"></i> <span class="font-weight-bold text-dark">4.8</span> - 500+
                        Ratings
                    </p>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs border-0 mb-4" id="myTab" role="tablist">
            <li class="nav-item mr-2" role="presentation">
                <a class="nav-link active border-0 btn btn-light" id="popular-tab" data-toggle="tab" href="#popular"
                    role="tab" aria-controls="popular" aria-selected="true">All Food of {{ $category->title }}</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">

                <div class="row">

                    @forelse ($foods as $food)
                        <a href="#" class="text-decoration-none col-xl-4 col-md-4 mb-4" data-toggle="modal"
                            data-target="#{{ $food->slug }}">
                            <img src="{{ asset('images/' . $food->image) }}" class="img-fluid rounded">
                            <div class="d-flex align-items-center mt-3 mb-2">
                                <p class="text-black h6 m-0">{{ $food->title }}</p>
                            </div>
                            <p class="small mb-2">
                                {{ $food->des }}
                            </p>
                        </a>

                    @empty
                        <h4>No Food</h4>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
