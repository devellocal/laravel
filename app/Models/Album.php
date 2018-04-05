<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file', 'title', 'body',
    ];


    // Add belongs to relationship
    public function user()
    {
        return $this->belongsTo('App\Models\User');      
    }
}
