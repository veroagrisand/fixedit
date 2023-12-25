<x-app-layout>
<section class="vh-200">
    <div class="container py-5 h-100">
    <div style="display: flex; align-items: center; profile-picture-container">
      <div class="profile-picture-container mr-4">
        <img img src="img/ucup.jpeg" alt="Profile Picture" class="profile-picture">
      </div>      
        {{-- <img src="img/ucup.jpeg" alt="#" style="margin-right: 20px;"> --}}
        <h2 style="color: white;">Hello, {{ Auth::user()->name }}</h2>
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
      {{-- <h5 style="color: white;">Dashboard</h5> --}}
      <div class="row">
        <div class="mt-1 mb-3">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="mt-3 mb-3">
            @include('profile.partials.update-password-form')
        </div>
        <div class="mt-3 mb-3">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
  </div>

    </div>
</section>
@include('/../layouts/partials.footer')
</x-app-layout>
  