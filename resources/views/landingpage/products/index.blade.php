@extends('layouts.app')

@section('content')
    <!-- Inner Banner Section -->
    <section class="inner-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/images/background/banner-image-1.jpg') }});">
        </div>
        <div class="auto-container">
            <div class="inner">
                <div class="subtitle"><span>our menu</span></div>
                <div class="pattern-image"><img src="{{ asset('assets/images/icons/separator.svg') }}" alt=""
                        title=""></div>
                <h1><span>All Foods.</span></h1>
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
                                @forelse ($foods as $food)
                                    <a data-toggle="modal" data-target="#{{ $food->slug }}">
                                        <div class="col-md-4 mx-3">
                                            <div class="card bg-transparent" style="width: 18rem;">
                                                <img class="card-img-top" src="{{ asset('images/' . $food->image) }}"
                                                    height="250px" width="250px" alt="Card image cap">


                                                <form action="{{ route('User.Add.To.Cart', ['id' => $food->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <h5 class="card-title text-white" style="color:white">
                                                                {{ $food->title }}
                                                            </h5>
                                                            <p class="text-white" style="color:white">{{ $food->price }}$
                                                            </p>
                                                        </div>
                                                        <p class="card-text text-white" style="color:white">
                                                            {{ $food->des }}.</p>
                                                        <div class="text-center">
                                                            <a data-toggle="modal" data-target="#{{ $food->slug }}"
                                                                class="btn btn-danger">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    @empty
                    </div>
                    <h3>Admin have not added any food yet!</h3>
                    @endforelse
                    <div class="col-md-12 text-center">
                        {{ $foods->withQueryString()->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
@endsection
