<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostCollection;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post): PostCollection
    {
        return new PostCollection($post->orderByDesc('created_at')->get());
    }
}
