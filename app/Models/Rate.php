<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = "ratings";
    protected $primaryKey = "id";
    protected $fillable = [
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo('User::class');
    }

    public function book()
    {
        return $this->belongsTo('Book::class');
    }

    public function comment()
    {
        return $this->belongsTo('Comment::class');
    }
}
