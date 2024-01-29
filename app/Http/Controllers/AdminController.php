<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Admin;
use App\Services\AdminServices;
use Illuminate\Support\Facades\Auth;

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

    // public function syslog(Request $request)
    // {
    //     $result = $this->adminservices->login($request);
    //     return dd($result);
        
    //     if($result)
    //     {
    //         return redirect('home');
    //     }
    //     else{
    //         return "gagal";
    //     }
    // }

    public function syslog(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $result = $this->adminservices->login($email,$password);
        return dd($request->all(),$result);
    }

    public function register()
    {
        return view('admin.adminRegister');
    }
}
