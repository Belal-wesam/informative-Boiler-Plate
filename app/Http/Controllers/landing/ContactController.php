<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('landing.pages.contact.index');
    }


    public function send_message(Request $request)
    {
        $data = [
            "name" => $request->form_name,
            "email" => $request->form_email,
            "phone" => $request->form_phone,
            "message" => $request->form_message,
            "subject" => $request->form_subject,
        ];
        $email = 'test@test.com';
        Mail::to($email)->send(new ContactMail($data));
        return http_response_code(200);
    }
}
