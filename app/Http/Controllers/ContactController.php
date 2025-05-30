<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::send([], [], function ($message) use ($validated) {
            $message->to('robintijou05@gmail.com')
                ->subject('Nouveau message de contact')
                ->setBody(
                    "Nom: {$validated['name']}\nEmail: {$validated['email']}\n\nMessage:\n{$validated['message']}",
                    'text/plain'
                )
                ->replyTo($validated['email']);
        });

        return back()->with('success', 'Message envoyé avec succès !');
    }
}
