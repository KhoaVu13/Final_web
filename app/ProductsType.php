<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsType extends Model
{
    protected $table = "type_products";
    public function product_type(){
    	return $this->hasMany('App\Products','id_type','id') ;
    }
}
