<?php

namespace App\Services\Imp;
use App\Services\AdminServices;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ImplAdmin implements AdminServices
{
    // public function login($request):bool
    // {
    //    return Auth::attempt(
    //         ['email' => $request->input('email'),
    //          'password' => $request->input('password')
    //         ]);
    // }

    public function login(string $email,string $password):bool
    {
        return Auth::attempt(
            ['email' => $email,
             'password' => $password
            ]);
    }

};
