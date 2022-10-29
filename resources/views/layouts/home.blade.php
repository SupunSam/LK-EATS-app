{{-- Home Content --}}
@section('pagecdns')
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
@endsection

<div class="sliderAx h-auto">
      <div id="slider-1" class="container mx-auto">
            <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url({{ asset('img/food1.jpg') }})">
                  <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">Services</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
                  </div>
            </div> <!-- container -->
            <br>
      </div>

      <div id="slider-2" class="container mx-auto">
            <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url({{ asset('img/food2.jpg') }})">
                  <p class="font-bold text-sm uppercase">Services</p>
                  <p class="text-3xl font-bold">Hello world</p>
                  <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                  <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
            </div> <!-- container -->
            <br>
      </div>
</div>
<div class="flex justify-between w-12 mx-auto pb-2">
      <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 "></button>
      <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
</div>


{{-- Customer Feedback --}}
<div class="grid grid-cols-1 xl:grid-cols-3 gap-6 sm:gap-6 mt-6">

      @foreach ($restaurants as $restaurant)
            <div class="card shadow-xl image-full">
                  <figure>
                        <img src="{{ asset($restaurant->rest_cover) }}">
                  </figure>
                  <div class="justify-end card-body">
                        <h2 class="card-title text-3xl">{{ $restaurant->rest_name }}</h2>
                        <p class="line-clamp-5">{{ $restaurant->rest_desc }}</p>
                        <div class="card-actions">
                              <a class="btn btn-primary" href="{{ route('restaurant.show', $restaurant->id) }}">Visit Shop</a>
                        </div>
                  </div>
            </div>
      @endforeach

</div>


{{-- Details Card --}}
<div class="col-span-1 xl:col-span-3 card shadow-lg bg-base-100 mt-6">
      <div class="card-body">
            <h2 class="my-4 text-4xl font-bold card-title">Best Food and Restaurants</h2>
            <div class="mb-4 space-x-2 card-actions">
                  <div class="badge badge-ghost">Burgers</div>
                  <div class="badge badge-ghost">Pizzas</div>
                  <div class="badge badge-ghost">Chinese</div>
            </div>
            <p>You can buy the best food form the best restaurants in LK from our website. Please enjoy.</p>
            <div class="justify-end space-x-2 card-actions">
                  <button class="btn btn-primary">Login</button>
                  <button class="btn">Register</button>
            </div>
      </div>
</div>


{{-- Ordering Steps --}}
<div class="col-span-1 xl:col-span-3 card shadow-lg bg-base-100 p-8 mt-6">
      <ul class="w-full steps">
            <li class="step step-primary">Register</li>
            <li class="step step-primary">Choose Food</li>
            <li class="step">Place the Order</li>
            <li class="step">Collect and Enjoy</li>
      </ul>
</div>

@section('scripts')
      <script>
            var cont = 0;

            function loopSlider() {
                  var xx = setInterval(function() {
                        switch (cont) {
                              case 0: {
                                    $("#slider-1").fadeOut(400);
                                    $("#slider-2").delay(400).fadeIn(400);
                                    $("#sButton1").removeClass("bg-purple-800");
                                    $("#sButton2").addClass("bg-purple-800");
                                    cont = 1;
                                    break;
                              }
                              case 1: {
                                    $("#slider-2").fadeOut(400);
                                    $("#slider-1").delay(400).fadeIn(400);
                                    $("#sButton2").removeClass("bg-purple-800");
                                    $("#sButton1").addClass("bg-purple-800");
                                    cont = 0;
                                    break;
                              }
                        }
                  }, 8000);
            }

            function reinitLoop(time) {
                  clearInterval(xx);
                  setTimeout(loopSlider(), time);
            }

            function sliderButton1() {
                  $("#slider-2").fadeOut(400);
                  $("#slider-1").delay(400).fadeIn(400);
                  $("#sButton2").removeClass("bg-purple-800");
                  $("#sButton1").addClass("bg-purple-800");
                  reinitLoop(4000);
                  cont = 0
            }

            function sliderButton2() {
                  $("#slider-1").fadeOut(400);
                  $("#slider-2").delay(400).fadeIn(400);
                  $("#sButton1").removeClass("bg-purple-800");
                  $("#sButton2").addClass("bg-purple-800");
                  reinitLoop(4000);
                  cont = 1
            }
            $(window).ready(function() {
                  $("#slider-2").hide();
                  $("#sButton1").addClass("bg-purple-800");
                  loopSlider();
            });
      </script>
@endsection
