<!--Main Footer-->
<footer class="main-footer">
    <div class="image-layer" style="background-image: url({{ asset('assets/images/background/image-4.jpg') }});"></div>
    <div class="upper-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Footer Col-->
                <div class="footer-col info-col col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="logo"><a href="{{ route('Welcome') }}"
                                    title="Delici - Restaurants HTML Template"><img
                                        src="{{ asset('assets/images/logo.png') }}" alt=""
                                        title="Delici - Restaurants HTML Template"></a></div>
                            <div class="info">
                                <ul>
                                    <li>Restaurant St, Delicious City, London 9578, UK</li>
                                    <li><a href="mailto:booking@domainname.com">booking@domainname.com</a></li>
                                    <li><a href="tel:+88-123-123456">Booking Request : +88-123-123456</a></li>
                                    <li>Open : 09:00 am - 01:00 pm</li>
                                </ul>
                            </div>
                            <div class="separator"><span></span><span></span><span></span></div>
                            <div class="newsletter">
                                <h3>Get News & Offers</h3>
                                <div class="text">Subscribe us & Get <span>25% Off.</span></div>
                                <div class="newsletter-form">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <span class="alt-icon far fa-envelope"></span>
                                            <input type="email" name="email" value="" placeholder="Your email"
                                                required>
                                            <button type="submit" class="theme-btn btn-style-one clearfix">
                                                <span class="btn-wrap">
                                                    <span class="text-one">subscribe</span>
                                                    <span class="text-two">subscribe</span>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer Col-->
                <div class="footer-col links-col col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="links">
                            <li><a href="{{ route('Welcome') }}">Home</a></li>
                            <li><a href="{{ route('Welcome.All.Categories') }}">Menus</a></li>
                            <li><a href="{{ route('Welcome.About-Us') }}">About us</a></li>
                            <li><a href="{{ route('Welcome.Contact-Us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!--Footer Col-->
                <div class="footer-col links-col last col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <ul class="links">
                            <li><a href="#">facebook</a></li>
                            <li><a href="#">instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">Google map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">&copy; 2022 Restaurt. All Rights Reserved | Crafted by {{ env('APP_NAME') }}</div>
        </div>
    </div>
</footer>

{{-- model --}}

<div class="modal fade" id="{{ $food->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:black;">{{ $food->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="img">
                        <img src="{{ asset('images/' . $food->image) }}" alt="image">
                    </div>
                    <div class="p-3">
                        <form action="{{ route('User.Add.To.Cart', ['id' => $food->id]) }}" method="POST">
                            @csrf
                            <div class="form-group w-100">
                                <select class="select form-control" multiple data-mdb-placeholder="Example placeholder" multiple>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                </select>
                                {{-- <select name="extera[]" class="select" multiple style="width:100%;">
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
                                </select> --}}
                            </div>
                            <div class="d-flex justify-content-center align-items-center mt-3">
                                <div class="">
                                    <input type="number" class="mt-3 mr-2" name="qty" min='1' value="1"
                                        style="width:55px;height:35px;padding:6px;border:1px solid black;">
                                </div>
                                <div class="">
                                    <button class="btn btn-danger mt-3">AddToCart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up"></span></div>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/swiper.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-script.js') }}"></script>
{{-- mulite select option --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
<script>
    $(".livesearch").chosen();
</script>

</body>

</html>
