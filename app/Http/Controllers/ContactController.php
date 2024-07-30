<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Mail\ContactUs as MailContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|min:2|max:30',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput()->with('scrollTo', 'contact');
        }

        $user = ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        Mail::to($request->email)->send(new MailContactUs($user));

        return redirect()->back()->with('success', 'Mail Send Successfully!!!');
    }
}
