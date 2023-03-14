<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Kelompok-1 || Home</title>

  {{-- using bulma --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  @include('content')
</head>

<body class="antialiased">
  {{-- HEADER --}}
  <section class="hero">
    @include('header')
  </section>


  {{-- CONTENT --}}
 
  <section class="hero is-fullheight">
   <div class="hero-body p-0 img-header">
        <div class="main-hero"></div>
            <div class="container has-text-centered">

             {{now()->toTimeString()}}
            @php($dayName = now()->format('l'))

            @if ($dayName == 'Monday')
                @yield('momday')
            @elseif ($dayName == 'Tuesday')
                @yield('tuesday')
            @else
                @yield('night')
            @endif
            </div>
        </div>
    </div>
  </section>

  {{-- FOOTER --}}
  <footer class="hero-foot has-background-black-bis pt-4 pb-2">
    @include('footer')
  </footer>
</body>
</html>
