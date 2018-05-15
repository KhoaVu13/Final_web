<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
     protected $table = "products";
    public function product_productype(){
    	return $this->belongsTo('App\ProductsType','id_type','id') ;
    }
    public function product_bill_details()
    {
    	return $this->hasMany('App\BillDetail','id_product','id');
    }
    
}
