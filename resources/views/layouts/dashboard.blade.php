<x-app-layout>
        <section class="vh-200 font-poppins">
          <div class="container py-0 h-100">
            
            <div class="mt-0 jumbo ">
              <h1>Ready to join your <br>Community experience</h1>
              <div class="float-end col-md-6">
                <img src="img/landingpage-image.png" alt="3D" class="img-fluid" width="311px">
              </div>
              <p>Join the community,<strong> and it's free! </strong></p>
              
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

  