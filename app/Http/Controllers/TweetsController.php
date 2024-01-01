<?php

namespace App\Http\Controllers;

use App\Models\Tweet;


class TweetsController extends Controller
{
    public function index()
    {
        /** @var User */
        $user = auth()->user();
        return view('home', [
            'tweets' => $user->getAttributeTimeline(),
            'user' => $user
        ]);
    }
    public function store()

    {
        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);
        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);


        return redirect('/tweets');
    }
}
