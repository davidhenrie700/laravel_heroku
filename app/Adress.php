<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $table = 'adresses';

    public function user ()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

}
