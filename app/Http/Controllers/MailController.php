<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\pageController;

class MailController extends Controller
{

    public function index()
    {
        /*
        $data = [
            'subject'=>'Stellar',
            'title'=> 'title',
            'body'=> 'Mcrossenbergh Tubaga'
        ];
        try
        {
            Mail::to('tubagamcrossenbergh@gmail.com')->send(new MailNotify($data));
            return response()->json(['Account password was sent to your gmail']);

        } catch (Exception $th)
        {
            return response()->json(['Something went wrong']);
        }
        */
    }

    public function sendMail() {

        Mail::to('fake@gmail.com')->send(new SignUp());
        return view('register');
    }
}
