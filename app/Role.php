<?php

namespace vzla1;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   public function users(){
        return $this->belongsToMany('vzla1\Role');
    }
}
