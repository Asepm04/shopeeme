<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductTest extends TestCase
{
    // public function testInsert()
    // {
    //     $product = new Product();
    //     $product->id_product = 'SM0Z3';
    //     $product->name_product = 'gamis';
    //     $product->size = 'xl';
    //     $result = $product->save();

    //     self::assertTrue($result);
    // }

    // public function testDeleted()
    // {
    //     $product = Product::query()->where('id_product', '=' ,'SM0Z3');
    //     $product->name_product = 'gamis2';
    //     $result = $product->save();

    //     $result = DB::table('products')->where('id_product', '=', 'SM0Z3 ')->update(['name_product' => 'gamis1']);

    //     self::assertTrue($result);

    //     $result = Product::query()->where('id_product', '=' ,'SM0Z3')->delete();
    //     self::assertNotNull($result);


    // }

    public function testI()
    {
        $this->get('/update/2e3p')
        ->assertSeeText('0');

    }
}
