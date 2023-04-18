<div class="footer-area black-bg-2 pt-70">
    <div class="footer-top-area pb-18">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-about mb-40">
                        <div class="footer-logo">
                            <a href="{{ route('Welcome') }}">
                                <img src="{{ asset('assets/img/logo/footer-logo.png') }}" alt="footer logo" height="100px"
                                    width="100px">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
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
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="#">Order History</a></li>
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
                                <li>Address: {{env('APP_ADDRESS')}}</li>
                                <li>Telephone Enquiry: {{ env('APP_NUM') }} </li>
                                <li>Email: <a href="#">{{env('APP_EMAIL')}}</a></li>
                            </ul>
                        </div>
                        <div class="mt-35 footer-title mb-22">
                            <h4>Get in touch</h4>
                        </div>
                        <div class="footer-time">
                            <ul>
                                <li>Timing: <span>{{ env('APP_TIMING') }}</span></li>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- all js here -->
<script src="{{ asset('assets//vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets//popper.js') }}"></script>
<script src="{{ asset('assets//bootstrap.min.js') }}"></script>
<script src="{{ asset('assets//imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets//isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets//ajax-mail.js') }}"></script>
<script src="{{ asset('assets//owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets//plugins.js') }}"></script>
<script src="{{ asset('assets//main.js') }}"></script>
</body>

</html>
