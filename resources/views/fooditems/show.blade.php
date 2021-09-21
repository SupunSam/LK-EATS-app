<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Roles and Permissions') }}
            </h2>
      </x-slot>
      @section('content')

            <a class="btn btn-primary" href="{{ route('admin.food.manage') }}">Go Back</a>

            <div class="flex items-center w-full px-4 py-10 bg-cover card bg-base-200" style="background-image: url(&quot;https://picsum.photos/id/429/1000/300&quot;);">
                  <div class="card glass lg:card-side text-neutral-content">
                        <figure class="p-6">
                              <img src="{{ asset($fooditem->food_image) }}" class="rounded-lg shadow-lg">
                        </figure>
                        <div class="max-w-md card-body">
                              <h2 class="card-title">{{ $fooditem->food_name }}</h2>
                              <p class="text-xl font-semibold">{{ $fooditem->food_cat }}</p>
                              <p class="text-xl font-semibold">{{ $fooditem->food_price }}</p>
                              <p class="text-xl font-semibold">{{ $fooditem->food_desc }}</p>
                              <div class="card-actions">
                                    <button class="btn glass rounded-full">Add to Cart</button>
                              </div>
                        </div>
                  </div>
            </div>

      @endsection

</x-app-layout>
