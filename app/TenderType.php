<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenderType extends Model
{
    public $timestamps = false;
    protected $table = 'tendertype';
    protected $primaryKey = 'tenderTypeId';
}
