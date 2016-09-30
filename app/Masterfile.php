<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterfile extends Model
{
    protected $fillable = array(
        'surname', 'firstname', 'middlename', 'id_passport',
        'b_role', 'gender', 'email', 'customer_type_id', 'reg_date',
        'company_name'
    );

    public function customerType(){
        return $this->belongsTo('App\CustomerType');
    }
}
