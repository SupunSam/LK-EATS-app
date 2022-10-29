<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  My Restaurant
            </h2>
      </x-slot>

      @section('content')

            @hasrole('Owner')
            <a href="{{ route('restaurant.create') }}" class="btn btn-success" role="button">Create New Restaurant</a>
            @endhasrole

            <div class="grid grid-cols-1 xl:grid-cols-5 gap-6 sm:gap-6 my-4">

                  @foreach ($restaurants as $restaurant)

                        <div class="card shadow-sm bg-accent text-accent-content">
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
                        </div>

                  @endforeach

            </div>
            {!! $restaurants->links() !!}


            @if ($client != null)

                  {{-- Order Section --}}
                  <div class="overflow-x-auto my-6">

                        <table class="min-w-full leading-normal rounded-lg">
                              <thead>
                                    <tr class="rounded-lg">
                                          <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Order&nbsp;&nbsp;#
                                          </th>
                                          <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Client Name
                                          </th>
                                          <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Total
                                                Price
                                          </th>
                                          <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Order
                                                Placed
                                          </th>
                                          <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Status
                                          </th>
                                          <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Actions
                                          </th>
                                    </tr>
                              </thead>
                              <tbody>
                                    @foreach ($restorders as $restorder)
                                          <tr>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <div class="flex items-center">
                                                            <div>
                                                                  <p class="text-gray-900 whitespace-no-wrap font-semibold">
                                                                        {{ $restorder->id }}
                                                                  </p>
                                                            </div>
                                                      </div>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <p class="text-gray-900 whitespace-no-wrap">{{ $client->name }}</p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <p class="text-gray-900 whitespace-no-wrap">{{ $restorder->total_price }}</p>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $restorder->created_at }}
                                                      </p>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <p class="text-gray-900 whitespace-no-wrap">
                                                            <label class="badge badge-success">{{ $restorder->status }}</label>
                                                      </p>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                      <p class="text-gray-900 whitespace-no-wrap">
                                                            <a class="btn btn-sm btn-info" href="{{ route('orders.show', $restorder->id) }}">Show</a>
                                                            <button type="button" class="btn btn-sm btn-accent"
                                                                  onclick="event.preventDefault();document.getElementById('delete-order-form-{{ $restorder->id }}').submit()">
                                                                  Delete
                                                            </button>
                                                            {{-- Delete Form --}}
                                                      <form id="delete-order-form-{{ $restorder->id }}" action="{{ route('orders.destroy', $restorder->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                      </form>
                                                      </p>
                                                </td>
                                          </tr>
                                    @endforeach

                              </tbody>

                        </table>

                  </div>

                  {!! $restorders->links() !!}

            @endif

      @endsection

</x-app-layout>
