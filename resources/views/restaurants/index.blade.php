<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Restaurants') }}
            </h2>
      </x-slot>

      @section('content')

            @hasrole('Owner')
            <a href="{{ route('restaurant.create') }}" class="btn btn-success" role="button">Create New Restaurant</a>
            @endhasrole



            <div class="grid grid-cols-1 xl:grid-cols-5 gap-6 sm:gap-6 my-4">

                  @foreach ($restaurants as $restaurant)


                        <div class="card text-center shadow-2xl">
                              <figure class="px-10 pt-10">
                                    <img src="{{ asset($restaurant->rest_cover) }}" class="rounded-xl">
                              </figure>
                              <div class="card-body">
                                    <h2 class="card-title">{{ $restaurant->rest_name }}</h2>
                                    <p class="line-clamp-3">{{ $restaurant->rest_desc }}</p>
                                    <div class="justify-center card-actions">
                                          <a href="{{ route('restaurant.show', $restaurant->id) }}" class="btn btn-outline btn-accent">Visit Shop</a>
                                    </div>
                              </div>
                        </div>
                        {{-- <div class="card shadow-sm bg-accent text-accent-content">
                              <figure>
                                    <img src="{{ asset($restaurant->rest_cover) }}">
                              </figure>
                              <div class="card-body">
                                    <h2 class="card-title">{{ $restaurant->rest_name }}</h2>
                                    <p class="line-clamp-3">{{ $restaurant->rest_desc }}</p>
                                    <div class="card-actions">
                                          <a class="btn btn-secondary" href="{{ route('restaurant.show', $restaurant->id) }}">Visit Shop</a>
                                    </div>
                              </div>
                        </div> --}}

                  @endforeach

            </div>
            {!! $restaurants->links() !!}

      @endsection

</x-app-layout>
