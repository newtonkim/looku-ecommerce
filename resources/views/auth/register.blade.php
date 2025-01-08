@extends('layouts.base')

@section('content')
       <style>
        [type="text"]:focus,
        [type="email"]:focus,
        [type="url"]:focus,
        [type="password"]:focus,
        [type="number"]:focus,
        [type="date"]:focus,
        [type="datetime-local"]:focus,
        [type="month"]:focus,
        [type="search"]:focus,
        [type="tel"]:focus,
        [type="time"]:focus,
        [type="week"]:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {

            box-shadow: none !important;
            border-color: transparent !important;
        }
    </style>
    <!-- Sign Up Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-title">
                        <h2>Register</h2>
                    </div>

                    <div class="input">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="block w-full mt-1" type="text" name="name"
                            :value="old('name')" required="" autofocus="" autocomplete="name">
                            @error('name')<span class="mt-3 text-danger"> {{$message}} </span>@enderror
                    </div>

                    <div class="input">
                        <label for="emailname">Email Address</label>
                        <input type="email" id="emailname" class="block w-full mt-1" type="email" name="email"
                            :value="old('email')" required="" autocomplete="username">
                             @error('email')<span class="mt-3 text-danger"> {{$message}} </span>@enderror
                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input type="password" id="pass" class="block w-full mt-1" name="password" required=""
                            autocomplete="new-password">
                            @error('password')<span class="mt-3 text-danger"> {{$message}} </span>@enderror
                    </div>

                    <div class="input">
                        <label for="compass">Confirm Password</label>
                        <input type="password" id="compass" class="block w-full mt-1" name="password_confirmation"
                            required="" autocomplete="new-password">
                    </div>

                    <div class="button login">
                        <button type="submit">
                            <span>Sign Up</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
            <p><a href="{{ route('login') }}" class="theme-color">Already have an account?</a></p>
        </div>
    </div>

    <!-- Sign Up Section End -->

@endsection
