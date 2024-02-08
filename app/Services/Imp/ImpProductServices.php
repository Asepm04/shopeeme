<?php

namespace App\Services\Imp;
use App\Services\ProductServices;
use App\Models\Product;
use Illuminate\Http\Request;

class ImpProductServices implements ProductServices
{
    public function addProduct($request)
    {
        $namefile = $request->gambar->getClientOriginalName();
        $file = time().$namefile;
        $request->gambar->move(public_path().'/img',$file);


        $product = new Product();
        $product->id_product = uniqid();
        $product->name_product = $request->name;
        $product->size = $request->size;
        $product->gambar = $file;
        $product->save();

        
    }

}