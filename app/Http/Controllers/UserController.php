<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminServices;
use App\Models\User;



class UserController extends Controller
{
    private AdminServices $adminservices;

    public function __construct(AdminServices $adminservices)
    {
        $this->adminservices = $adminservices;
    }

    public function AddUser(Request $request)
    {
        if($this->adminservices->add($request))
        {
            return redirect('/');
        }
        else
        {
            return 'gagal';
        }
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // if( $user->save())
        // {
        //     return redirect('/');
        // }
    }
}
