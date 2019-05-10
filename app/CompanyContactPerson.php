<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyContactPerson extends Model
{
    protected $table = 'company_contact_person';
    protected $primaryKey = 'company_contact_personId';
    public $timestamps = false;
}
