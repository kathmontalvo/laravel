<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index')->with(compact('products')); //listado
    }

    public function create()
    {
        return view('admin.products.create'); //formulario de registro
    }

    public function store(Request $request)
    {
        //Validar
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'La descripcion corta es un campo obligatorio.',
            'description.max' => 'La descripcion corta solo admite hasta 200 caracteres.',
            'price.min' => 'No se admiten valores negativos.',
            'price.numeric' => 'Ingrese un precio valido.',
            'price.required' => 'Es obligatorio definir un precio para el producto.'
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);
         //registrar el nuevo producto en la bd
         //dd($request->all());
         $products = new Product();
         $products->name= $request->input('name');
         $products->description= $request->input('description');
         $products->price= $request->input('price');
         $products->long_description= $request->input('long_description');
         $products->save();//Insert en tabla productos

         return redirect('/admin/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product')); //formulario de registro
    }

    public function update(Request $request, $id)
    {
        //Validar
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el producto.',
            'name.min' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'La descripcion corta es un campo obligatorio.',
            'description.max' => 'La descripcion corta solo admite hasta 200 caracteres.',
            'price.min' => 'No se admiten valores negativos.',
            'price.numeric' => 'Ingrese un precio valido.',
            'price.required' => 'Es obligatorio definir un precio para el producto.'
        ];
        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:200',
            'price' => 'required|numeric|min:0'
        ];
        $this->validate($request, $rules, $messages);
         //registrar el nuevo producto en la bd
         //dd($request->all());
         $products = Product::find($id);
         $products->name= $request->input('name');
         $products->description= $request->input('description');
         $products->price= $request->input('price');
         $products->long_description= $request->input('long_description');
         $products->save();//Insert en tabla productos

         return redirect('/admin/products');
    }

    public function destroy($id)
    {
         $products = Product::find($id);
         $products->delete();//Delete

         return back();
    }

    

}
