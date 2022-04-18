<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\http\model;

class ProductController extends Controller
{
    public function register(){
        return view('product.register');

    }
    public function store(Request $request){
$product=new product();
$product->nme=$request->name;
$product->unit=$request->unit;
$product->price=$request->price;
$product->quntity=$request->quntity;
$is_successed=$product::save();
if($is_sccessed)
echo'recored successfully';
else
echo 'some thing wrong try again';

}
}