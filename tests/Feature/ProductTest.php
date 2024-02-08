<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Models\Product;
use App\Services\ProductServices;

class ProductTest extends TestCase
{
    private ProductServices $ProductServices;

    public function setUp():void
    {
        parent::setUp();
        $this->ProductServices = $this->app->make(ProductServices::class);
    }

  
    public function testAddproduct()
    {
        $data =['name'=>'',
                'size'=>'xl',
                'gambar'=>'gambar.jpg'];

        $rules = ['name'=>'required|max:200',
                  'size'=>'required|max:5',
                  'gambar'=>'required|max:200'];

        $validator = Validator::make($data,$rules);
        $message = $validator->errors();

        self::assertFalse($validator->passes());
        log::info($message->toJson(JSON_PRETTY_PRINT));

    }

    public function testAdd()
    {
        $product = new Product();
        $product->id_product = 123;
        $product->name_product = 'distro';
        $product->size = 'xxl';
        $product->gambar = 'gambar.jpg';
        
        self::assertNotNull($product->save());

    }
}
