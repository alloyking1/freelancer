<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'country','state','gender','ref','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function investments() {
        return $this->hasMany('App\Investment');
    }

    public function user_investment(){
        return $this->hasOne('App\Investment');
    }

    //withdraw
    public function user_withdraw_request(){
        return $this->hasOne('App\Withdraw');
    }
}
