<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    protected $fillable=['addressline','city','zip','country'];

    public function client(){
        return $this->belongsTo('App\Client','client_id','id');
    }

    public function products(){
        return $this->hasMany('App\products');
    }
}
