<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Friend;

class User extends Authenticatable
{
    use Notifiable;
    use Friend;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'gender', 'email', 'password', 'birth', 'number',    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() 
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRoles($roles) {
        return null !==$this->roles()->where('name',$roles)->first();
    }

    public function hasRole($role) {
        return null !==$this->roles()->where('name',$role)->first();
    }

    public function scopeName($query, $name) {
    	if ($name) {
    		return $query->where('name','like',"%$name%");
    	}
    }



    public function scopeEmail($query, $email) {
    	if ($email) {
    		return $query->where('email','like',"%$email%");
    	}
    }
}
