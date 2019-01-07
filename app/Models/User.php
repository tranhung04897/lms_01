<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'gender',
        'birthday',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

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

    public function follows()
    {
        return $this->hasMany('Follow::class');
    }
}
