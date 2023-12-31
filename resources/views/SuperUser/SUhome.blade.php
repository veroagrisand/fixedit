
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
                        <h3> Dashboard</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-1">
                            <h3 class="card-title">
                                @php
                                $count = 0;
                                @endphp
                                @foreach ($komunitas as $community)
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                                {{ $count }}
                        </h3>
                        <p class="card-text">Total Community</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-2">
                            <h3 class="card-title">
                                @php
                                $count = 0;
                                @endphp
                                @foreach ($User as $U)
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                                {{ $count }}
                            </h3>
                          <p class="card-text">Total Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-3">
                            <h3 class="card-title">BELUM</h3>
                          <p class="card-text">Total Kategori</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-4">
                            <h3 class="card-title">BELUM</h3>
                          <p class="card-text">Total Kategori</p>
                        </div>
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

