<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\ProductServices;

class ProductController extends Controller
{

    private ProductServices $productservices;

    public function __construct(ProductServices $productservices)
    {
        $this->productservices = $productservices;
    }

    public function adProduct(Request $request)
    {
       if (!EMPTY($request))
       {
        $this->productservices->addProduct($request);
        return "ok";
       }
       else{
        return "gagal";
       }
    }

    public function testing()
    {
        $data  = Product::get();
        return view('product.prod',['data'=>$data]);
    }
}
