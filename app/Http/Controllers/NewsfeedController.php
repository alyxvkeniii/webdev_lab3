<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsfeedController extends Controller
{
    public function showNewsfeed($category = null)
    {
        // Example data for all categories
        $allPosts = [
            'cats' => [
                [
                    'username' => '@cutecatlover',
                    'post_date' => '2 hours ago',
                    'profile_pic' => 'https://via.placeholder.com/50',
                    'content' => 'Meet my new kitten, Fluffy!',
                    'cat_photo' => 'https://via.placeholder.com/400',
                    'likes' => 45,
                    'comments' => [
                        ['user' => 'User123', 'text' => 'So cute! 🥰'],
                        ['user' => 'CatLover99', 'text' => 'I need a kitten too!'],
                    ]
                ],
                // Additional cat posts...
            ],
            'dogs' => [
                // Dog posts...
            ],
            'birds' => [
                // Bird posts...
            ]
        ];

        // Default to all posts if no category is provided
        if (is_null($category) || !array_key_exists($category, $allPosts)) {
            $posts = array_merge(...array_values($allPosts)); // Merge all posts into a single array
            $category = 'all'; // Set a default category
        } else {
            $posts = $allPosts[$category];
        }

        return view('newsfeed', ['posts' => $posts, 'category' => $category]);
    }
}
