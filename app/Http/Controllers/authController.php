<?php

namespace App\Http\Controllers;
use App\Models\code;

use App\Models\dat_act_code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class authController extends Controller
{
   
    public function register() {
        return view('register');
    }
/*
    public function processData(Request $request) {

        $validator = Validator::make($request->all(), [
            'body' => 'required',
            'Firstname' => 'required',
            'Lastname' => 'required',
            'email' => 'required|email|unique:users'
        ]);

        if($validator->fails()) {
            return redirect()->route('register')->withErrors($validator);
        }

        $dataActivation = dat_act_code::create([

            'Code' => $request->get('Code'),
            'Firstname' => $request->get('Firstname'),
            'Lastname' => $request->get('Lastname'),
            'email' => $request->get('email'),

        ]);

    }
    */
}
