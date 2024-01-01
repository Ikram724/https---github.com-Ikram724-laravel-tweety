<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class FollowsController extends Controller
{
    public function store(User $user)
    {
        /** @var User */
        $auth = auth()->user();
        $auth->toogleFollow($user);

        return back();
    }
}
