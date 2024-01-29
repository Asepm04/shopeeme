<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $table        = 'products';
    protected $primarykey   = 'id_product';
    protected $keytype      = 'string';
    public    $incrementing = true;
    public    $timestamps   = true;

    public function input()
    {
        $input = new Product();
        $input->id_product = '2e3p9';
        $input->name_product = 'celana';
        $input->size = 'L';
        $input->save();
    }

    public function updated($id)
    {
        $input =DB::table('Product')->where('id_product','=',$id)
                ->update(['size'=>' XXL']);

       
    }
}
