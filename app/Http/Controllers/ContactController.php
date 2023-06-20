<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\Contact as ContactMailer;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('front.contact');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'firstname' => 'required',
            'email' => 'required',
            'topic' => 'required',
            'message' => 'required|min:5'
        ]);

        Contact::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'topic' => $request->topic,
            'message' => $request->message
        ]);

        Mail::to('pierreedouard.tessier@gmail.com')
            ->queue(new ContactMailer($request->except('_token')));

        return redirect()->back()->with('message', 'Votre message a bien été envoyé');


    }
}
