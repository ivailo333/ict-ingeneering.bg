<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        $title = "ИКТ Инженеринг";
        $text_header = "Абониране";
        $paragraph = "";
        return view('pages.newsletter', compact('title', 'text_header', 'paragraph'));
    }
    public function store(Request $request)
    {
        if (!Newsletter::isSubscribed($request->email)) {
            Newsletter::subscribe($request->email);
            return redirect('/')->with('success', 'Thanks For Subscribe');
        }
        return redirect('/')->with('failure', 'Sorry! You have already subscribed ');
    }
}
