<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    public function staff(){

        return $this->belongsTo('App\Staff');
    }

    public function cartitems(){
        
        return $this->hasOne(CartItem::class);
    }

}
