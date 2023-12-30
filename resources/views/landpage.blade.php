<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KONEKIN</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Link CSS ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">

  </head>
  <body class="bg-black">
    <section class="container mx-auto mt-32">
        <div class="grid grid-cols-12 ">
            <div>
                <nav class="navbar sticky-top bg-none">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="/">
                        <img src="img/konekin-bulat.png" alt="" width="41" height="41" class="d-inline-block align-text-top"><h4 class="d-inline-block align-text-top ms-2 mt-1">Berrvy</h4>
                      </a>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
                        <a href="/login"><button type="button" class="btn btn-outline-light col-sm-9" id="btn2" >Sign in</button></a>
                        <a href="/register"><button  type="button" class="btn col-sm-9" id="btn1">Sign up</button></a>

                    </div>
                  </nav>
                  </div>

         <div class="mt-4 w-full min-h-screen mb-0 flex-wrap gap-6  flex justify-center items-center mx-auto font-poppins">
         @include('layouts.partials.H-landpage')
         @include('layouts.partials.AllCommunity')
        @include('layouts.partials.footer')

         </div>





        </div>

    </section>


<!-- -->
<script src="script.js"></script>
<!-- Script JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
