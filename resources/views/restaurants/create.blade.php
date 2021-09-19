<x-app-layout>

      @section('content')

            <div class="col-span-3 p-4 rounded-box bg-white">
                  <div class="md:grid md:grid-cols-5 md:gap-6">
                        <div class="md:col-span-1">
                              <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Add New Restaurant</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                          This information will be displayed publicly so be careful what you share.
                                    </p>
                              </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-3">

                              <div class="shadow sm:rounded-md sm:overflow-hidden px-4 py-5 sm:p-6 bg-white">

                                    <form action="{{ route('restaurant.store') }}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          {{-- Import Restaurant Form --}}
                                          @include('restaurants.partials.restform')

                                    </form>

                              </div>

                        </div>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                  </div>
            </div>

      @endsection

</x-app-layout>
