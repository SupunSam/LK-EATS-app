<header class="bg-base-300">
      <!-- Menu Navigation Bar -->
      <div class="navbar shadow-lg bg-neutral text-neutral-content">
            <div class="flex-none">
                  <button class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                              </path>
                        </svg>
                  </button>
            </div>
            <div class="flex-none px-2 mx-2">
                  <span class="text-lg font-bold">
                        LK-EATS
                  </span>
            </div>
            <div class="flex justify-center flex-1 px-2 mx-2">
                  <div class="items-stretch hidden lg:flex">
                        <a href="{{ route('home') }}" class="btn btn-ghost btn-sm rounded-btn">
                              Home
                        </a>
                        <a href="{{ route('restaurant.index') }}" class="btn btn-ghost btn-sm rounded-btn">
                              Restaurants
                        </a>
                        <a href="{{ route('foods') }}" class="btn btn-ghost btn-sm rounded-btn">
                              Food
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-ghost btn-sm rounded-btn">
                              Contact
                        </a>
                  </div>
            </div>

            <div class="flex-none hidden px-2 mx-2 lg:flex">
                  <div class="flex items-stretch">

                        @if (Route::has('login'))

                              @auth
                                    <a href="{{ route('profile') }}" class="btn btn-ghost btn-sm rounded-btn mr-0">
                                          <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                          </svg>
                                          {{ Auth::user()->name }}
                                    </a>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                          @csrf
                                          <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="btn btn-ghost btn-sm rounded-btn">
                                                <span class="mr-1">Logout</span>
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                </svg>
                                          </a>
                                    </form>

                              @else
                                    <a href="{{ route('login') }}" class="btn btn-ghost btn-sm rounded-btn">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                          </svg>
                                          Login
                                    </a>
                                    @if (Route::has('register'))
                                          <a href="{{ route('register') }}" class="btn btn-ghost btn-sm rounded-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                Register
                                          </a>
                                    @endif
                              @endauth

                        @endif
                  </div>
            </div>

      </div>
</header>
