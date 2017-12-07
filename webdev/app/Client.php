<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;

class Client extends Authenticatable
{
    use Searchable;
    use Notifiable;
    public function searchableAs()
    {
        return 'Client';
    }

    protected $guard='clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'name', 'email', 'password','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function checkout(){
        return $this->hasMany('App\checkout');
    }



}
