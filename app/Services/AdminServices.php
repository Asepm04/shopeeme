<?php 

namespace App\Services;
use Illuminate\Http\Request;

interface AdminServices
{
    //public function login($request):bool;

    public function login(string $email,string $password):bool;
}