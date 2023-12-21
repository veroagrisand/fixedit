<x-app-layout>
    
  {{-- <x-slot name="header">
      <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight"> --}}
          {{-- {{ __('Dashboard') }} --}}
          
      {{-- </h2>
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

{{-- @extends('layout.templateuser')

@section('title', 'Community')

@section('content') --}}
    
<div class="text-center mt-5">
    <h1>"What communities can you <br>join here?"</h1>
    <p>Discover different communities here! Find one you like, connect with people who share <br>
    your interests, and enjoy a vibrant community experience with us!.</p>
  </div>
<br><br><br>

<div class="text-center">
        <a href="/createcommunity" class="btncreate badge text-wrap text-center ms-3 me-3"><button class="btn p-2" >Create Community</button></a>
        <a href="" class="btnmycommunity badge text-wrap text-center ms-3 me-3"><button class="btn p-2" >My Community</button></a>
</div>

<br><br><br><br><br>
<div class="container mt-4">
    <div class="row">
    <div class="col align-self-start">
      <div class="card bg-light justify-content-center text-white">
        <img src="img/Card.png" class="card-img-top text-center" alt="community">
        <div class="container card-bodyy bg-light mb-4">
          <h4 class="font-weight-bold">Pemrograman WEB ITP</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn" id="seec">See community</a>
        </div>
      </div>
    </div>
  
    <div class="col align-self-center">
      <div class="card bg-light justify-content-center text-white">
        <img src="img/infosumbar.jpeg" class="card-img-top text-center" alt="community">
        <div class="container card-bodyy bg-light mb-4">
          <h4 class="font-weight-bold">Info Sumbar</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn" id="seec">See community</a>
        </div>
      </div>
    </div>
  
    <div class="col align-self-end">
      <div class="card bg-light justify-content-center text-white">
        <img src="img/Card.png" class="card-img-top text-center" alt="community">
        <div class="container card-bodyy bg-light mb-4">
          <h4 class="font-weight-bold">Pemrograman WEB ITP</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn" id="seec">See community</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  <div class="container mt-4">
    <div class="row">
    <div class="col align-self-start">
      <div class="card bg-light justify-content-center text-white">
        <img src="img/Card.png" class="card-img-top text-center" alt="community">
        <div class="container card-bodyy bg-light mb-4">
          <h4 class="font-weight-bold">Pemrograman WEB ITP</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn" id="seec">See community</a>
        </div>
      </div>
    </div>
  
    <div class="col align-self-center">
      <div class="card bg-light justify-content-center text-white">
        <img src="img/Card.png" class="card-img-top text-center" alt="community">
        <div class="container card-bodyy bg-light mb-4">
          <h4 class="font-weight-bold">Pemrograman WEB ITP</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn" id="seec">See community</a>
        </div>
      </div>
    </div>
  
    <div class="col align-self-end">
      <div class="card bg-light justify-content-center text-white">
        <img src="img/Card.png" class="card-img-top text-center" alt="community">
        <div class="container card-bodyy bg-light mb-4">
          <h4 class="font-weight-bold">Pemrograman WEB ITP</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn" id="seec">See community</a>
        </div>
      </div>
    </div>
  </div>
  </div>

{{-- @stop --}}
</x-app-layout>