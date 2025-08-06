@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@php
    $files = glob(public_path('images/artimages/*.png'));
    $path1 = count($files) ? 'images/artimages/' . basename($files[array_rand($files)]) : null;
    $path2 = count($files) ? 'images/artimages/' . basename($files[array_rand($files)]) : null;

    $image1 = $path1 ?? 'images/artimages/default.png';
    $image2 = $path2 ?? 'images/artimages/default.png';
@endphp

<div class="profile-page">
    <div class="profile-card">
        <div class="profile-header">
            <div class="profile-picture">
                <img src="{{ asset($image1) }}" alt="Profile Picture">
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
            <img src="{{ asset($image2) }}" class="footer-image" alt="Decorative image">
        </div>
    </div>
</div>

@endsection





