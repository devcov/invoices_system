<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    //

    protected $table = 'sections';


    protected $fillable = [
        'section_name',
         'description',
         'Created_by',
    ];


    protected $hidden = [

    ];


   // protected $casts = [

    //];

    public $timestamps = false;

   // protected $softDelete = false;

   
}
