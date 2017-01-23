<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('index-4');
    }


    public function store(ContactFormRequest $request)
    {

        mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'user_message' => $request->get('message')

            ), function ($message) {
                $message->from('katarzynan@gmail.com');
                $message->to('katarzynan@gmail.com', 'Admin')->subject('Formularz kontaktowy z krzysztof-stanio.pl');
            });

        return redirect('kontakt')->with('message', 'Dziękuję za wiadomość');


    }
}
