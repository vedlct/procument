<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    //

    protected $table='tender';
    protected $primaryKey='tenderId';
    public $timestamps=false;
}
