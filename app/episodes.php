<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class episodes extends Model
{
    public function movies(){
        return $this-> hasOne('App\movies');
    }
}
