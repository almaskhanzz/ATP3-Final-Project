<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $primaryKey = "doctorid";
    public $timestamps = false;
}
