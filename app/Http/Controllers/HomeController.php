<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
        //----for http://127.0.0.1:8000/?param1=hello it will echo hello----
        // $param1 = $request->query('param1');
        // echo $param1;
    }

    public function pageOne()
    {
        return view('page-one');
    }

    public function pageTwo()
    {
        return view('page-two');
    }



}
