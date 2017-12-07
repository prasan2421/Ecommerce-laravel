<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordersFresh extends Model
{
    protected $fillable=['client_id','client_name','qty','total'];

    public function products(){
        return $this->belongsToMany('App\products');
    }
}
