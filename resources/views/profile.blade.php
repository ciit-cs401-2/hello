@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<div class="profile-page">
    <div class="profile-card">
        <div class="profile-header">
            <div class="profile-picture">
                <img src="{{ asset('images/1.png') }}" alt="Profile Picture">
            </div>
            <div class="profile-name">
                <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
                <p class="tagline">{{ ucfirst($user->role) }}</p>
            </div>
        </div>

        <div class="profile-details">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Username:</strong> {{ $user->username }}</p>
        </div>

        <div class="profile-footer">
            <img src="{{ asset('images/1.png') }}" class="footer-image" alt="Decorative image">
        </div>
    </div>
</div>

@endsection
