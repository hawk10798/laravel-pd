<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show(Request $request) 
    {
        return view('hello', [
            'name' => $request->input('name'),
            'colour' => $request->input('colour')
        ]);
    }
}
