<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    public $timestamps = false;
    protected $table = 'tender';
    protected $primaryKey = 'tenderId';
}
