<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }
}
