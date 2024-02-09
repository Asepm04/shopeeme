<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use App\Services\ProductServices;
use Illuminate\Validation\ValidationExceptions;
use Illuminate\Support\MessageBag;

class ProductController extends Controller
{

    private ProductServices $productservices;

    public function __construct(ProductServices $productservices)
    {
        $this->productservices = $productservices;
    }

    public function adProduct(Request $request)
    {
        try
        {
            $request->validate([
                'id'=>'required|max:20',
                'name'=>'required|max:200',
                'size'=>'required',
                'gambar'=>'required|image:jpg'
            ]);
            $this->productservices->addProduct($request);
            response('ok',Response::HTTP_OK);
            return redirect('/product');
        }
        catch(ValidationExceptions $validationexceptions)
        {
            return response($validationexceptions->errors(),Response::HTTP_BAD_REQUEST);
        }
    //    if (!EMPTY($request))
    //    {
    //     $this->productservices->addProduct($request);
    //     return "ok";
    //    }
    //    else{
    //     return "gagal";
    //    }

    }

    public function getData()
    {
        $data  = Product::get();
        return view('product.prod',['data'=>$data]);
    }
}
