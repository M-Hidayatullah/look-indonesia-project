<!DOCTYPE html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}"">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="travel, look indonesia, traveling, look indonesia adventure, trip, LOOK INDONESIA ADVENTURE">
        <meta property="og:image" content="https://lookindonesia.com/frontend/assets/img/logo.png">
        <meta name="robots" content="index, follow">
        <meta name="author" content="LOOK INDONESIA ADVENTURE">
        <meta property="og:title" content="LOOK INDONESIA ADVENTURE">
        <meta property="og:description"
            content="Look Indonesia Adventure - We are well experienced tour operators based in Labuan Bajo, Flores, NTT. Our Trip is family friendly, adventurous, and trip of a lifetime.
            Look Indonesia Adventure - established since 2015 in Bandung, West Java, Indonesia. Based on our passion for traveling, our aim is not to introduce the beautiful places in our country, but also to promote tourism for indonesia.
            Therefore, we offered you our best to provide good service and hospitality to be your travel partner. because we committed to giving our personal touch in each and every trip for your holiday.">

         <!-- Open Graph / Facebook -->
         <meta property="og:type" content="website">
         <meta property="og:url" content="https://lookindonesia.com">
         <meta property="og:title" content=" We are well experienced tour operators based in Labuan Bajo, Flores, NTT. Our Trip is family friendly, adventurous, and trip of a lifetime.">
         <meta property="og:description" content="We are well experienced tour operators based in Labuan Bajo, Flores, NTT. Our Trip is family friendly, adventurous, and trip of a lifetime.
         Look Indonesia Adventure - established since 2015 in Bandung, West Java, Indonesia. Based on our passion for traveling, our aim is not to introduce the beautiful places in our country, but also to promote tourism for indonesia.
         Therefore, we offered you our best to provide good service and hospitality to be your travel partner. because we committed to giving our personal touch in each and every trip for your holiday.">
         <meta property="og:image" content="https://lookindonesia.com/frontend/assets/img/logo.png">

         <!-- Twitter -->
         <meta property="twitter:card" content="summary_large_image">
         <meta property="twitter:url" content="https://lookindonesia.com">
         <meta property="twitter:title" content="We are well experienced tour operators based in Labuan Bajo, Flores, NTT. Our Trip is family friendly, adventurous, and trip of a lifetime.">
         <meta property="twitter:description" content="We are well experienced tour operators based in Labuan Bajo, Flores, NTT. Our Trip is family friendly, adventurous, and trip of a lifetime.
         Look Indonesia Adventure - established since 2015 in Bandung, West Java, Indonesia. Based on our passion for traveling, our aim is not to introduce the beautiful places in our country, but also to promote tourism for indonesia.
         Therefore, we offered you our best to provide good service and hospitality to be your travel partner. because we committed to giving our personal touch in each and every trip for your holiday.">
         <meta property="twitter:image" content="https://lookindonesia.com/frontend/assets/img/logo.png">

         <meta name="robots" content="index, follow">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield('title')</title>

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>Look Indonesia Adventure</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            @include( 'layouts.navbar' )
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        @include('layouts.footer')

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>
