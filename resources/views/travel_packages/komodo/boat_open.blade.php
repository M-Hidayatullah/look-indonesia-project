@extends('layouts.frontend')

@section('content')
    <style>
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
                max-height: 0%
            }
        }


        /* Design */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }


        .main {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            font-size: 24px;
            font-weight: 400;
            text-align: center;
        }

        img {
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        .btn {
            padding: 0.8rem;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 400;
            display: block;
            width: 100%;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: transparent;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.12);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            background-color: white;
            box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            padding: 1rem;
            background: linear-gradient(to bottom left, #E4BF44 40%, #8B6F00 100%);
        }

        .card_title {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }
    </style>
    <!--==================== HOME ====================-->
    <section>

        {{--  <section class="section" id="package-type">
            <div class="main">
                <h1 class="section__title">Boat Open Trip</h1>
                <ul class="cards">
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="{{ asset('frontend/assets/img/logo.png') }}"></div>
                            <div class="card_content">
                                <h2 class="card_title" style="text-align: center;">ONE DAY TRIP</h2>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="{{ asset('frontend/assets/img/logo.png') }}"></div>
                            <div class="card_content">
                                <h2 class="card_title" style="text-align: center;">SUPERIOR</h2>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="{{ asset('frontend/assets/img/logo.png') }}"></div>
                            <div class="card_content">
                                <h2 class="card_title" style="text-align: center;">DELUXE</h2>
                            </div>
                        </div>
                    </li>
                    <li class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="{{ asset('frontend/assets/img/logo.png') }}"></div>
                            <div class="card_content">
                                <h2 class="card_title" style="text-align: center;">LUXURY</h2>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </section>  --}}

        <section class="section" id="package-type">
          <div class="main">
              <h1 class="section__title" style="text-transform: uppercase">Open Trip - Boat Charter</h1>
              <ul class="cards" style="display: flex; justify-content: center;">
                  <li class="cards_item" style="width: 20rem; height: auto; position: relative; margin-right: 1rem;">
                      <div class="card">
                          <div class="card_image"><img src="{{ asset('frontend/assets/img/hero3.jpg') }}" style="width: 400px; height: 400px;"></div>
                          <div class="card_content">
                              <a href="#onedaytrip" class="card_title"
                                  style="text-align: center; display: block; margin-top: auto">ONE DAY TRIP</a>
                          </div>
                      </div>
                  </li>
                  <li class="cards_item" style="width: 20rem; height: auto; position: relative; margin-right: 1rem;">
                      <div class="card">
                          <div class="card_image"><img src="{{ asset('frontend/assets/img/sail.jpg') }}" style="width: 400px; height: 400px;"></div>
                          <div class="card_content">
                              <a href="#superior" class="card_title"
                                  style="text-align: center; display: block; margin-top: auto">SUPERIOR</a>
                          </div>
                      </div>
                  </li>
                  <li class="cards_item" style="width: 20rem; height: auto; position: relative;">
                      <div class="card">
                          <div class="card_image"><img src="{{ asset('frontend/assets/img/explore.jpg') }}" style="width: 400px; height: 400px;"></div>
                          <div class="card_content">
                              <a href="#deluxe" class="card_title"
                                  style="text-align: center; display: block; margin-top: auto">DELUXE</a>
                          </div>
                      </div>
                  </li>
                  <li class="cards_item" style="width: 20rem; height: auto; position: relative;">
                    <div class="card">
                        <div class="card_image"><img src="{{ asset('frontend/assets/img/explore.jpg') }}" style="width: 400px; height: 400px;"></div>
                        <div class="card_content">
                            <a href="#luxury" class="card_title"
                                style="text-align: center; display: block; margin-top: auto">LUXURY</a>
                        </div>
                    </div>
                </li>
              </ul>
          </div>
      </section>

    @endsection


