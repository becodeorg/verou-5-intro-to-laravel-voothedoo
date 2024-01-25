<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function viewPageOne()
    {
        return view('page-one');
    }

    public function viewPageTwo()
    {
        return view('page-two');
    }

}
