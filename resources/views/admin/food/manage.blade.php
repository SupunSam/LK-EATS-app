<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Food Management') }}
            </h2>
      </x-slot>

      @section('content')

            <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">Go Back</a>
            <a href="{{ route('fooditems.create') }}" class="btn btn-success" role="button">Create New FoodItem</a>

            <div class="overflow-x-auto my-6">

                  <table class="min-w-full leading-normal rounded-lg">
                        <thead>
                              <tr class="rounded-lg">
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                          #&nbsp;&nbsp;Logo
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Category
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Price
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-400 bg-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions
                                    </th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach ($fooditems as $fooditem)
                                    <tr>
                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                      <div>
                                                            <p class="text-gray-900 whitespace-no-wrap font-semibold">
                                                                  {{ $fooditem->id }}
                                                            </p>
                                                      </div>
                                                      <div class="flex-shrink-0 w-10 h-10 ml-3">
                                                            <img class="w-10 h-10 rounded-full" src="{{ asset($fooditem->food_image) }}" alt="" />
                                                      </div>
                                                </div>
                                          </td>

                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">{{ $fooditem->food_name }}</p>
                                          </td>

                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                      {{ $fooditem->food_category }}
                                                </p>
                                          </td>

                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                      {{ $fooditem->food_price }}
                                                </p>
                                          </td>

                                          <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                      <a class="btn btn-sm btn-info" href="{{ route('fooditems.show', $fooditem->id) }}">Show</a>
                                                      <a class="btn btn-sm btn-primary" href="{{ route('fooditems.edit', $fooditem->id) }}">Edit</a>
                                                      <button type="button" class="btn btn-sm btn-danger"
                                                            onclick="event.preventDefault();document.getElementById('delete-user-form-{{ $fooditem->id }}').submit()">
                                                            Delete
                                                      </button>
                                                      {{-- Delete Form --}}
                                                <form id="delete-user-form-{{ $fooditem->id }}" action="{{ route('fooditems.destroy', $fooditem->id) }}" method="post">
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

            {!! $fooditems->links() !!}

      @endsection

</x-app-layout>
