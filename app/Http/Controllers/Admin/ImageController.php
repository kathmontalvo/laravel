<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Product;
use App\ProductImage;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $images = $product->images;
        return view('admin.products.images.index')->with(compact('product','images'));
    }

    public function store(Request $request, $id){
        //Guardar imagenes
        $file = $request->file('photo');
        $path = public_path().'/images/products';
        $fileName = uniqid().$file->getClientOriginalName();
        $file->move($path, $fileName);
        //Crear 1 registro por imagenes
        $productImage = new ProductImage();
        $productImage -> image = $fileName;
        // $productImage
        $productImage -> product_id = $id;
        $productImage -> save(); //INSERT

        return back();
    }

    public function destroy(){
        
    }
}
