<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class LikesController extends Controller
{

    public function like(Tweet $tweet)
    {
        $user = auth()->user();
        $tweet->like($user);
        return back();
    }

    public function dislike(Tweet $tweet)
    {
        $user = auth()->user();
        $tweet->dislike($user);
        return back();
    }
    public function bla()
    {
        return ['foo' => 'bar'];
    }
}
