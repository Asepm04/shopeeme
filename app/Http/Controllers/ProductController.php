<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private Product $product;

    public function __construct($product)
    {
        $product = $this->app->make(Product::class);
    }

//    public function input()
//    {
//      $product = new Product();
//      $product->input();
//      redirect('/testinput',['massage'=>'success']);
//    }

   public function update($id)
   {
    // $product = new Product();
    $this->product->updated($id);
    redirect('/testinput',['massage'=>'success']);
   }
}
