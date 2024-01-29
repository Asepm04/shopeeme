<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Suport\Facades\Auth;

class Admin extends Model
{
    use HasFactory;

    public function sysLogin($request)
    {
        Auth::attempt(
            ['email' => $request->email,
             'password' => $request->password
            ]);
    }
}
