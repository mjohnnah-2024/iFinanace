<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //

    public function store(Request $request)
    {
        $data = $request->validate([            
            'email' => 'required|email',
            
        ]);

        //defer(fn () => Metrics::reportOrder($order));
 

     defer(fn ()=>   Mail::to('admin@ifinancepng.com')->send(new SubscribeMail([        
            'email' => $data['email'],
            
        ])));

        return (" <hr /> <div class='text-success text-center h5'> <strong>Signup Successful! </strong></div> <hr />");
           

       
    }
}
