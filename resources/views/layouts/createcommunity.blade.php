<x-app-layout>
    {{-- <section class="vh-200">
      <div class="container py-5 h-100"> --}}
  
        <form action="/createcommunity" method="post" enctype="multipart/form-data">
          @csrf
          <div class="createkomunitas">
            <div class="container py-5">
              <div class="row d-flex justify-content-center  text-white align-items-center">
                  <div class="col-12 col-md-8 col-lg-6 col-xl-9">
                    <p class="justify-center">Create Your Community Below</p>
                    {{--  --}}
                   
                    {{--  --}}
                    
                    {{-- <div name="id_komunitas">KOM01</div> --}}
                      <div class="card bg-dark text-white">
                          <div class="card-bodyyy ps-2 bg-opacity-25">
                              <div class="row">
                                  <p class="kt mb-5 mt-1 justify-content-center">Category</p>
                                    <div class="dropdown ">
                                      <label for="kategori"></label>
                                      <select class="bg-dark text-white rounded-2" id="kategori" name="id_kategori" required>
                                          <option value="KTG01">Networking</option>
                                          <option value="KTG02">Web Developer</option>
                                          <option value="KTG03">UI / UX</option>
                                          <!-- Tambahkan opsi sesuai kebutuhan -->
                                      </select>
                                    </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        
        <div class="createkomunitas2">
          <div class="container">
              <div class="row d-flex justify-content-center text-white align-items-center">
                  <div class="col-12 col-md-8 col-lg-6 col-xl-9">
                      <div class="card bg-dark text-white">
                          <div class="card-bodyyy ps-2 mx-auto">
                                  <p class="kt">Profile Picture</p>
                                  <p class="des text-secondary">Image should be at least 600x600px and in JPEG, JPG, and PNG format.</p>
                                  <img src="img/konekin-bulat.png" alt="zizan">
                                  <label for="foto" class="form-label"></label>
                                  <input class="form-control form-control-sm bg-dark text-white mb-4 mx-auto" id="foto" type="file" name="image_komunitas" accept="image/*" required>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
        <div class="createkomunitas3 mt-5">
        <div class="container">
          <div class="row d-flex justify-content-center text-white align-items-center" >
              <div class="col-12 col-md-8 col-lg-6 col-xl-9">
                  <div class="card bg-dark text-white">
                      <div class="card-bodyyy ps-2 mx-auto">
                        <p class="kt">About Your Community</p>
                        <div class="mb-4 mx-auto">
                          <input class="form-input col-12 bg-dark" name="nama_komunitas" type="text" id="exampleInputUsername" placeholder="Community Name">
                        </div>
                        <div class="mb-4 mx-auto">
                          <textarea class="form-input col-12 bg-dark" placeholder="Description" name="description_komunitas" id="" required></textarea>
                        </div>
                        
                      </div>
                      <div class="mb-auto mx-auto">
                        <button class="btn btn-light" type="submit">Save</button>
                        </div>
                  </div>
              </div>
          </div>
        </div>
        
        </div>
        
        
        </form>
        <br><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      {{-- </div>
  </section>         --}}
  @include('layouts.partials.footer')
  </x-app-layout>