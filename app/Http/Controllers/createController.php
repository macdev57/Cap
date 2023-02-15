<?php

namespace App\Http\Controllers;
//added
use App\Models\mailer;
use App\Models\Article;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//end added

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

//use model is articles

class createController extends Controller
{
    public function create() {
        return view('create');
    }

    //harness data form(argument)
    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]); 

        if($validator->fails()) {
            return redirect()->route('create')->withErrors($validator);
        }

        //save registered data to database
        Article::create([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'first' => $request->get('first'),
            'middle' => $request->get('middle'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
            
            
            
        ]);
        
        //send data to maitrap
        try
        {
            Mail::to('tubagamcrossenbergh@gmail.com')->send(new MailNotify($request));
            return response()->json('Account Code was sent to your mail. Please check your inbox');
            

        } catch (Exception $th)
        {
            return response()->json(['Something went wrong']);
            
        }

        //after registering data return to signin.blade.php page
        return redirect()->route('signin')->withErrors($validator);
    }

    public function signin() {
        return view('signin');
    }

    public function authenticate() {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'pass' => 'required'
        ]); 

        if($validator->fails()) {
            return redirect()->route('signin')->withErrors($validator);
        }

        //authenticate credenstials
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)) {
            //this area send to the page after successfully logging in
            
            return redirect()->route('pagecontent.index')->with('success', 'You are now signed in');
            
            return redirect()->route('pagecontent.index')->withErrors('Invalid email and password');
            
            
        }

    }

}
