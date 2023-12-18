<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Font Awsome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Link CSS ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="vh-100 gradient-custom" >
        <div class="container py-5 h-100" >
            <div class="row d-flex justify-content-center align-items-center h-100" >
                <div class="col-12 col-md-8 col-lg-6 col-xl-7" >
                    <div class="card bg-dark text-center text-white" style="width: 40rem;" >
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h3 class="card-title">Login</h3>
                            <br>
                            <div class="mb-4 col-md-8 mx-auto">
                                <input class="form-input col-12 w-75" type="text" name="username" id="exampleInputUsername" placeholder="Username">
                              </div>
                              <div class="mb-4 col-md-8 mx-auto">
                                <input class="form-input col-md-12 w-75" type="password" name="password" id="exampleinputPassword" placeholder="Password">
                              </div>
                              <div class="log mb-3 col-md-6 mx-auto">
                                <a href="/login">
                                    <button class="butlog mb-2 pt-2 pb-2 col-md-12 mx-auto text-white " >
                                        Login
                                    </button>
                                </a>
                              </div>
                              <p class="text-secondary" >Dont have an account?<a href="/signup" class="sign"> Sign up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
      <!-- Script JS Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        function myFunction() {
        document.getElementsByTagName("demo")[0].style.backgroundColor = "yellow";
        }
    </script>
</body>
</html>
