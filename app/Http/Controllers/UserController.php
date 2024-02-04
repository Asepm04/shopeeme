<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminServices;
use App\Models\User;
use Illuminate\Support\Str;



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
