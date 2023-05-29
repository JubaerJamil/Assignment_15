<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller


// Task 6: Single Action Controller

// Answer:

{

    public function __invoke(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:20',
        ]);

        return back()->withSuccess('success', 'Thank you for your message. We will get back to you soon!');
    }



}
