<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Book extends Model
{
    use Rateable;
    protected $table = "books";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'title',
        'preview',
        'publisher_id',
        'category_id',
        'author',
        'picture',
        'page',
        'rum_like',
        'rum_comment',
        'rum_follow',
        'avg_rate',
    ];

    public function category()
    {
        return $this->belongsTo('Category::class');
    }

    public function publisher()
    {
        return $this->belongsTo('Publisher::class');
    }

    public function author()
    {
        return $this->belongsTo('Author::class');
    }

    public function book_borrows()
    {
        return $this->hasMany('Borrow_Book::class');
    }

    public function comments()
    {
        return $this->hasMany('Comment::class');
    }

    public function rates()
    {
        return $this->hasMany('Rate::class');
    }

    public function likes()
    {
        return $this->hasMany('Like::class');
    }
}
