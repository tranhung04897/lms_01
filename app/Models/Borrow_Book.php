<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow_Book extends Model
{
    protected $table = "borrow_book";

    public function borrow()
    {
        return $this->belongsTo('Borrow::class');
    }

    public function book()
    {
        return $this->belongsTo('Book::class');
    }
}
