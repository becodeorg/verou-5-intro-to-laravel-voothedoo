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

    public function formPage()
    {
        return view ('form');
    }

    public function submitForm(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $responseFeedback = "Thank you $name, form has been submited!";

        if (empty($name)) {
            $responseFeedback = 'Name can\'t be empty';
        } elseif (!preg_match("/^[A-z]+$/", $name)) {
            $responseFeedback = 'Name should only contain alphabetical characters';
        }

        if(empty($age)) {
            $responseFeedback = 'Age field can\'t be empty';
        } elseif(!preg_match("/^[0-9]+$/", $age)){
            $responseFeedback = 'Age should only contain numbers';
        }

        return view ('confirm', ['responseFeedback'=>$responseFeedback]);
    }

}
