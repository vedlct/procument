<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table='status';
    protected $primaryKey='statusId';
    public $timestamps=false;
}
