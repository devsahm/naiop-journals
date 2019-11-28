<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
   protected $guarded=[];

    public function articles()
    {
    	return $this->belongsToMany(Article::class);
    }
}
