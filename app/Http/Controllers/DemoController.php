<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function test(Request $request)
    {
        return "wwws w";
        //return "<pre>" . print_r($request, true) . "<pre>";
    }


}
