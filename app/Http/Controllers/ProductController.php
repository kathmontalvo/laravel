<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function show($id){
        $product = Product::find($id);
        $images = $product->images;
        $imagesLeft = collect();
        $imagesRight = collect();
        foreach ($images as $key => $image) {
            if ($key%2==0)
            $imagesLeft->push($image);
            else
            $imagesRight->push($image);
        }

        $rooms = $product->rooms;

        return view('products.show')->with(compact('product', 'imagesLeft', 'imagesRight', 'rooms'));
    }
}
