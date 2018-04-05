<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Add many relationship to files
    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    // Add many relationship to albums
    public function albums()
    {
        return $this->hasMany('App\Models\Album');
    }

    // Add many relationship to photos
    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }
}
