<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $name = ucfirst($name);
        $age = $request->input('age');

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

        if(empty($responseFeedback)){
            User::create([
                'name'=> $name,
                'age'=> $age,
            ]);
        }

        $responseFeedback = "Thank you $name, form has been submited!";
        return view ('confirm', ['responseFeedback'=>$responseFeedback]);
    }
}
