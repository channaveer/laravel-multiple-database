<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mysql';
    
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
