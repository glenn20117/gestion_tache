<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterSubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',   //Pour pas avoir 2 abonnées dans la meme colonne
        ]);

        NewsletterSubscriber::create([
            'email' => $request->email, 
        ]);

        return redirect()->back()->with('success', 'Subscribe');
    }
}
