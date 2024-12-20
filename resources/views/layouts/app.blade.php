<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.head')

    @stack('css')
</head>

<body onload="hideLoader()">
    <!-- Loader Section -->
    <div id="loader">
        <img src="assets/images/loader.svg" alt="loader" />
    </div>

    <a href="https://wa.me/{{ '62'. ((int)$profile['no_wa'] ?? 00) }}" class="btn-wa">
        <img src="assets/images/wa.png" alt="Whatsapp">
        <span>Hubungi Kami</span>
    </a>

    <div id="content">
        @include('layouts.partials.header')

        @include('layouts.partials.hero')

        @yield('content')

        @include('layouts.partials.footer')

    </div>

    @include('layouts.partials.foot')

    @stack('js')
</body>

</html>