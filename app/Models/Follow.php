<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $table = "follows";

    public function user()
    {
        return $this->belongsTo('User::class');
    }

    public function book()
    {
        return $this->belongsTo('Book::class');
    }

    public function author()
    {
        return $this->belongsTo('Author::class');
    }
}
