@extends('layouts.frontend')

@section('content')
    <section>
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <section class="islands swiper-slide">
                    <img src="{{ Storage::url($blog->image) }}" alt="" class="islands__bg" />

                    <div class="islands__container container">
                        <div class="islands__data">
                            <h2 class="islands__subtitle">{{ $blog->title }}</h2>
                            <h1 class="islands__title">{{ date('d M Y', strtotime($blog->created_at)) }}</h1>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="blog section" id="blog">
        <div class="blog__container container">
            <div class="content__container">
                <div class="blog__detail">
                    {!! $blog->description !!}
                    <div class="blog__footer" style="margin-top: 2rem;">
                        <div class="blog__reaction">{{ date('d M Y', strtotime($blog->created_at)) }}</div>
                        <div class="blog__reaction">
                            <i class="bx bx-show"></i>
                            <span>{{ $blog->reads }}</span>
                        </div>
                    </div>
                </div>
                <div class="package-travel">
                    <h3>Favorite Places</h3>
                    <ul>
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h3 style="margin-bottom: 1rem">Popular Trip</h3>

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

                </div>
            </div>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="blog__container container">
            <span class="section__subtitle" style="text-align: center">Related Blog</span>
            <h2 class="section__title" style="text-align: center">
                Find The Best Places
            </h2>

            <div class="blog__content grid">
                @foreach ($relatedBlogs as $relatedBlog)
                    <article class="blog__card">
                        <div class="blog__image">
                            <img src="{{ Storage::url($relatedBlog->image) }}" alt="" class="blog__img" />
                            <a href="{{ route('blog.show', $relatedBlog->slug) }}" class="blog__button">
                                <i class="bx bx-right-arrow-alt"></i>
                            </a>
                        </div>

                        <div class="blog__data">
                            <h2 class="blog__title">{{ $relatedBlog->title }}</h2>
                            <p class="blog__description">
                                {{ $relatedBlog->excerpt }}
                            </p>

                            <div class="blog__footer">
                                <div class="blog__reaction">{{ date('d M Y', strtotime($relatedBlog->crated_at)) }}</div>
                                <div class="blog__reaction">
                                    <i class="bx bx-show"></i>
                                    <span>{{ $relatedBlog->reads }}</span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('style-alt')
    <style>
        blockquote {
            border-left: 8px solid #b4b4b4;
            padding-left: 1rem;
        }

        .blog__detail ul li {
            list-style: initial;
        }
    </style>
@endpush
