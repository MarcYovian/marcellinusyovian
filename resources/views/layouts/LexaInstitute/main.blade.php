<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>
    {{-- Navbar Start --}}
    @include('layouts.LexaInstitute.partials.navbar')
    {{-- Navbar End --}}

    {{-- Content Start --}}
    @yield('content')
    {{-- Content End --}}

    {{-- Footer Start --}}
    @include('layouts.LexaInstitute.partials.footer')
    {{-- Footer End --}}

    {{-- Scrool Button Start --}}
    <button id="back-to-top-btn">
        <i class="fas fa-arrow-up"></i>
    </button>
    {{-- Scrool Button Start --}}

    @yield('scripts')
</body>

</html>
