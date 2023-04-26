@extends('auth.layout.app')

@section('content')
    <div class="breadcrumb-area gray-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('Welcome') }}">Home</a></li>
                    <li class="active">About us </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-us-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="overview-img text-center">
                        <a href="#">
                            <img src="{{ asset('assets/img/banner/about-us.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 d-flex align-items-center">
                    <div class="overview-content-2">
                        <h2>Welcome To <span>{{ env('APP_NAME') }}</span></h2>
                        <p class="peragraph-blog">{{ env('APP_NAME') }} offers a wide variety of delicious and flavorful dishes to
                            satisfy any palate. Start off with an appetizer of crispy fried calamari or savory garlic knots.
                            For entrees, indulge in classic Italian dishes such as spaghetti carbonara or chicken parmesan,
                            or try something new with the spicy shrimp fra diavolo or grilled salmon with lemon butter
                            sauce. Vegetarian and vegan options include a hearty vegetable lasagna or a flavorful quinoa and
                            black bean bowl. End your meal on a sweet note with a decadent tiramisu or a refreshing scoop of
                            sorbet. No matter your taste preferences, this restaurant has something to please everyone.</p>
                        <p>You should eat our food because it's made with high-quality ingredients, expertly prepared by
                            skilled chefs, and served with exceptional care and attention. Each dish is crafted to satisfy
                            your taste buds and nourish your body, providing a memorable and satisfying dining experience
                            you won't forget.</p>
                        <div class="overview-btn mt-45">
                            <a class="btn-style-2" href="{{ route('Welcome.All.Products') }}">Shop now!</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="project-count-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-icon">
                            <span class="ion-ios-briefcase-outline"></span>
                        </div>
                        <div class="count-title">
                            <h2 class="count">360</h2>
                            <span>project done</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-icon">
                            <span class="ion-ios-wineglass-outline"></span>
                        </div>
                        <div class="count-title">
                            <h2 class="count">690</h2>
                            <span>cups of coffee</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30">
                        <div class="count-icon">
                            <span class="ion-ios-lightbulb-outline"></span>
                        </div>
                        <div class="count-title">
                            <h2 class="count">420</h2>
                            <span>branding</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count text-center mb-30 mrgn-none">
                        <div class="count-icon">
                            <span class="ion-happy-outline"></span>
                        </div>
                        <div class="count-title">
                            <h2 class="count">100</h2>
                            <span>happy clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
