<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::to('admin@ifinancepng.com')->send(new ContactMail([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
        ]));

        return (" <hr /> <div class='text-success text-center h2'> <strong>Message Send Successfully! </strong></div> <hr />
           <div class='text-center'>  Hi {$data['name']}, thank you for contacting us. </div>
          <p class='text-center'> We will get in touch with you shortly.</p> <br> <br> <hr />");

       
    }
}
