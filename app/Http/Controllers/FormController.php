<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
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
