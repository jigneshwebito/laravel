<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{


    public function create()
    {
        return view('layouts.contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
        //   'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
        //   'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content,
          'phone' => $request->phone,
          'select' => $request->select
        ];



        $contact = new Contact;

        $contact->username = $request->name;
        $contact->email = $request->email;
        $contact->service = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->content;
        $contact->save();

       // dd($data['email']);
        //dd($data['subject']);

        $email = $request->email;
        $uname = $request->name;
        $phone = $request->phone;
        $service = $request->select;
        $subject = $request->content;
        // Mail::send('layouts.email-template', $data, function($message) use($subject){

        //     $message->to(env('WEBITO_EMAIL'), 'Webito Infotech')->subject
        //     ('Welcome to Webito Infotech');
        //  $message->from(env('SOCIAL_EMAIL'),'Webito Infotech');
        //   });

        //   Mail::send('layouts.email-user', $data, function($message) use($email, $uname){
        //     $message->to($email,$uname)->subject
        //     ('Welcome to Webito Infotech');
        //  $message->from(env('SOCIAL_EMAIL'),'Webito Infotech');

        //   });
        return redirect('/');

        // return back()->with(['message' => 'Email successfully sent!']);
    }
}
