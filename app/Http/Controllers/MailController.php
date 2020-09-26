<?php

namespace App\Http\Controllers;

use App\Mail\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    function create() {
        return view('mails.create');
    }

    function sendMail(Request $request) {
        Log::debug($request->all());

        \App\Models\Mail::create(['user_id'=> Auth::user()->id]);

        \Mail::send(new Mail($request->all(), Auth::user()));
        return redirect()->route('home');
    }
}
