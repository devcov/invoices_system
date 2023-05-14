<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    public $timestamps = false;




    public function section()
   {
   return $this->belongsTo('App\Models\sections');
   }

}


