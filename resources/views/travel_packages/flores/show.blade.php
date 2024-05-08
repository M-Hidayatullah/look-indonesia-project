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
        }
    </style>
    <!--==================== HOME ====================-->
    <section>
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                @foreach ($travel_package->galleries as $gallery)
                    <section class="islands swiper-slide">
                        <img src="{{ Storage::url($gallery->images) }}" alt="destinasi" class="islands__bg" />

                        <div class="islands__container container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Explore</h2>
                                <h1 class="islands__title font-weight-bold">{{ $gallery->name }}</h1>
                            </div>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>

        <!--========== CONTROLS ==========-->
        <div class="controls gallery-thumbs">
            <div class="controls__container swiper-wrapper">
                @foreach ($travel_package->galleries as $gallery)
                    <img src="{{ Storage::url($gallery->images) }}" alt="destinasi" class="controls__img swiper-slide" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section" id="package-type">
        <div class="container" style="display: flex; justify-content: center;">
            <div class="package-type__card" style="width: 20rem; margin: 0 10px; display: flex; flex-direction: column;">
                <h3 class="package-type__title">PRIVATE TRIP</h3>
                <p>Private trip with your own group. You can choose the boat type and flexible date of trip.</p>
                <a href="{{ route('show.boat.private-trip.flores', $travel_package->slug) }}" class="button button--private-trip"
                    style="display: block; margin-top: auto;">Explore</a>
            </div>
            <div class="package-type__card" style="width: 20rem; margin: 0 10px; display: flex; flex-direction: column;">
                <h3 class="package-type__title">OPEN TRIP</h3>
                <p>Sharing trip with other group of people. There’s no minimum person. You can choose the cabin type.
                    Sailing trip is based on published schedule (3 days 2 nights).</p>
                <a href="{{ route('show.boat.open-trip.flores', $travel_package->slug) }}" class="button button--open-trip"
                    style="display: block; margin-top: auto;">Explore</a>
            </div>
        </div>
    </section>
@endsection
