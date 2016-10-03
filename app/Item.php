<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function auctions(){
        $this->hasMany('App\Auction');
    }
}
