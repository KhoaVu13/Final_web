<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    public function billdetail_products()
    {
    	return $this->belongsTo('App\Products','id_product','id');
	}
	
	public function billdetail_bill(){
		return $this->belongsTo('App\Bills','id_bill','id');
	}
}

