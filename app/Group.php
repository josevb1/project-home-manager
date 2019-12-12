<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $fillable = [
        'name', 'email', 'notes',    
    ];

    protected $table = 'group';
}
