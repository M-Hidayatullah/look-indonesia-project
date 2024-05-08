<nav class="nav container">
    <a href="{{ route('homepage') }}" class="nav__logo">
        <img src="{{ asset('frontend/assets/img/logo.png') }}" style="width:20%;">
    </a>
    <div class="nav__menu">
        <ul class="nav__list">
            <li class="nav__item" >
                <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                    <i class="bx bx-home-alt"></i>
                    <span>HOME</span>
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                    <i class="bx bx-building-house"></i>
                    <span>DESTINATIONS</span>
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                    <i class="bx bx-award"></i>
                    <span>BLOG</span>
                </a>
            </li>
            <li class="nav__item">
                <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                    <i class="bx bx-phone"></i>
                    <span>CONTACT</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- theme -->
    <i class="bx bx-moon change-theme" id="theme-button"></i>

    {{--  <a target="_blank" href="https://wa.me/628112272720?text=I%20want%20to%20book%20a%20trip" class="button nav__button">Booking now</a>  --}}
</nav>

