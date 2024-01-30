<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Services\AdminServices;
use Session;


class AdminController extends Controller
{
   private AdminServices $adminservices;

    public function __construct(AdminServices $adminservices)
    {
       $this->adminservices = $adminservices;
    }

    public function login()
    {
        return view('admin.adminLogin');
    }

    public function syslog(Request $request)
    {
    //     $result = $this->adminservices->login($request);
    //    return dd($result);

          $result = Auth::attempt(
                    ['email' => $request->input('email'), 
                    'password' => $request->input('password')]);
                    return dd($result);
        
        if($result)
        {
            Session::put(['user'=>$email]);
            return redirect('/home');
        }
        else{
            return "gagal";
        }
    }

    // public function syslog(Request $request)
    // {
    //     $email = $request->input('email');
    //     $password = bcrypt($request->input('password'));

    //     $result = $this->adminservices->login($email,$password);
    //     if($result)
    //     {
    //         return redirect('/');
    //     }
    //     else{return 'ggal';}
    // }

    public function register()
    {
        return view('admin.adminRegister');
    }
}
