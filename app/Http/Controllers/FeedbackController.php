<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.feedbackform');
    }

    public function send(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // Redirect to success page
        return redirect('/feedback/success')->with('success', 'Feedback submitted successfully!');
    }
}
