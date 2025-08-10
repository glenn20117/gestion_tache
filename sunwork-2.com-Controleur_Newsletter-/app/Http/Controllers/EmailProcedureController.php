<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailProcedures;

class EmailProcedureController extends Controller
{
    public function sendEmailProcedure(Request $request)
    {
        $request->validate([
            'city' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'nullable',
            'email_address' => 'required|email',
            'service' => 'required',
        ]);

        $data = [
            'city' => $request->city,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email_address' => $request->email_address,
            'service' => $request->service,
        ];

        $mail = new EmailProcedures();
        $mail->city = $request->city;
        $mail->first_name = $request->first_name;
        $mail->last_name = $request->last_name;
        $mail->phone_number = $request->phone_number;
        $mail->email_address = $request->email_address;
        $mail->service = $request->service;

        $mail->save();

        $recipientEmail = 'procedure@thesunwork.com';

        Mail::send('emails.procedure', $data, function ($message) use ($data, $recipientEmail) {
            $senderName = "{$data['first_name']} {$data['last_name']} • From SUN WORK";
            $message->to($recipientEmail)
                ->subject("Request procedure for {$data['service']}")
                ->from($data['email_address'], $senderName);
        });

        return redirect()->back()->with(['success' => 'Email successfully sent!']);
    }
}
