<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contacts()
    {
        return view('guest.contacts.form');


    }

    public function sendContactsForm(Request $request)
    {
        $valData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:50|max:500'
        ]);

        //return (new ContactFormMail($valData))->render();
        Mail::to('admin@example.com')->send(new ContactFormMail($valData));

        return redirect()->back()->with('message', 'thanks for your message');
    }
}
