@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/blogpost.css') }}">

<div>
    <div class="main-content">

        <div class="blog-container">
            <div class="blog-img">
                @php
                    $image = request('image') ?? 'images/artimages/default.png';
                @endphp

                <img class="bimg" src="{{ asset($image) }}" alt="Blog image">
            </div>
            <div class="blog">
                <h1 style="font-size: clamp(35px, 2.2vw, 100px); margin: 40px 0px 0px 0px; letter-spacing: 0.05em;">
                    {{ $blogpost->title }}
                </h1>
                <h1 class="author-details" style="margin: 0px; font-weight: normal;">
                    Author: {{ $blogpost->author->first_name }} {{ $blogpost->author->last_name }}
                </h1>

                <hr style="border: none; height: 0.5px; background-color: black;">

                <p style="font-size: clamp(20px, 2vw, 30px); text-align: justify; column-count: 2; column-gap: 40px;">
                    {{ $blogpost->content }}
                </p>
            </div>
        </div>

       {{-- Comments Section --}}
        <div class="comments-section" style="margin: 80px 0;">
            <h2 style="font-size: 28px; margin-bottom: 30px; border-bottom: 1px solid #e0e0e0; padding-bottom: 10px;">Comments</h2>

            @if ($blogpost->comments->count())
                <div class="comment-list" style="display: flex; flex-direction: column; gap: 20px;">
                    @foreach ($blogpost->comments as $comment)
                        <div class="comment-card" style="background: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                            <div class="comment-header" style="display: flex; align-items: center; margin-bottom: 12px;">
                                <div class="comment-avatar" style="width: 40px; height: 40px; background-color: #EFDBC0; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 12px; font-weight: bold;">
                                    {{ substr($comment->user->first_name, 0, 1) }}{{ substr($comment->user->last_name, 0, 1) }}
                                </div>
                                <div>
                                    <strong style="font-size: 16px;">{{ $comment->user->first_name }} {{ $comment->user->last_name }}</strong>
                                    <p style="font-size: 12px; color: #777; margin: 4px 0 0;">
                                        {{ $comment->created_at->format('F j, Y \a\t g:i A') }}
                                    </p>
                                </div>
                            </div>
                            <div class="comment-body" style="font-size: 15px; line-height: 1.5; color: #333;">
                                {{ $comment->description }}
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="no-comments" style="text-align: center; padding: 30px; background: #f9f9f9; border-radius: 8px;">
                    <p style="color: #777;">No comments yet. Be the first to share your thoughts!</p>
                </div>
            @endif
        </div>
        {{-- 🔼 End Comments Section --}}

        <div class="suggested-container">
            <div class="imgpad"></div>
            <div class="suggested">
                <h1 style="text-align: center;">Related</h1>

                @foreach ($otherPosts as $post)
                    @php
                        $files = glob(public_path('images/artimages/*.png'));
                        $path = count($files) ? 'images/artimages/' . basename($files[array_rand($files)]) : null;
                        $imagePath = $path ?? 'images/artimages/default.png';
                    @endphp

                    <div class="latest-box" style="display: flex; align-items: center; gap: 5px; margin-bottom: 30px; flex-direction: row;">
                        @if ($path)
                            <div style="width: clamp(120px, 20vw, 120px); height: clamp(100px, 20vw, 100px); overflow: hidden; flex-shrink: 0; box-shadow: 6px 6px 0px 0px rgba(0, 0, 0, 0.2);">
                                <img src="{{ asset($path) }}" alt="Random Art"
                                    style="width: clamp(120px, 20vw, 120px); height: clamp(100px, 20vw, 100px); object-fit: cover; display: block;">
                            </div>
                        @endif

                        <a href="/blogpost/{{ $post->blogpost_id }}">
                            {{ $post->title }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
