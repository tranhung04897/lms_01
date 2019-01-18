<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'follow',
    ];

    public function follows()
    {
        return $this->hasMany('Follow::class');
    }

    public function books()
    {
        return $this->hasMany('Book::class');
    }
}
