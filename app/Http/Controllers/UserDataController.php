<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class UserDataController extends Controller{
    
        public function show($id){
            $product = Product::find($id);
            $names = $product->names;
    
            return view('userdata.show')->with(compact('product'));
        }
    


}