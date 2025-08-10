<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailContacts;

class EmailContactController extends Controller
{
    public function sendEmailContact(Request $request)
    {
        $request->validate([
            'full_name' => 'nullable|string',
            'email_address' => 'required|email',
            'subject' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        // Préparer les données pour l'email
        $data = [
            'full_name' => $request->full_name,
            'email_address' => $request->email_address,
            'subject' => $request->subject,
            'content' => $request->content,
        ];

        // Vérifier si les champs full_name, subject, et content sont tous nuls
        if (is_null($request->full_name) && is_null($request->subject) && is_null($request->content)) {
            // Vérifier si l'adresse email existe déjà dans la base de données
            $emailAddress = $request->email_address;
            $exists = EmailContacts::where('email_address', $emailAddress)->exists();

            if ($exists) {
                // Vérifiez que full_name, subject, et content ne sont pas nuls avant de retourner l'erreur
                if (!is_null($request->full_name) && !is_null($request->subject) && !is_null($request->content)) {
                    return redirect()->back()->with([
                        'error' => 'This email address has already been added to the newsletter.',
                    ]);
                }
            }

            // Ajouter l'email à la base de données
            $newsletterMail = new EmailContacts();
            $newsletterMail->email_address = $emailAddress;
            $newsletterMail->save();

            // Préparer les données pour le mail de collecte d'email
            $newsletterData = [
                'email_address' => $emailAddress,
            ];

            // Envoyer un email avec la vue spécifique pour les newsletters
            Mail::send('emails.newsletter', $newsletterData, function ($message) use ($newsletterData) {
                $recipientEmail = 'contact@thesunwork.com';
                $message->to($recipientEmail)
                    ->subject('Newsletter Subscription')
                    ->from($newsletterData['email_address'], 'Newsletter Subscription');
            });

            return redirect()->back()->with([
                'success' => 'Email address added to newsletter',
            ]);
        } else {
            // Si les champs ne sont pas tous nuls, sauvegarder les données dans la base de données
            $mail = new EmailContacts();
            $mail->full_name = $request->full_name;
            $mail->email_address = $request->email_address;
            $mail->subject = $request->subject;
            $mail->content = $request->content;
            $mail->save();

            // Envoyer un email avec la vue originale
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $recipientEmail = 'contact@thesunwork.com';
                $senderName = "{$data['full_name']} • From SUN WORK";

                $subject = $data['subject'] ?? '';

                $message->to($recipientEmail)
                    ->subject($subject)
                    ->from($data['email_address'], $senderName);
            });

            return redirect()->back()->with(['message' => 'Email successfully sent!']);
        }
    }
}
