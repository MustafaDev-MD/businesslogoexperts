<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\Contact;
use App\Mail\ContactMail;

class ContactFormController extends Controller
{
    public function submitContact(Request $request)
    {
        // Honeypot
        if ($request->filled('website')) {
            return response()->json([
                'status' => 'error',
                'message' => 'Spam detected'
            ], 422);
        }

        // Time protection
        if (
            !$request->filled('form_time') ||
            (time() - $request->input('form_time') < 3)
        ) {
            return response()->json([
                'status' => 'error',
                'message' => 'Too fast'
            ], 422);
        }

        // Validation
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'nullable|string|max:255',
            'email'      => 'required|email:rfc,dns',
            'subject'    => 'required|string|max:255',
            'message'    => 'required|string',
        ]);

        // Save DB
        Contact::create([
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'] ?? null,
            'email'      => $validated['email'],
            'subject'    => $validated['subject'],
            'message'    => $validated['message'],
        ]);

        // Send Email
        try {

            Mail::to(config('mail.admin_address'))->send(
                new ContactMail([
                    'first_name' => $validated['first_name'],
                    'last_name'  => $validated['last_name'] ?? '',
                    'email'      => $validated['email'],
                    'subject'    => $validated['subject'],
                    'message'    => $validated['message'],
                ])
            );

        } catch (\Exception $e) {

            Log::error('Contact mail failed: ' . $e->getMessage());
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully!'
        ]);
    }
}