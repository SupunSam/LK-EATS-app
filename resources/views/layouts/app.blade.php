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

      <div class="flex flex-col h-screen">

            <!-- Body Section -->
            <header class="h-25 bg-white shadow">
                  <!-- Navigation Section -->
                  @include('layouts.partials.navigation')

                  <!-- Page Heading -->
                  <div class="max-w-7xl  grid grid-cols-2 mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}

                        <!-- Cart -->
                        <div class="flow-root lg:ml-6">
                              <a href="#" class="group -m-2 p-2 flex flex-row-reverse items-center">
                                    <!-- Heroicon name: outline/shopping-bag -->
                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                          viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    <span class="mx-2 text-2xm font-bold text-gray-700 group-hover:text-gray-800">0</span>
                                    <span class="text-2xm font-bold text-gray-700 group-hover:text-gray-800">Cart</span>
                                    <span class="sr-only">items in cart, view bag</span>
                              </a>
                        </div>
                  </div>
            </header>

            <!-- Body Section -->
            <main class="flex-grow py-12 bg-gray-400">
                  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                              <x-alerts class="mb-4" :errors="$errors" />

                              @yield('content')

                        </div>
                  </div>
            </main>

            <!-- Footer section -->
            <footer class="h-25 p-10 footer bg-neutral text-neutral-content">
                  @include('layouts.partials.footer')
            </footer>

            {{-- Scripts --}}
            @yield('scripts')

      </div>
      @include('layouts.partials.scripts')
</body>

</html>
