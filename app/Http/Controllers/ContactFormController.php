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
        return redirect::back()->with('message', 'Dziękuję za wiadomość');
    }
}
