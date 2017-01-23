<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\MyTestMail;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller

{

    public function get()
    {
        return view('index-4');
    }


    public function send(ContactFormRequest $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'min:10'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bodyMessage' => $request->message,
        );

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('katarzynan@gmail.com');
            $message->subject('Nowa wiadomość');
        });

        return redirect('contact')->with('message', 'Dziękuję za wiadomość');


    }
}


