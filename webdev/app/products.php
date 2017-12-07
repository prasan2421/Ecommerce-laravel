<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'price',
        'description',
        'image',
        'category_id'


    ];

    public function category()
    {
        return $this->belongsTo('App\category');
    }

    public function checkout(){
        return $this->belongsTo('App\checkout');
    }

//    public function ordersFresh(){
//        return $this->belongsToMany('App\ordersFresh');
//    }
}
