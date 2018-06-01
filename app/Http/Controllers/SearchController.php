<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class SearchController extends Controller
{
    public function getSearch(Request $req)
    {
        $product = Products::where('name','like','%'.$req->key.'%')
                            ->orwhere('unit_price',$req->key)
                            ->get();
        return view('page.search',compact('product'));
    }
}
