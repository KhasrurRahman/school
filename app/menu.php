<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    public function submenu(){
        return $this->hasMany(submenu::class);
    }
}
