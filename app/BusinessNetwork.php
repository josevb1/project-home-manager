<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessNetwork extends Model
{
    protected $fillable = ['to','from','status','contact_role'];

}
