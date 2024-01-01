<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profile', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(3),
        ]);
    }
    public function edit(User $user)
    {
        // $this->authorize('edit', $user);
        // if ($user->isNot(auth()->user())) {
        //     abort(404); 
        // }
        return view('editProfile', compact('user'));
    }

    public function delete(Tweet $tweet)
    {
        if (auth()->user()->id !== $tweet->user_id) {
            abort(403, 'Unauthorized action.');
        }
        $tweet->delete();
        return redirect('/tweets')->with('success', 'Tweet deleted successfully.');
    }

    public function update(User $user)
    {

        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255',  Rule::unique('users')->ignore($user)],
            'password' => ['string', 'min:8', 'max:255', 'confirmed', 'required']
        ]);
        if (request('avatar')) {
            $attributes['avatar'] =  request('avatar')->store('avatars');
        }
        $user->update($attributes);
        return redirect($user->path());
    }
}
