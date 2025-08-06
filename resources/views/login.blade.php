@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="login-container ">

        
        <form action="/login" method="POST" class="">
            @csrf
            <div class="logo">
                <div class="logo-icon"></div>
                <h1>FinOut</h1>
                <p class="tagline">Your Daily Edge in Finance</p>
            </div>
            <div class="form-group full-width">
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
    
            <div class="form-group full-width">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
    
            <button type="submit" class="submit-btn">Login</button>
            <div class="login-link">
                <a href="/register">Don't Have an Account?</a>
            </div>
        </form>
        
    </div>
@endsection