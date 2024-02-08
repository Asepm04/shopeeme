<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminServices;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\MessageBag;



class UserController extends Controller
{
    private AdminServices $adminservices;

    public function __construct(AdminServices $adminservices) 
    {
        $this->adminservices = $adminservices;
    }

    public function AddUser(Request $request)
    {
        $message = $request->validate([
            'name'=>'required|max:200',
            'email'=>'required|email|',
            'password'=>['min:6','max:20']
        ]);
        if($this->adminservices->add($request))
        {
            return redirect('/');
        }
        else
        {
            // $errors = $message->errors();
            // return redirect('/ad',['errors'=>]);
            return redirect('/ad');
        }
    }

    public function uploadgambar(Request $request)
    {
        if(!EMPTY($request))
        {
            $this->adminservices->upload($request);
            return redirect('/uploadgambar');
        }
    }
}
