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
        <section class="section" id="package-type">
            <div class="main">
                @forelse ($boats as $boat)
                    <br>
                    <h1 class="section__title" style="text-transform: uppercase;">Private Trip - {{ $boat->name }}</h1>
                    <ul class="cards">
                        <li class="cards_item">
                            <div class="card" style="width: 20rem;">
                                <a href="{{ route('book.private_trip.raja-ampat') }}">
                                    <div class="card_image" style="width: 100%; height: 200px; overflow: hidden;">
                                        <img src="{{ Storage::url($boat->images) }}" alt="destinasi"
                                            style="object-fit: cover; width: 100%; height: 100%;" />
                                    </div>
                                    <div class="card_content">
                                        <h2 class="card_title" style="text-align: center; text-transform: uppercase;">
                                            {{ $boat->boat_name }}</h2>
                                        <p class="card_text" style="text-align: center;">{{ $boat->cabins }} |
                                            {{ $boat->capacity }}</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    @empty
                        <center>I'm Sorry No Data Available.</center>
                @endforelse
                </ul>
            </div>
        </section>

        @if (session()->has('message'))
            <div id="alert" class="alert">
                {{ session()->get('message') }}
                <i class='bx bx-x alert-close' id="close"></i>
            </div>
        @endif
    @endsection

    @push('style-alt')
        <style>
            .alert {
                position: absolute;
                top: 120px;
                left: 0;
                right: 0;
                background-color: var(--second-color);
                color: white;
                padding: 1rem;
                width: 70%;
                z-index: 99;
                margin: auto;
                border-radius: .25rem;
                text-align: center;
            }

            .alert-close {
                font-size: 1.5rem;
                color: #090909;
                position: absolute;
                top: .25rem;
                right: .5rem;
                cursor: pointer;
            }

            blockquote {
                border-left: 8px solid #b4b4b4;
                padding-left: 1rem;
            }

            .blog__detail ul li {
                list-style: initial;
            }
        </style>
    @endpush

    @push('script-alt')
        <script>
            let galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 0,
                slidesPerView: 0,
            });

            let galleryTop = new Swiper('.gallery-top', {
                effect: 'fade',
                loop: true,

                thumbs: {
                    swiper: galleryThumbs,
                },
            });

            const close = document.getElementById('close');
            const alert = document.getElementById('alert');
            if (close) {
                close.addEventListener('click', function() {
                    alert.style.display = 'none';
                })
            }
        </script>
    @endpush
