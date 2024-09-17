@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/css/newsfeed.css"> 
@endsection

@section('content')
<body>
    <div class="newsfeed-container">
        <header>
            <h1>Mingkai Cat Connect</h1>
            <p>Share your adorable cats with the world!</p>
            <button class="post-btn">+ Post your Cat</button>
        </header>

        <div class="post">
            <div class="user-info">
                <a href="#" class="username">@cutecatlover</a>
                <span class="post-date">• 2 hours ago</span>
                <img src="https://via.placeholder.com/50" alt="User Profile" class="profile-pic">
            </div>
            <div class="post-content">
                <p>Meet my new kitten, Fluffy!</p>
                <img src="https://via.placeholder.com/400" alt="Cat Post" class="cat-photo">
                <div class="post-actions">
                    <button class="like-btn">❤️ 45 Likes</button>
                    <button class="comment-btn">💬 Comment</button>
                    <button class="share-btn">🔗 Share</button>
                </div>
            </div>
            <div class="comments-section">
                <p><strong>User123:</strong> So cute! 🥰</p>
                <p><strong>CatLover99:</strong> I need a kitten too!</p>
                <input type="text" placeholder="Add a comment..." class="comment-input">
            </div>
        </div>

        <div class="post">
            <div class="user-info">
                <a href="#" class="username">@fluffymom</a>
                <span class="post-date">• 3 hours ago</span>
                <img src="https://via.placeholder.com/50" alt="User Profile" class="profile-pic">
            </div>
            <div class="post-content">
                <p>Fluffy and I enjoying a sunny day ☀️</p>
                <img src="https://via.placeholder.com/400" alt="Cat Post" class="cat-photo">
                <div class="post-actions">
                    <button class="like-btn">❤️ 30 Likes</button>
                    <button class="comment-btn">💬 Comment</button>
                    <button class="share-btn">🔗 Share</button>
                </div>
            </div>
            <div class="comments-section">
                <p><strong>CuteCats:</strong> Looks like a perfect day!</p>
                <input type="text" placeholder="Add a comment..." class="comment-input">
            </div>
        </div>

        <aside class="trending-topics">
            <h2>Trending Topics</h2>
            <ul>
                <li>#CatsOfInstagram</li>
                <li>#KittenAdventures</li>
                <li>#PetLoversUnite</li>
                <li>#FelineFriends</li>
            </ul>
        </aside>
    </div>
</body>
@endsection
