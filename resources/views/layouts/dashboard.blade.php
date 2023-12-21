<x-app-layout>
        <section class="vh-200">
          <div class="container py-5 h-100">
            
            <div class="mt-20 jumbo">
              <h1>Discover Unlimited Potential <br> Within the Community</h1>
              <div class="float-end col-md-6">
                <img src="img/landingpage-image.png" alt="3D" class="img-fluid" width="311px">
              </div>
              <p><strong>Welcome to Berrvy,</strong> where your vision of a strong community becomes a <br>reality.</p>
              
              <div class="row mt-4 col-md-4 mt-5">
                <a href="/community"><button class="btn" type="button" id="button-addon3">Join Community</button></a>  
              </div>
              {{-- <div class="row mt-4 col-md-4">
                <div class="input-group mb-3">
                  <input type="text" class="form-control col-md-12" placeholder="Email addres" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <a href="/signup"><button class="btn " type="button" id="button-addon2">Sign up</button></a>
                </div>
              </div> --}}
            </div>

            <div class="text-center mt-60 mb-20">
              <h1>"What communities can you <br>join here?"</h1>
              <p>Discover different communities here! Find one you like, connect with people who share <br>
              your interests, and enjoy a vibrant community experience with us!.</p>
            </div>

            @include('layouts.partials.content')
          </div>
      </section>        
      @include('layouts.partials.footer')
</x-app-layout>

    <!-- -->
    {{-- <script src="script.js"></script>
    <!-- Script JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
            
            <h2></h2>
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}