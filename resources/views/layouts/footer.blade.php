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
                            <div class="logo"><a href="index.html" title="Delici - Restaurants HTML Template"><img
                                        src="images/logo.png" alt=""
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
                                    <form method="post"
                                        action="#">
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
                            <li><a href="menu-list-1.html">Menus</a></li>
                            <li><a href="{{ route('Welcome.About-Us') }}">About us</a></li>
                            <li><a href="our-chef.html">Our chefs</a></li>
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
            <div class="copyright">&copy; 2022 Restaurt. All Rights Reserved | Crafted by</div>
        </div>
    </div>
</footer>

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
</body>

</html>
