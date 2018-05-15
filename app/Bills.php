<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
   protected $table = "bills";
    public function bill_billdetail(){
    	return $this-> hasMany('App\BillDetail','id_bill','id');
    }
     public function bills_customer(){
    	return $this-> belongsTo('App\Customer','id_customer','id');
    }
}
