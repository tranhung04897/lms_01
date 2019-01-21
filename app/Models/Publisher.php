<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = "publisher";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
    ];

    public function books()
    {
        return $this->hasMany('Book::class');
    }
}
