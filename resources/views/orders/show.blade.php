<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('My Orders') }}
            </h2>
      </x-slot>

      @section('content')

            <a class="btn btn-primary" href="{{ route('orders') }}">Go Back</a>

            <div class="overflow-x-auto my-6">

                  <table class="min-w-full leading-normal rounded-lg">
                        <thead>
                              <tr class="rounded-lg">
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          OrderItem&nbsp;&nbsp;#
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          Order #
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Food Name
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Quantiy
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Sub Total
                                    </th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach ($orderitems as $orderitem)
                                    <tr>
                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                      <div>
                                                            <p class="text-gray-900 whitespace-no-wrap font-semibold">
                                                                  {{ $orderitem->id }}
                                                            </p>
                                                      </div>
                                                </div>
                                          </td>
                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">{{ $orderitem->order_id }}</p>
                                          </td>
                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">{{ $orderitem->food_name }}</p>
                                          </td>

                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                      {{ $orderitem->food_qty }}
                                                </p>
                                          </td>

                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                      {{ $orderitem->amount }}
                                                </p>
                                          </td>

                                    </tr>
                              @endforeach

                        </tbody>

                  </table>

            </div>

            {!! $orderitems->links() !!}

      @endsection

</x-app-layout>
