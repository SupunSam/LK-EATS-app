<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="flex flex-col min-h-screen">

      <!-- Header section -->
      @include('layouts.partials.header')

      <!-- Body Section -->
      <main class="lg:bg-base-300 flex-grow pt-4" id="Content">
            <!-- Main Body Grid -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 lg:p-6 sm:gap-6">
                  <x-alerts class="mb-4" :errors="$errors" />
                  @yield('content')

            </div>
      </main>


      <!-- Footer section -->
      @include('layouts.partials.footer')

</body>

</html>
