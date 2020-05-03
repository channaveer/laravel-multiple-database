<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mysql2';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
