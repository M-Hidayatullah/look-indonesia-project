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

</style>

<!--==================== HOME ====================-->
 <section>
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
          @foreach($travel_package->galleries as $gallery)
            <section class="islands swiper-slide">
              <img src="{{ Storage::url($gallery->images) }}" alt="destinasi" class="islands__bg"/>
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
           @foreach($travel_package->galleries as $gallery)
            <img
              src="{{ Storage::url($gallery->images) }}"
              alt="destinasi"
              class="controls__img swiper-slide"
            />
           @endforeach
          </div>
        </div>
      </section>

      <section class="section" id="package-type">
        <div class="container">
            <div class="package-type__container">
                <div class="package-type__card">
                    <h3 class="package-type__title">OPEN TRIP</h3>
                    <a href="#" class="button button--open-trip">Explore</a>
                </div>
                <div class="package-type__card">
                    <h3 class="package-type__title">PRIVATE TRIP</h3>
                    <a href="#" class="button button--private-trip">Explore</a>
                </div>
            </div>
        </div>
      </section>

      <section class="blog section" id="blog">
        <div class="blog__container container">
          <div class="content__container">
            <div class="blog__detail">
            {!! $travel_package->description !!}
            </div>
            <div class="package-travel">
              <h3>Booking Now</h3>
              <div class="card">
                <form action="{{ route('booking.store') }}" method="post">
                  @csrf
                  <input type="hidden" name="travel_package_id" value="{{ $travel_package->id }}">
                  <input type="text" name="name" placeholder="Your Name" required />
                  <input type="email" name="email" placeholder="Your Email" required />
                  <input type="number" name="number_phone" placeholder="Your Number" required />
                  <input
                    placeholder="Pick Your Date"
                    class="textbox-n"
                    type="text"
                    name="date"
                    onfocus="(this.type='date')"
                    id="date"
                  />
                  <button type="submit" class="button button-booking">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section" id="popular">
        <div class="container">
          <span class="section__subtitle" style="text-align: center"
            >Favorit Destinations</span
          >
          <h2 class="section__title" style="text-align: center">
            The Best Tour For You
          </h2>

          <div class="popular__all">
            @foreach($travel_packages as $travel_package)
            {{--  <article class="popular__card">
              <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                <img
                  src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                  alt=""
                  class="popular__img"
                />
                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>{{ number_format($travel_package->price,2) }}</h2>
                  <h3 class="popular__title">{{ $travel_package->location }}</h3>
                  <p class="popular__description">{{ $travel_package->type }}</p>
                </div>
              </a>
            </article>  --}}
            <article class="popular__card swiper-slide" style="width: 20rem; height: auto; position: relative;">
                <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                    <img
                        src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                        alt=""
                        class="popular__img img-fluid"
                        style="width: 400px; height: 400px;"
                    />

                    <div class="popular__data" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        {{--  <h2 class="popular__price">
                            <span>$</span>{{ number_format($travel_package->price,2) }}
                        </h2>  --}}
                        <h3 class="popular__title" style="text-align: center; color: white; text-transform: uppercase;" >
                            {{ $travel_package->location}}
                        </h3>
                        {{--  <p class="popular__description">{{ $travel_package->type }}</p>  --}}
                    </div>

                </a>
            </article>
            @endforeach
          </div>
        </div>
      </section>

    @if(session()->has('message'))
      <div id="alert" class="alert">
        {{ session()->get('message') }}
        <i class='bx bx-x alert-close' id="close"></i>
      </div>
    @endif
@endsection

@push('style-alt')
<style>
  .alert {
    position:absolute;
    top: 120px;
    left:0;
    right:0;
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
      if(close) {
        close.addEventListener('click', function() {
          alert.style.display = 'none';
        })
      }
</script>
@endpush
