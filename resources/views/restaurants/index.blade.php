<x-app-layout>

      @section('content')

            <div class="items-end col-span-3">
                  <a href="{{ route('restaurant.create') }}" class="btn btn-success" role="button">Add Restaurant</a>
            </div>

            <img src="/rest/images/supun-samarakoon_1632026034.jpg">

            {{-- <div class="col-span-3">
                  <div class="grid grid-cols-1 xl:grid-cols-5 gap-6 lg:p-6 sm:gap-6">
                        @foreach ($restaurants as $restaurant)

                              <div class="card shadow-sm bg-accent text-accent-content">
                                    <figure>
                                          <img src="{{ $restaurant->rest_cover }}">
                                    </figure>
                                    <div class="card-body">
                                          <h2 class="card-title">{{ $restaurant->name }}</h2>
                                          <p class="line-clamp-3">{{ $restaurant->detail }}</p>
                                          <div class="card-actions">
                                                <button class="btn btn-secondary">More info</button>
                                          </div>
                                    </div>
                              </div>
                        @endforeach
                  </div> --}}
            {!! $restaurants->links() !!}
            </div>

      @endsection

</x-app-layout>
