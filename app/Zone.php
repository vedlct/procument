<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    public $timestamps = false;
    protected $table = 'zone';
    protected $primaryKey = 'zoneId';
}
