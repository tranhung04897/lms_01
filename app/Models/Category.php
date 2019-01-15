<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categorys";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'parent_id',
    ];

    public function books()
    {
        return $this->hasMany('Book::class');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
}
