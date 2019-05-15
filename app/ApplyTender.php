<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyTender extends Model
{
    protected $table = 'apply';
    protected $primaryKey = 'applyId';
    public $timestamps = false;
}
