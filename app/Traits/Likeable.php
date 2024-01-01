<?php

namespace App\Traits;

use App\Models\Like;
use App\Models\User;
use Illuminate\Contracts\Database\Query\Builder;

trait Likeable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub("SELECT tweet_id, sum(liked) likes, sum(!liked) dislikes FROM likes GROUP BY tweet_id", 'likes', 'likes.tweet_id', 'tweets.id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function like($user = NULL, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()
        ], [
            'liked' => $liked
        ]);
    }

    public function dislike($user = NULL)
    {
        return  $this->like($user, false);
    }
    public function isLikedBy(User $user)
    {
        $user->load('likes');
        return (bool) $user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();
    }
    public function notLikedBy(User $user)
    {
        $user->load('likes');
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', false)->count();
    }
}
