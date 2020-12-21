<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {   
        Mail::send('emails.sendmail',[
            'msg' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject
        ], function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
            $mail->to("developer7277@gmail.com")->subject('Contact Us Message');
        });
        return view('frontend.contact');
    }
}
