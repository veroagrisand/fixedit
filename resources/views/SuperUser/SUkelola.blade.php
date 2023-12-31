
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

                    <div class="page-header">
                        <h3> Community</h3>
                    </div>

                </div>
            </div>

            <div class="row">
                @foreach ($komunitas as $community)


                <div class="col-3 mx-3 mt-3">
                    <div class="card" style="width: 18rem;">
                        <div class="cardkomunitas">
                          <h5 class="card-title">{{ $community->nama_komunitas }}</h5>
                          <p class="card-text">{{ $community->description_komunitas }}</p>
                          <div class="row">
                            <div class="col ">
                                <a href="{{ route('superuser.komunitas',['id_komunitas'=> $community->id_komunitas]) }}" class="btn btnn ">Kelola Komunitas</a>
                            </div>
                            <div class="col">
                                <a href="/sukk" class="btn btnn">Kelola Kegiatan</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>

      </div>
      <!-- Warper Ends Here (working area) -->


      <footer class="container-fluid footer">
          Copyright &copy; 2023 <a href="#" >@Konekin</a>
          <a href="#" class="pull-right scrollToTop"><i class="fa fa-chevron-up"></i></a>
      </footer>


  </section>



