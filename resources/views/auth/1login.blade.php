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

{{-- <x-guest-layout> --}}
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
    <section class="vh-100 gradient-custom" >
        <div class="container py-5 h-100" >
            <div class="row d-flex justify-content-center align-items-center h-100" >
                <div class="col-12 col-md-8 col-lg-6 col-xl-6" >
                    <div class="card bg-dark text-center text-white" style="width: 40rem;" >
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h3 class="card-title text-center ">Login</h3>

                                <!-- Email Address -->
                                <div class="mb-4 mt-5 col-md-8 col-mt-5 mx-auto  ">
                                    {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                    <input class="form-input col-12 w-75 " id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                
                        
                                <!-- Password -->
                                <div class="mb-4 col-md-8 mx-auto">
                                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                        
                                    <input class="form-input col-md-12 w-75" id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" 
                                                    placeholder="Password"/>
                        
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                        
                                <!-- Remember Me -->
                                {{-- <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                    </label>
                                </div> --}}
                                
                                <div class="flex items-center justify-end mt-4 log mb-4 col-md-6 mx-auto">
                                    <button class="butlog mb-4 pt-2 pb-2 col-md-12 mx-auto text-white ">
                                        {{ __('Log in') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="underline   text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                        
                                    <p class="text-secondary mt-2" >Dont have an account?<a href="register" class="sign"> Sign up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.credit')

{{-- </x-guest-layout> --}}
