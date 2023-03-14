<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok-1 || ProfilePage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    @include('content')
</head>

<body>
    {{-- HEADER --}}
    <section class="hero">
        @include('header')
    </section>

    {{-- CONTENT PROFILE --}}
    <section class="block py-6 custom-font" style="font-size: large; margin-top: 50px;">
        <!-- PROFILE 1 - Bernadetha Emma -->
        @yield('bernadetha')

        <!-- PROFILE 2 - Diana Petrina -->
        @yield('diana')

        <!-- PROFILE 3 - Felicia Ferren -->
        @yield('felicia')

        <!-- PROFILE 4 - Kania Agatha -->
        @yield('kania')
    </section>

    {{-- FOOTER --}}
    <footer class="hero-foot has-background-black-bis pt-4 pb-2">
        @include('footer')
    </footer>
</body>
</html>
