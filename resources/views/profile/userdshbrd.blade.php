
<x-app-layout>
<section class="vh-200 font-poppins">
    <div class="container py-5 h-100">
    <div style="display: flex; align-items: center;">
      <div class="profile-picture-container mr-4">
        <img img src="img/ucup.jpeg" alt="Profile Picture" class="profile-picture">
      </div> 
      {{-- <img src="img/konekin-bulat.png" alt="#" style="margin-right: 20px;"> --}}
      <h2 style="color: white;"> Hello, {{ Auth::user()->name }}</h2>
    </div>

  <hr size="5px" color="white">
  <div class="row">
    <div class="col-3 mt-2">
        <a href="/tampil">
        <button class="btn btn-outline-light btn-lg w-100" type="button">
          <i class="bi bi-house"></i> Dashboard
        </button>
      </a>
  
      <div class="mt-4">
        <a href="/tampil2">
          <button class="btn btn-outline-light btn-lg w-100" type="button">
            <i class="bi bi-person"></i> My Profile
          </button>
        </a>
      </div>

      <div class="mt-4">
        <a href="/profile">
          <button class="btn btn-outline-light btn-lg w-100" type="button">
            <i class="bi bi-person"></i> Edit Profile
          </button>
        </a>
      </div>
      

    </div>
  
    <div class="col-8 mt-2">
      <h5 style="color: white;"><i class="bi bi-house"></i> Dashboard</h5>
      <div class="row">
        
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
  </div>

    </div>
</section>
  @include('/../layouts/partials.footer')
</x-app-layout>