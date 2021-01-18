<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\contact;

class SendEmailController extends Controller
{
    public function sendemail(Request $request)
    {
    	$this->validate($request,[
			'name'	=> 'required',
			'lastname'	=> 'required',
    		'email'	=> 'required|email',
    		'phone'	=> 'required',
    		'message' => 'required'
    	]); 

    	$data = array(
			'name'	=>	$request->name,
			'lastname'	=>	$request->lastname,
    		'email'	=>	$request->email,
    		'phone'	=>	$request->phone,
    		'message'	=>	$request->message
    	);
        //var_dump($data);
       // exit();

    	Mail::to('sattapong.torton@gmail.com')->send(new SendMail($data));

    	$contact = new contact;
		$contact->name = $request->name;
		$contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

    	return back()->with('success', 'Thanks for contacting us!');
    }
}
