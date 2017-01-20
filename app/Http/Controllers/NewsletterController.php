<?php

namespace App\Http\Controllers;

use App\Newsletter;

use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    public function store(Request $request)
    {

        $email = new Newsletter();
        $email->email = $request->get('email');
        $email->save();
        return redirect()->route('index');
    }
}
