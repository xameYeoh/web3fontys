<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller

{
    public function send()
    {
        Mail::send(['mail'],['name','petrolheads blog'], function ($message){
            $message->to('petrolheadssite@gmail.com','To petrolheads')->subject('Test email');
            $message->from('petrolheadssite@gmail.com', 'Petrolheads');
        });
    }
}
