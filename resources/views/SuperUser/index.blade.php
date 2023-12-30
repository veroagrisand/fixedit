<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>

	<meta name="description" content="">
	<meta name="author" content="sis">

	<!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Link CSS ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="app.v1.css">

    <!-- Fonts  -->
   <!--<link href='http://fonts.googleapis.com/css?family=Hind:400,500,600,300' rel='stylesheet' type='text/css'>-->

    {{-- <script language="javascript">
      function keluar()
      {
      tanya=confirm("Apakah anda yakin akan keluar ?")
        if (tanya !="0")
        {
        top.location="./logout.php"
        }
      }
    </script> --}}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body data-ng-app>

	<aside class="left-panel">

        <div class="navigation">
            <div class="user text-center">
                <img src="img/konekin-bulat.png" class="img-circle" alt="...">
                <h2 class="user-name">{{ Auth::user()->name }}</h2>
                <h3 class="user-name">{{ Auth::user()->email }}<h3>
                 <div class="dropdown user-login">
                  <a role="menuitem" onclick="keluar()"  href="{{ route('Superuser.logout') }}"><i class="bi bi-box-arrow-in-left"></i> Log Out</a>
                </div>
          </div>

          <nav class="navigation">
              <ul class="list-unstyled">
                  <li class="active"><a href="/su"><i class="fa fa-laptop"></i><span class="nav-label">Home</span></a></li>
                  <li class="has-submenu active"><a href="/si"><i class="fa fa-file-text"></i> <span class="nav-label ">Mengelola Komunitas</span></a>
                      {{-- <ul class="list-unstyled">
                        <li><a href="?modul=kasir">Kasir</a></li>
                        <li><a href="?modul=dokter">Dokter</a></li>
                        <li><a href="?modul=kamar">Kamar</a></li>
                        <li><a href="?modul=jenispelayanan">Jenis Pelayanan</a></li>
                      </ul> --}}
                </li>
                 <li class="has-submenu active"><a href="/si"><i class="fa fa-mail-forward"></i> <span class="nav-label">Mengelola User</span></a></li>
                 <li class="has-submenu active"><a href="/su"><i class="fa fa-mail-forward"></i> <span class="nav-label">Mengelola Kegiatan</span></a></li>


            </ul>
          </nav>
        </div>



    </aside>
    <!-- Aside Ends-->

    <section class="content">

        <header class="top-head container-fluid text-white">
            <div class="headaja py-2">
                @yield('tittle')
            </div>
        </header>
        <!-- Header Ends -->


        <div class="warper container-fluid">

            @yield('content')

        </div>
        <!-- Warper Ends Here (working area) -->


        @include('layouts.partials.footer')


    </section>
    <!-- Content Block Ends Here (right box)-->


    <!-- JQuery v1.9.1 -->
  	<script src="assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
     <script src="assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Globalize -->
    <script src="assets/js/globalize/globalize.min.js"></script>

    <!-- NanoScroll -->
    <script src="assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugins/DevExpressChartJS/dx.chartjs.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/world.js"></script>
   	<!-- For Demo Charts -->
    <script src="assets/js/plugins/DevExpressChartJS/demo-charts.js"></script>
    <script src="assets/js/plugins/DevExpressChartJS/demo-vectorMap.js"></script>

    <!-- Sparkline JS -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- For Demo Sparkline -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.demo.js"></script>

    <!-- Angular JS -->
    <!-- ToDo List Plugin -->
    <script src="assets/js/angular/todo.js"></script>

    <script src="assets/js/jquery.validate.js"></script>



    <!-- Calendar JS -->
    <script src="assets/js/plugins/calendar/calendar.js"></script>
    <!-- Calendar Conf -->
    <script src="assets/js/plugins/calendar/calendar-conf.js"></script>

      <!-- TypeaHead -->
    <script src="assets/js/plugins/typehead/typeahead.bundle.js"></script>

    <script src="ambil.js"></script>

    <!-- InputMask -->
    <script src="assets/js/plugins/inputmask/jquery.inputmask.bundle.js"></script>

    <!-- TagsInput -->
    <script src="assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Chosen -->
    <script src="assets/js/plugins/bootstrap-chosen/chosen.jquery.js"></script>

    <!-- moment -->
    <script src="assets/js/moment/moment.js"></script>

    <!-- DateTime Picker -->
    <script src="assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>

    <!-- Data Table -->
    // <script src="assets/js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="assets/js/plugins/datatables/DT_bootstrap.js"></script>
    <script src="assets/js/plugins/datatables/jquery.dataTables-conf.js"></script>

    <!-- Custom JQuery -->
  	<script src="assets/js/app/custom.js" type="text/javascript"></script>





</body>
</html>
