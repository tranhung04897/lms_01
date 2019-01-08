<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    public function rates()
    {
        return $this->hasMany('Rate::class');
    }

    public function user()
    {
        return $this->belongsTo('User::class');
    }

    public function book()
    {
        return $this->belongsTo('Book::class');
    }
}
