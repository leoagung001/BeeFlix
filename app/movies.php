<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    public function genres(){
        return $this-> hasOne('App\genres', 'id', 'genre_id');
    }

    public function episodes(){
        return $this-> hasMany('App\episodes');
    }
}
