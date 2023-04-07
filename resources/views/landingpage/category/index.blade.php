@extends('landingpage.layout.app')

@section('content')
    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/images/background/banner-image-4.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>our menu</span></div>
                <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                <h1><span>All Categories</span></h1>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Contact Info Section-->
    <section class="contact-page">
        <div class="left-bg"><img src="{{ asset('assets/images/background/bg-25.png') }}" alt="" title="">
        </div>
        <div class="right-bg"><img src="{{ asset('assets/images/background/bg-6.png') }}" alt="" title="">
        </div>
        <!--location Section-->
        <div class="location-center">
            <div class="container-fluid">
                <div class="cinfo-box">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="row">
                                @forelse ($categorys as $category)
                                    <div class="col-md-4">
                                        <div class="card bg-transparent m-3" style="width: 18rem;">
                                            <a href="{{ route('Welcome.Category', ['slug' => $category->slug]) }}">
                                                <img class="card-img-top" src="{{ asset('images/' . $category->image) }}"
                                                    alt="Card image cap">
                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title text-white">{{ $category->title }}</h5>
                                                <p class="card-text text-white">{{ $category->des }}.</p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                            </div>
                            <h3>Admin have not added any category yet!</h3>
                            @endforelse
                            <div class="col-md-12 text-center">
                                {{ $categorys->withQueryString()->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
