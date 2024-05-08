@extends('layouts.frontend')

@section('content')
    <!--==================== Book ====================-->
    <section>
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                @foreach ($boats as $gallery)
                    <section class="islands swiper-slide">
                        <img src="{{ Storage::url($gallery->images) }}" alt="destinasi" class="islands__bg" />

                        <div class="islands__container container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle" style="text-transform: uppercase;">Boat {{ $gallery->name }} |
                                    {{ $gallery->jenis_trip }}</h2>
                                <h1 class="islands__title font-weight-bold" style="text-transform: uppercase;">
                                    {{ $gallery->boat_name }}</h1>
                            </div>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
            <div class="controls__container swiper-wrapper">
                @foreach ($boats as $gallery)
                    <img src="{{ Storage::url($gallery->images) }}" alt="destinasi" class="controls__img swiper-slide"
                        style="width: 100%;" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="faq section">
        <div class="faq__container container">
            @foreach ($travel_packages as $travel)
                <h2 class="faq__title" style="text-transform: uppercase;">Boat {{ $gallery->boat_name }} |
                    {{ $gallery->jenis_trip }} | {{ $travel->location }}</h2>

                <div class="faq__content">

                    <p class="heading2 text-dark text-xl fw-bold">PRICE</p>

                    <div class="d-flex row container justify-content-center mb-5 flex-wrap">
                        <div class="card-price d-flex flex-column align-items-center justify-content-center col-md-5">
                            <p class="fw-bold text-center mb-0">IDR {{ $travel->price }} | TYPE {{ $travel->type }}</p>
                        </div>
                    </div>

                    <div class="bodytext">
                        <p class="text-center mb-0" style="font-style: italic">
                            {{ $gallery->cabins }} | {{ $gallery->capacity }}
                        </p>
                        <p class="text-center mb-0 mt-2" style="font-weight: 700; font-size: 14px;">
                            Notes :
                            <span style="font-weight: 400">Price will be adjusted according to the number of person
                            </span>
                        </p>
                    </div>

                    <hr class="dashed-line" />
                    <br>
                    <!-- FAQ Item 1 -->
                    <div class="faq__item">
                        <input type="checkbox" id="faq1" class="faq__trigger">
                        <label for="faq1" class="faq__question">INCLUDE</label>
                        <div class="faq__answer">
                            <ul>
                                <li>Private Car Innova</li>
                                <li>1 night at Waerebo Village</li>
                                <li>Tour guide</li>
                                <li>Entrance fee</li>
                                <li>Meals and drinks</li>
                                <li>Documentation (mirrorless + drone)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq__item">
                        <input type="checkbox" id="exclude" class="faq__trigger">
                        <label for="exclude" class="faq__question">EXCLUDE</label>
                        <div class="faq__answer">
                            <ul>
                                <li class="text-left">Flight tickets</li>
                                <li class="text-left">Personal expenses</li>
                                <li class="text-left">Travel insurace</li>
                                <li class="text-left">Tipping Guide</li>
                            </ul>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq__item">
                        <input type="checkbox" id="faq2" class="faq__trigger">
                        <label for="faq2" class="faq__question">ITINERARY 4 DAYS 3 NIGHTS</label>
                        <div class="faq__answer">
                            <div class="fw-bold me-5" style="font-weight: bold;">Day 1</div>
                            <ul>
                                <li class="text-left">
                                    1.Meeting point at Tambolaka Airport, Waikabubak (12.00)
                                </li>
                                <li class="text-left">2.Ratenggaro Village</li>
                                <li class="text-left">3.Ratenggaro Beach</li>
                                <li class="text-left">4.Tanjung Mareha</li>
                                <li class="text-left">5.Stay at West Sumba</li>
                            </ul>
                            <div class="fw-bold me-5" style="font-weight: bold;">Day 2</div>
                            <ul>
                                <li class="text-left">1.Weekuri Lagoon</li>
                                <li class="text-left">2.Mandorak Beach</li>
                                <li class="text-left">3.Praijing Village</li>
                                <li class="text-left">4.Wairinding Hill</li>
                                <li class="text-left">5.Stay at East Sumba</li>
                            </ul>
                            <div class="fw-bold me-5" style="font-weight: bold;">Day 3</div>
                            <ul>
                                <li class="text-left">1.Tana Rara Hill</li>
                                <li class="text-left">2.Waimarang Waterfall</li>
                                <li class="text-left">3.Walakiri Beach</li>
                                <li class="text-left">4.Stay at East Sumba</li>
                            </ul>
                            <div class="fw-bold me-5" style="font-weight: bold;">Day 4</div>
                            <ul>
                                <li class="text-left">1.Purukambera Savanna</li>
                                <li class="text-left">
                                    2.Traditional Woven of Sumba Village
                                </li>
                                <li class="text-left">
                                    3.Finish at Mau Hau Airport, Waingapu (10.30)
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq__item">
                        <input type="checkbox" id="faq3" class="faq__trigger">
                        <label for="faq3" class="faq__question">TIPS FOR YOUR TRIP</label>
                        <div class="faq__answer">
                            <p class="text-center d-flex ms-4">
                                Every participant should bring these personal equipment
                                such as:
                            </p>
                            <ul class="ms-3">
                                <li class="text-left">•Sandals/shoes for trekking</li>
                                <li class="text-left">•Jackets/warm clothes</li>
                                <li class="text-left">•Backpack</li>
                                <li class="text-left">•Emergency cash</li>
                                <li class="text-left">•Personal medicines</li>
                                <li class="text-left">•Sunblock</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Add more FAQ items here -->

                    <div class="faq__item">
                        <input type="checkbox" id="faq4" class="faq__trigger">
                        <label for="faq4" class="faq__question">MEETING POINT</label>
                        <div class="faq__answer">
                            <div class="fw-bold ms-5">2D1N</div>
                            <div>
                                <ul>
                                    <li class="text-left">
                                        Start: Labuan Bajo (03.00-04.00)
                                    </li>
                                    <li class="text-left">Finish: Labuan Bajo (20.00)</li>
                                </ul>
                            </div>
                            <div class="fw-bold ms-5">3D2N</div>
                            <div>
                                <ul>
                                    <li class="text-left" style="text-decoration: none !important">
                                        Start: Labuan Bajo (flexible time)
                                    </li>
                                    <li class="text-left">Finish: Labuan Bajo (20.00)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="faq__item">
                        <input type="checkbox" id="price" class="faq__trigger">
                        <label for="price" class="faq__question">HOW TO GET THERE</label>
                        <div class="faq__answer">
                            <div>
                                <p class="text-center d-flex ms-4">
                                    There are 5 daily flights connecting Labuan Bajo to
                                    Denpasar / Jakarta / Surabaya
                                </p>
                                <ul class="ms-3">
                                    <li class="text-left">Garuda Indonesia</li>
                                    <li class="text-left">CitiLink</li>
                                    <li class="text-left">Wings Air</li>
                                    <li class="text-left">Batik Air</li>
                                    <li class="text-left">Air Asia</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="faq__item">
                        <input type="checkbox" id="cabins" class="faq__trigger">
                        <label for="cabins" class="faq__question">TERMS AND CONDITIONS</label>
                        <div class="faq__answer">
                            <ul class="ms-3">
                                <li class="text-left">
                                    Look Indonesia Adventure package can be change anytime based
                                    on provider facilities.
                                </li>
                                <li class="text-left">
                                    We just keep your seat until the downpayment paid
                                </li>
                                <li class="text-left">
                                    We only accept payment by TransferWise for overseas
                                    money transfer
                                </li>
                                <li class="text-left">
                                    The balance must be settled 2 weeks before trip
                                </li>
                                <li class="text-left">
                                    If the participant late from specific time for any
                                    reason, we can’t give back your money
                                </li>
                                <li class="text-left">
                                    If in an emergency/forced/not resolved due to natural
                                    conditions, <br />the itinerary can be changed withour
                                    prior notice, this is for your safety.<br />
                                    In this case there is no refund
                                </li>
                                <li class="text-left">
                                    Every participant responsibles to their own stuff
                                </li>
                                <li class="text-left">
                                    If you take this trip you are supposed to understand
                                    and agree<br />
                                    about these terms and conditions
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq__item">
                        <input type="checkbox" id="registration" class="faq__trigger">
                        <label for="registration" class="faq__question">REGISTRATION</label>
                        <div class="faq__answer">
                            <div>
                                <p class="text-left d-flex ms-3">
                                    For registration every participant is required to
                                    transfer downpayment 50% of total amount to our Bank
                                    Account.
                                </p>
                                <ul class="ms-3">
                                    <li class="text-left">Sandals/shoes for trekking</li>
                                    <li class="text-left">Jackets/warm clothes</li>
                                    <li class="text-left">Backpack</li>
                                    <li class="text-left">Emergency cash</li>
                                    <li class="text-left">Personal medicines</li>
                                    <li class="text-left">Sunblock</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


                <a href="https://wa.me/628112272720?text=I%20want%20to%20book%20a%20trip" target="_blank"
                    style="background-color:#04ff00; color: rgb(0, 0, 0); text-transform: uppercase;">
                    <div class="card"
                        style="background-color: #04ff00; border: 1px solid #ccc; border-radius: 10px; text-align: center; padding: 2rem; font-weight:bold;">
                        Book Now
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    <!--==================== FAQS ====================-->
@endsection

<style>
    /* FAQ Section Styles */
    .faq__container {
        padding: 20px;
        text-align: center;
        /* Center the text */
    }

    .faq__title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .faq__item {
        margin-bottom: 20px;
    }

    .faq__trigger {
        display: none;
    }

    .faq__question {
        font-weight: bold;
        cursor: pointer;
        display: block;
        padding: 10px;
        background-color: #e7e7e7;
        border-radius: 5px;
        margin-bottom: 10px;
        color: #000000
    }



    .faq__answer {
        display: none;
        padding: 10px;
        background-color: #e7e7e7;
        border-radius: 5px;
        color: #000000
    }

    .faq__trigger:checked+.faq__question+.faq__answer {
        display: block;
    }


    .package-type__container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .package-type__card {
        text-align: center;
        padding: 2rem;
        border: 1px solid #ccc;
        border-radius: 10px;
        flex: 1;
        max-width: 300px;
    }

    .package-type__title {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .package-type__description {
        margin-bottom: 1rem;
    }

    @media screen and (max-width: 768px) {
        .package-type__container {
            flex-direction: column;
            align-items: center;
        }

        .package-type__card {
            max-width: 100%;
            max-height: 0%;
            display: flex;
        }
    }
</style>
