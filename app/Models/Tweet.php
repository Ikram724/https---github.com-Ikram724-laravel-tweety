<?php

namespace App\Models;

use App\Traits\Likeable;
use Database\Factories\TweetFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likeable;
    protected $guarded = [];
    protected $factory = TweetFactory::class;
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
