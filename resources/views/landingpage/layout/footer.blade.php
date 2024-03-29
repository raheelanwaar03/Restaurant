<div class="footer-area black-bg-2 pt-70">
    <div class="footer-top-area pb-18">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-about mb-40">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/img/logo/footer-logo.png') }}" alt="footer logo" height="100px"
                                    width="100px">
                            </a>
                        </div>
                        <p>Our food is simply the best. We use only the finest ingredients, prepared with skill and
                            passion by our
                            expert chefs. Every dish is a work of art, bursting with flavor and aroma, and served with
                            care and
                            attention. Come and experience the very best in food and hospitality</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-22">
                            <h4>Information</h4>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="{{ route('Welcome.About-Us') }}">About Us</a></li>
                                <li><a href="{{ route('Welcome.Contact-Us') }}">Contact Us</a></li>
                                <li><a href="{{ route('Welcome.All.Products') }}">Vist our Food Menu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-22">
                            <h4>My Account</h4>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="{{ route('Welcome') }}">Home</a></li>
                                <li><a href="{{ route('User.All.Orders') }}">MY Orders</a></li>
                                <li><a href="{{ route('Welcome.All.Products') }}">All Food Items</a></li>
                                <li><a href="{{ route('Welcome.Find.Table') }}">Book a Table</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title mb-22">
                            <h4>Get in touch</h4>
                        </div>
                        <div class="footer-contact">
                            <ul>
                                <li>Address: {{ env('APP_ADDRESS') }}.</li>
                                <li>Telephone Enquiry: {{ env('APP_NUM') }} </li>
                                <li>Email: {{ env('APP_EMAIL') }}</li>
                            </ul>
                        </div>
                        <div class="mt-35 footer-title mb-22">
                            <h4>Get in touch</h4>
                        </div>
                        <div class="footer-time">
                            <ul>
                                <li>Open: {{ env('APP_TIMING') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area border-top-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-7">
                    <div class="copyright">
                        <p>&copy; 2022 <strong> {{ env('APP_NAME') }} </strong> Made with <i
                                class="fa fa-heart text-danger"></i> </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-5">
                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                            <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="{{ $food->slug }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="{{ asset('images/' . $food->image) }}" alt="">
                            </div>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="modal-pro-content">
                            <h3>{{ $food->title }}</h3>
                            <div class="product-price-wrapper">
                                <span>${{ $food->price }}</span>
                                {{-- <span class="product-price-old">$162.00 </span> --}}
                            </div>
                            <p>{{ $food->des }}</p>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Extera Topin:</label>
                                    <select name="extera[]" id="choices-multiple-remove-button" class="form-control" placeholder="Optional" multiple>
                                    <option value="Cheese">Cheese</option>
                                    <option value="Lettuce">Lettuce</option>
                                    <option value="Tomato">Tomato</option>
                                    <option value="Onion">Onion</option>
                                    <option value="Cilantro">Cilantro</option>
                                    <option value="Jalapeno">Jalapeno</option>
                                    <option value="Pickles">Pickles</option>
                                    <option value="Black Olives">Black Olives</option>
                                    <option value="Green Olives">Green Olives</option>
                                    <option value="Guancamole">Guancamole</option>
                                    <option value="Sour Cream">Sour Cream</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product-quantity">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qty" min="1"
                                        value="1">
                                </div>
                            </div>
                            <form action="{{ route('User.Add.To.Cart', ['id' => $food->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger pb-2">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

<!-- all js here -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{-- extera --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            maxItemCount: 10,
            searchResultLimit: 10,
            renderChoiceLimit: 10,
        });

    });
</script>
</body>

</html>
