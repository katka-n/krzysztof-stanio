<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\MyTestMail;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('kontakt');
    }
}