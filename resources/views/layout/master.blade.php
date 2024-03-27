<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header_footer.css') }}">
    @stack('styles') <!-- Stack for additional CSS files -->
</head>
<style>
    .full {
    height: 100vh;
    display: flex;
    justify-content: center;
    /* align-items: center; */
    background: url('{{ asset('images/main-container-background.webp') }}');
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box; /* Optional: Ensure padding and border are included in element's total width and height */
}
</style>
<body>
    <header>
        @include('header')
    </header>

    <main>
                @yield('content')
    </main>

    <footer>
        @include('footer')
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script> <!-- Example: Link to your JavaScript file -->
    @yield('scripts')
</body>

</html>
