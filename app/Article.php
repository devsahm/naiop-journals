<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

      protected $guarded=[];


      
     public function issues()
    {
        return $this->belongsToMany(Issue::class);
    }
}
