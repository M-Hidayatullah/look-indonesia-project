@extends('layouts.frontend')

@section('content')
    <section>
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <!--========== ISLANDS 1 ==========-->
                <section class="islands swiper-slide">
                    <img src="{{ asset('frontend/assets/img/contact-hero.jpg') }}" alt="hero-contact" class="islands__bg" />
                    <div class="bg__overlay">
                        <div class="islands__container container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Need Travel</h2>
                                <h1 class="islands__title">Contact Us</h1>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!--==================== CONTACT ====================-->

    <!-- Contact section content -->
    <section class="contact section" id="contact">
        <div class="contact__container container grid">
            <!-- Contact information -->
            <div class="contact__content">
                <div class="contact__data">
                    <span class="section__subtitle">Need Help</span>
                    <h2 class="section__title">Don't hesitate to contact us</h2>
                    <p class="contact__description">
                        Is there a problem finding places for your next trip? Need a guide for
                        your first trip or need consultation about traveling? Just contact us.
                    </p>
                </div>

                <!-- Contact cards -->
                <div class="contact__card">
                    <!-- Contact methods -->
                    <div class="contact__card-box">
                        <div class="contact__card-info">
                            <i class="bx bxs-phone-call"></i>
                            <div>
                                <h3 class="contact__card-title">Call</h3>
                                <p class="contact__card-description">+62 811-2272-720</p>
                            </div>
                        </div>
                        <a href="tel:+628112272720">
                            <button class="button contact__card-button">Call Now</button>
                        </a>
                    </div>

                    <!-- Whatsapp -->
                    <div class="contact__card-box">
                        <div class="contact__card-info">
                            <i class="bx bxs-message-rounded-dots"></i>
                            <div>
                                <h3 class="contact__card-title">Whatsapp</h3>
                                <p class="contact__card-description">+62 811-2272-720</p>
                            </div>
                        </div>
                        <a href="https://wa.me/628112272720?text=I%20want%20to%20book%20a%20trip" target="_blank">
                            <button class="button contact__card-button">Chat Now</button>
                        </a>
                    </div>

                    <!-- Message -->
                    <div class="contact__card-box">
                        <div class="contact__card-info">
                            <i class="bx bxs-phone-call"></i>
                            <div>
                                <h3 class="contact__card-title">Message</h3>
                                <p class="contact__card-description">+62 811-2272-720</p>
                            </div>
                        </div>
                        <a href="https://wa.me/628112272720?text=I%20want%20to%20book%20a%20trip" target="_blank">
                            <button class="button contact__card-button">Message Now</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Peta -->
            <div class="contact__images">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.1204037151547!2d119.88244317533224!3d-8.487672491553644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db465b55c740295%3A0x2ce6ef55e75dbd07!2sLook%20Indonesia%20Adventure!5e0!3m2!1sid!2sid!4v1712332592728!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
