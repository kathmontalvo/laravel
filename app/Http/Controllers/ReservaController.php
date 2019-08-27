<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ReservaController extends Controller
{
    public function show($id){
        $product = Product::find($id);
        

        return view('reservas.show')->with(compact('product'));
    }
}

