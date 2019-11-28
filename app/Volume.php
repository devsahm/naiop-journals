<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    

    protected $guarded=[];


      public function issues(){

    	return $this->hasMany(Issue::class);
    }

}
