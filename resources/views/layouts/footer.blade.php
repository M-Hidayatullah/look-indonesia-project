<footer class="footer section">
    <div class="footer__container container grid">
        <div>
            <a href="{{ route('homepage') }}" class="footer__logo">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" style="width:20%;">
            </a>
            <p class="footer__description">
                Look Indonesia Adventure - Established since 2015 in Bandung,<br /> West Java, Indonesia. <br /> Based on our passion for traveling, our aim is not to introduce the beautiful places <br />in our country, but also to promote tourism for indonesia.
            </p>
        </div>

        <div class="footer__content">
            <div>
                <h3 class="footer__title">Company</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#about" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('travel_package.index') }}" class="footer__link">Destinations</a>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}" class="footer__link">Trip Activities</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">Trip</h3>

                <ul class="footer__links">
                    <li>
                        <a href="{{ route('travel_package.index') }}" class="footer__link"
                            >Open Trip
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('travel_package.index') }}" class="footer__link">Private Trip </a>
                    </li>
                    <li>
                        <a href="https://wa.me/628112272720?text=I%20want%20to%20book%20a%20trip" class="footer__link">Book Now</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">Support</h3>

                <ul class="footer__links">
                    <li>
                        <a href="{{ route('faqs') }}" class="footer__link">FAQs </a>
                    </li>
                    <li>
                        <a href="https://wa.me/628112272720?text=Hello%Look%20Travel%20Indonesia" class="footer__link"
                            >Support center
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="footer__link"> Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="footer__title">Follow us</h3>

                <ul class="footer__social">
                    <a href="https://web.facebook.com/lookindonesia.adventure" target="_blank" class="footer__social-link">
                        <i class="bx bxl-facebook-circle"></i>
                    </a>
                    <a href="https://www.instagram.com/lookindonesia.adventure" target="_blank" class="footer__social-link">
                        <i class="bx bxl-instagram-alt"></i>
                    </a>
                    <a href="https://linktr.ee/Lookindonesia.adv" target="_blank" class="footer__social-link">
                        <i class="bx bxl-pinterest"></i>
                    </a>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer__info container">
        <span class="footer__copy">
            &#169; <script>document.write(new Date().getFullYear());</script> Look Indonesia Adventure. All rigths reserved
        </span>
        <div class="footer__privacy">
            <a href="/">Terms & Agreements</a>
            <a href="/">Privacy Policy</a>
        </div>
    </div>
</footer>
