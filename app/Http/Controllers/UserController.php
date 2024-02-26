<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function method_1()
    {
        return view("display/user_info");
    }

    public function method_2($id)
    {
        return view("display/user_info", ["id" => $id]);
    }
}
