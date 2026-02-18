<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback-form');
    }
    

    public function send(Request $request)
    {
       
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

         return 'Feedback sent!';
    }

}
