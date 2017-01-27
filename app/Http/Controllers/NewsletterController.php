<?php

namespace App\Http\Controllers;

use App\Newsletter;

use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    //zapisywanie adresu e-mail do bazy mailing
    public function store(Request $request) {

        $email = new Newsletter();
        $email->email = $request->get('email');
        $email->save();

        return redirect('/' . '#newsletter')->with('message', 'Twój adres został zapisany');

    }


//    public function save($email) {
//
//        $email->save();
//
//        return redirect('/' . '#newsletter')->with('message', 'Twój adres został zapisany');
//
//    }
}
