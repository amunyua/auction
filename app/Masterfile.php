<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterfile extends Model
{
    protected $fillable = array(
        'surname', 'firstname', 'middlename', 'id_passport', 'b_role', 'gender', 'email', 'user_role', 'reg_date'
    );

    public function UserRole(){
        return $this->belongsTo('App\UserRole');
    }
}
