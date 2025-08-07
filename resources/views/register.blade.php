@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/registration.css') }}">
    <div class="registration-container w-screen h-screen">
        
        <form action="/register" method="POST" class="">
            @csrf
            <div class="logo2">
                <div class="logo-icon"></div>
                <h1>FinOut</h1>
                <p class="tagline">Your Daily Edge in Finance</p>
            </div>
            <hr style="  height: 1px;  border: none;  margin-bottom: 20px;  background-image: linear-gradient(to right, transparent, #F5E6D3, transparent);">
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" placeholder="Katya" />
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Romana" />
                </div>
            </div>

            <div class="form-group full-width">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Katbus" />
            </div>

            <div class="form-group full-width">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="katbus8008@gmail.com" />
            </div>

            <div class="form-group full-width">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••••••••" />
            </div>

            <button type="submit" class="submit-btn">Register</button>
            
            <div class="login-link">
                <a href="/login">Already have an account? Log In</a>
            </div>
        </form>

    </div>
@endsection