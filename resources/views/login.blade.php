@extends('layouts.app')

@section('content')

    <div class="min-h-screen flex items-center justify-center">

        <h1>Login</h1>
        <form action="/login" method="POST" class="p-5 bg-red-500">
            @csrf
            <div>
                <label for="username">Username</label>
                <input type="text" name="username">
            </div>
    
            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
    
            <button type="submit">Login</button>
        </form>
        <a href="/register">Don't Have an Account?</a>
    </div>
@endsection