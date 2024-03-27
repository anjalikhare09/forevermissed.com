<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contactus');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'type_of_inquiry' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            're_enter_email' => 'required|email|same:email',
            'message_subject' => 'required',
            'message_details' => 'required',
        ]);

        // Send email
        Mail::to('your_email@example.com')->send(new ContactMail($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
