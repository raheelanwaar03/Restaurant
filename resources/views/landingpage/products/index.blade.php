@extends('landingpage.layout.app')

@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop List Style </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-area pt-95 pb-70">
        <div class="custom-container">
            <div class="product-tab-list-wrap text-center mb-40 yellow-color">
                <div class="product-tab-list nav">
                    <a class="active" href="#tab1" data-bs-toggle="tab">
                        <h4>All Food Items</h4>
                    </a>
                </div>
                <p>Typi non habent claritatem insitam est usus legentis in qui facit eorum claritatem, investigationes
                    demonstraverunt lectores legere me lius quod legunt saepius.</p>
            </div>
            <div class="tab-content jump yellow-color">
                <div id="tab1" class="tab-pane active">
                    <div class="row">
                        @forelse ($foods as $food)
                            <div class="custom-col-5">
                                <div class="product-wrapper mb-25">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="{{ asset('images/' . $food->image) }}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <div class="pro-action-left">
                                                <form action="{{ route('User.Add.To.Cart', ['id' => $food->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button class="cartBtn bg-transparent" type="submit"
                                                        title="Add To Cart"><i class="ion-android-cart"></i> Add to
                                                        Cart</button>
                                                </form>
                                            </div>
                                            <div class="pro-action-right">
                                                <a title="Quick View" data-bs-toggle="modal"
                                                    data-bs-target="#{{ $food->slug }}"><i
                                                        class="ion-android-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4>
                                            <a href="product-details.html">{{ $food->title }}</a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span>${{ $food->price }}</span>
                                            {{-- <span class="product-price-old">$120.00 </span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4>No food added yet</h4>
                        @endforelse
                        <div class="">
                            {{ $foods->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
