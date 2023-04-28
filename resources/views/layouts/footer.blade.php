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
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
<script>
    $(".livesearch").chosen();
</script>
</body>

</html>
