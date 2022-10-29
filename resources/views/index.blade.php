<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Welcome To EATS.LK') }}
            </h2>
      </x-slot>

      @section('content')

            @include('layouts.home',['restaurants' => $restaurants])

      @endsection

</x-app-layout>
