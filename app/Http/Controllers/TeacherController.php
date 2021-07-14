<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function create(){
        return view('teacher');
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
