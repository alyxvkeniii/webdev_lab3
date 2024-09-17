@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/css/newsfeed.css">
@endsection

@section('content')

<div class="newsfeed-container">
    <header>
        <div class="header-content">
            <h1>Mingkai {{ ucfirst($category) === 'All' ? 'All Categories' : ucfirst($category) }} Connect</h1>
            <p>Share your adorable {{ $category === 'all' ? 'pets' : $category }} with the world!</p>
            <button class="post-btn">+ Post your {{ $category === 'all' ? 'pet' : $category }}</button>
        </div>
    </header>

    @if(count($posts) > 0)
        @foreach ($posts as $post)
        <div class="post">
            <div class="user-info">
                <a href="#" class="username">{{ $post['username'] }}</a>
                <span class="post-date">• {{ $post['post_date'] }}</span>
                <img src="{{ $post['profile_pic'] }}" alt="User Profile" class="profile-pic">
            </div>
            <div class="post-content">
                <p>{{ $post['content'] }}</p>
                <img src="{{ $post['cat_photo'] }}" alt="Post Photo" class="cat-photo">
                <div class="post-actions">
                    <button class="like-btn">❤️ {{ $post['likes'] }} Likes</button>
                    <button class="comment-btn">💬 Comment</button>
                    <button class="share-btn">🔗 Share</button>
                </div>
            </div>
            <div class="comments-section">
                @foreach ($post['comments'] as $comment)
                <p><strong>{{ $comment['user'] }}:</strong> {{ $comment['text'] }}</p>
                @endforeach
                <input type="text" placeholder="Add a comment..." class="comment-input">
            </div>
        </div>
        @endforeach
    @else
        <p>No posts available for this category.</p>
    @endif

</div>

@endsection
