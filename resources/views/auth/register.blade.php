
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <!-- Font Awsome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Link CSS ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="vh-100 gradient-custom ">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                <div class="card bg-dark text-center text-white" style="width: 40rem;">
                    <div class="card-body">
                        <br>
                        <form method="POST" action="{{ route('register') }}">
                            <br><h2 class="mb-4"><b>Register</b></h2>
                            @csrf
                    
                            <!-- Name -->
                            <div class="mb-4 col-md-6 mx-auto">
                                {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                                <input placeholder="Name" class="form-input col-12" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                    
                            <!-- Email Address -->
                            <div class="mb-4 col-md-6 mx-auto">
                                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                <input placeholder="E-mail" class="form-input col-12" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                    
                            <!-- Password -->
                            <div class="mb-4 col-md-6 mx-auto">
                                {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                    
                                <input placeholder="Password" class="form-input col-12" id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                    
                            <!-- Confirm Password -->
                            <div class="mb-4 col-md-6 mx-auto">
                                {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
                    
                                <input placeholder="Confirm Password" class="form-input col-12" id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                    
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </form>
                        <div class="mb-4 col-md-6 mx-auto">
                        {{-- <div class="mb-4 col-md-12 mx-auto d-flex">
                        <div class="flex-fill me-1">
                            <label for="exampleInputBirth1" class="form-label">
                            <input type="text" class="form-control" id="exampleInputBirth1" aria-describedby="birthHelp" placeholder="Birth" 
                                onfocus="(this.type='date')" onblur="(this.type='text')" />
                        </div>
                        <div class="flex-fill ms-1">
                            <label for="exampleInputPlaceBirth1" class="form-label">
                            <input type="text" class="form-control" id="exampleInputPlaceBirth1" aria-describedby="placebirthHelp" placeholder="Place Birth">
                        </div>
                    </div>

                        <div class="mb-4 col-md-12 mx-auto">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div> --}}
                        <div class="log mb-4  mt-4 col-md-12 mx-auto">
                            <a href="/login">
                                <button class="butlog mb-2 pt-2 pb-2 col-md-12 mx-auto text-white">
                                    Sign Up
                                </button>
                            </a>
                        </div> 
                        <p class="text-secondary" >Already have account?<a href="/login" class="sign"> Log In</a></p>
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
</body>
</html>
