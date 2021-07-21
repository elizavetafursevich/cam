<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use function PHPUnit\Framework\never;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->phone=$req->input('phone');
        $contact->subject=$req->input('subject');
        $contact->message=$req->input('message');


        $contact->save();

        return redirect()->route('contact')->with('success', 'Сообщение было отправлено!');
    }
    public function allData()
    {
        $contact = new Contact;

        return view('admin', ['data' => $contact->all()]);
    }

}
