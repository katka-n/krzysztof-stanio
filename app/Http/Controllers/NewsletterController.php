<?php

namespace App\Http\Controllers;

use App\Newsletter;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class NewsletterController extends Controller
{
    public function store(Request $request)
    {

        $email = new Newsletter();
        $email->email = $request->get('email');
        $email->save();

        return redirect::back()->with('message', 'Twój adres został zapisany');
    }
}
