<?php

namespace App\Services\Imp;
use App\Services\AdminServices;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ImplAdmin implements AdminServices
{
    // public function login($request)
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

    public function add($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return $user;
    }

};
