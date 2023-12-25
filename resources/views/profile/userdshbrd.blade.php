  <!-- Start of x-app-layout -->
  <x-app-layout>
    <!-- Start of font-poppins section -->
    <section class="font-poppins">
  
      <!-- Start of container div -->
      <div class="container mx-auto mt-16 sm:p-6 md:p-4 p-6">
        
        <!-- Start of grid layout -->
        <div class="grid grid-cols-12">
  
  
        
          <!-- Start of left column (col-span-4) -->
          <div class="col-span-4 flex flex-col mx-auto">
  
          <div>
          
          <img src="img/ucup.jpeg" alt="Profile Picture" class="h-[200px] w-[200px] rounded-full order-2 mb-12 ">
    
          </div>
            
              <div class="flex flex-col mx-auto gap-8 font-sm">
              <a href="/tampil1">
                <button class="bg-purple-700 text-slate-200 font-md hover:font-md rounded-full w-full py-3 px-4 hover:text-black hover:bg-white forced-colors:appearance-auto" type="button">
                  Dashboard
                </button>
              </a>
  
              <a href="/tampil2">
                <button class="bg-purple-700 text-slate-200 font-md hover:font-md rounded-full w-full py-3 px-4 hover:text-black hover:bg-white" type="button">
                  Profile
                </button>
              </a>
  
  
              <a href="/profile">
                <button class="bg-purple-700 text-slate-200 font-md hover:font-md rounded-full w-full py-3 px-4 hover:text-black hover:bg-white" type="button">
                  Edit profil
                </button>
              </a>
  
              </div>
              </div>
  
          <!-- Start of right column (col-span-8) -->
          <div class="flex col-span-8 flex-col gap-2">
            <h2 class="mx-4 mb-0 flex justify-start my-auto" style="color: white;">Hello, {{ Auth::user()->name }}</h2>
  
            <!-- Start of content section -->
            <div>
              <div class="col-8 mt-48 mx-4 my-[150px]">
                <!-- Example content sections, replace with actual content -->
                <div class="row gap-20">
                  
                  <div class="col-4 md-6 mt-4">
                    <div class="card" style="width: 15rem; border: 0px;">
                      <div class="card-body text-left">
                        <h6 class="card-title" style="color: white;">Active Community</h6>
                        <p class="card-text"><h1 style="color: white;">misal 4</h1></p>
                      </div>
                    </div>
                  </div>
            
                  <div class="col-4 md-6 mt-4">
                    <div class="card" style="width: 15rem; border: 0px;">
                      <div class="card-body text-left">
                        <h6 class="card-title" style="color: white;">My Community</h6>
                        <p class="card-text"><h1 style="color: white;">1</h1></p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>>
          </div>
        </div>
        @include('/../layouts/partials.footer')
      </div>
    </section>
  </x-app-layout>
  <!-- End of x-app-layout -->