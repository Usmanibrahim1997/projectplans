<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationMail;

class InvitationController extends Controller
{

    public function showInviteForm()
    {
        return view('emails.invite-form');
    }

    public function sendInvite(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $email = $request->input('email');

        Mail::to($email)->send(new InvitationMail());

        return redirect()->back()->with('success', 'Invitation sent successfully!');
    }

}
