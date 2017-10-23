<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    const ACCESS_ADMIN = 1;
    const ACCESS_MEMBER = 2;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'level'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'author_id', 'id');
    }

    public function isAdmin()
    {
        return $this->level == static::ACCESS_ADMIN;
    }
}
