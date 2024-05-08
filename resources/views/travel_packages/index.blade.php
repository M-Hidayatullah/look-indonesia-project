@extends('layouts.frontend')

@section('content')
    <!--==================== HOME ====================-->
    <section>
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <section class="islands swiper-slide">
                    <img src="{{ asset('frontend/assets/img/bali.jpg') }}" alt="" class="islands__bg" />

                    <div class="islands__container container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle">Explore</h2>
                            <h1 class="islands__title">Destinations</h1>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!--==================== POPULAR ====================-->
    <section class="section" id="popular">
        <div class="container">
            <span class="section__subtitle" style="text-align: center">All</span>
            <h2 class="section__title" style="text-align: center">
                Destinations
            </h2>

            <div class="popular__container swiper">
                <div class="swiper-wrapper">
                    {{--  @forelse($travel_packages as $travel_package)  --}}
                        <article class="popular__card swiper-slide" style="width: 20rem; height: auto; position: relative;">
                            <a href="{{ route('travel_package.trip') }}">
                                <img src="{{ asset('frontend/assets/img/destinasi/komodo.jpg') }}" alt="img-destinations"
                                    class="popular__img img-fluid" style="width: 400px; height: 400px;" />
                                <div class="popular__data"
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <h1 class="popular__title"
                                        style="text-align: center; color: white; text-transform: uppercase;">
                                        Komodo
                                    </h1>
                                </div>
                            </a>
                        </article>

                        <article class="popular__card swiper-slide" style="width: 20rem; height: auto; position: relative;">
                            <a href="{{ route('show.trip.waerebo') }}">
                                <img src="{{ asset('frontend/assets/img/destinasi/waerebo.jpg') }}" alt="img-destinations"
                                    class="popular__img img-fluid" style="width: 400px; height: 400px;" />
                                <div class="popular__data"
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <h1 class="popular__title"
                                        style="text-align: center; color: white; text-transform: uppercase;">
                                        Waerebo
                                    </h1>
                                </div>
                            </a>
                        </article>

                        <article class="popular__card swiper-slide" style="width: 20rem; height: auto; position: relative;">
                            <a href="{{ route('show.trip.sumba') }}">
                                <img src="{{ asset('frontend/assets/img/destinasi/sumba.jpg') }}" alt="img-destinations"
                                    class="popular__img img-fluid" style="width: 400px; height: 400px;" />
                                <div class="popular__data"
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <h1 class="popular__title"
                                        style="text-align: center; color: white; text-transform: uppercase;">
                                        Sumba
                                    </h1>
                                </div>
                            </a>
                        </article>

                        <article class="popular__card swiper-slide" style="width: 20rem; height: auto; position: relative;">
                            <a href="{{ route('show.trip.flores') }}">
                                <img src="{{ asset('frontend/assets/img/destinasi/flores.jpg') }}" alt="img-destinations"
                                    class="popular__img img-fluid" style="width: 400px; height: 400px;" />
                                <div class="popular__data"
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <h1 class="popular__title"
                                        style="text-align: center; color: white; text-transform: uppercase;">
                                        Flores
                                    </h1>
                                </div>
                            </a>
                        </article>

                        <article class="popular__card swiper-slide" style="width: 20rem; height: auto; position: relative;">
                            <a href="{{ route('show.trip.raja-ampat') }}">
                                <img src="{{ asset('frontend/assets/img/destinasi/raja-ampat.jpg') }}" alt="img-destinations"
                                    class="popular__img img-fluid" style="width: 400px; height: 400px;" />
                                <div class="popular__data"
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <h1 class="popular__title"
                                        style="text-align: center; color: white; text-transform: uppercase;">
                                        Raja Ampat
                                    </h1>
                                </div>
                            </a>
                        </article>

                    {{--  @empty
                        <span class="section__subtitle" style="text-align: center">No Data Destinations Available.</span>
                    @endforelse  --}}
                </div>

                <div class="swiper-button-next">
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="bx bx-chevron-left"></i>
                </div>
            </div>
        </div>
    </section>
@endsection
