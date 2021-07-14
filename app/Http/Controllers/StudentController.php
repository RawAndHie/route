<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function create(){
        return view('student');
    }

    function store(Request  $request){
        $validated = $request->validate(
            [
                'rollNumber' => 'required|min:10|string',
                'firstName' => 'required|string',
                'lastName' => 'required|string',
                'phone' => 'required|string'

            ]);
    }
}
