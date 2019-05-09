<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $title = "ИКТ Инженеринг";
        $text_header = "За контакти";
        $paragraph = "";
        return view('contact.contact_form', compact('title', 'text_header', 'paragraph'));
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
            'Terms_Conditions' => 'required',
            'Privacy_Policy' => 'required',
        ]);

        $data = array('name' => $request->name, 'email' => $request->email, 'message' => $request->message);

        Mail::to('ivailo333@abv.bg')->send(new ContactEmail($data));
        return back()->with('succes', 'Thanks for contacting us!');
    }
}
