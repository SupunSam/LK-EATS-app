<x-app-layout>

      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  {{ __('Contact Us') }}
            </h2>
      </x-slot>

      @section('content')

            <div class="md:grid md:grid-cols-2 md:gap-6">

                  <div class="mt-5 md:mt-0 md:col-span-1">

                        <div class="shadow sm:rounded-md sm:overflow-hidden px-4 py-5 sm:p-6 bg-white">

                              <form action="#" method="" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                          <div class="grid grid-cols-6 gap-6">
                                                {{-- Contact Name --}}
                                                <div class="col-span-6 sm:col-span-3">
                                                      <label for="contact_name" class="block text-sm font-medium text-gray-700">Name</label>
                                                      <input type="text" name="contact_name" id="contact_name"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                {{-- Contact Email --}}
                                                <div class="col-span-6">
                                                      <label for="contact_email" class="block text-sm font-medium text-gray-700">Email</label>
                                                      <input type="text" name="contact_email" id="contact_email"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                {{-- Contact City --}}
                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                      <label for="contact_city" class="block text-sm font-medium text-gray-700">City</label>
                                                      <input type="text" name="contact_city" id="contact_city"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                {{-- Contact Mobile --}}
                                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                      <label for="contact_charge" class="block text-sm font-medium text-gray-700">Mobile</label>
                                                      <input type="text" name="contact_charge" id="contact_charge"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                          </div>
                                    </div>

                                    {{-- Contact Description --}}
                                    <div class="mt-6">
                                          <label for="contact_desc" class="block text-sm font-medium text-gray-700">
                                                About
                                          </label>
                                          <div class="mt-1">
                                                <textarea id="contact_desc" name="contact_desc" rows="3"
                                                      class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                      placeholder="Type the details"></textarea>
                                          </div>
                                          <p class="mt-2 text-sm text-gray-500">
                                                Brief description for yourself. URLs are hyperlinked.
                                          </p>

                                    </div>

                                    {{-- Form Submit --}}
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 mt-6 rounded-box">
                                          <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Submit
                                          </button>
                                    </div>

                              </form>

                        </div>

                  </div>

                  <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                        <h1 class="text-4xl sm:text-2xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                              Get in touch
                        </h1>
                        <p class="text-normal text-lg sm:text-xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                              Fill in the form to start a conversation
                        </p>

                        <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                              <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                    Chatham Street, Colombo 01,
                              </div>
                              <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                    Sri Lanka
                              </div>
                        </div>

                        <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                              </svg>
                              <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                    +94 1122334455
                              </div>
                        </div>

                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                              <div class="ml-4 text-md tracking-wide font-semibold w-40">
                                    info@eats.lk
                              </div>
                        </div>
                  </div>

            </div>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            </div>

      @endsection

</x-app-layout>
