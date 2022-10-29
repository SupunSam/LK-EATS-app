<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Search Food') }}
            </h2>
      </x-slot>

      @section('content')
            @if (isset($fooditems))
                  <p>We have found {{ count($fooditems) }} fooditems for <b> {{ $searchq }} </b> are :</p>

                  <div class="grid grid-cols-1 xl:grid-cols-5 gap-6 sm:gap-6 py-6">

                        @foreach ($fooditems as $fooditem)

                              <div class="card shadow-sm bg-accent text-accent-content">
                                    <figure>
                                          <img src="{{ asset($fooditem->food_image) }}">
                                    </figure>
                                    <div class="card-body">
                                          <h2 class="card-title">{{ $fooditem->food_name }}</h2>
                                          <p class="line-clamp-3">{{ $fooditem->foodt_desc }}</p>
                                          <div class="card-actions">
                                                <a class="btn btn-secondary" href="{{ route('add.to.cart', $fooditem->id) }}">Add to Cart</a>
                                          </div>
                                    </div>
                              </div>

                        @endforeach

                  </div>
                  {!! $fooditems->links() !!}

            @endif

      @endsection

</x-app-layout>
