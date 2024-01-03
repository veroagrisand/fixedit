
@include('SuperUser.partials.navbar')

<section class="content">

      <header class="top-head container-fluid">
          <div class="headaja py-2">
              @yield('tittle')
          </div>
      </header>
      <!-- Header Ends -->

      <div class="warper container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="container">
                        <div class="page-header">
                            <h3> Kelola komunitas</h3>
                            <hr>
                        </div>

                        <form action="{{ route('superuser.update', ['id_komunitas' => $komunitass->id_komunitas ]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-3">
                                    <h4>Nama komunitas</h4>
                                </div>
                                <div class="col-3">
                                    <textarea name="new_name" id="namakomunitas" cols="30" rows="3">{{ $komunitass->nama_komunitas }} </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <h4>Deskripsi komunitas</h4>
                                </div>
                                <div class="col-3">
                                    <textarea name="description_komunitas" id="namakomunitas" cols="30" rows="3">{{ $komunitass->description_komunitas }}</textarea>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-3">
                                    <h4>Nama komunitas</h4>
                                </div>
                                <div class="col-3">
                                    <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <h4>Nama komunitas</h4>
                                </div>
                                <div class="col-3">
                                    <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <h4>Nama komunitas</h4>
                                </div>
                                <div class="col-3">
                                    <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <h4>Nama komunitas</h4>
                                </div>
                                <div class="col-3">
                                    <textarea name="namakomunitas" id="namakomunitas" cols="30" rows="3">Pemrograman web</textarea>
                                </div>
                            </div> --}}
                            <div class="row mt-5">
                                <div class="col-3">

                                </div>
                                <div class="col-3">
                                    <button class="btn btn-primary me-1">Simpan</button>
                                    <button class="btn btn-danger">Hapus komunitas</button>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
      </div>
      <!-- Warper Ends Here (working area) -->


      <footer class="container-fluid footer">
          Copyright &copy; 2023 <a href="#" >@Konekin</a>
          <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
      </footer>


  </section>

