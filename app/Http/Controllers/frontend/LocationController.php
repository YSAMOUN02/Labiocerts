<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LocationController extends Controller
{
    public function location()
    {
        return view('frontend.location');
    }

    // Contact form: sends an email only, nothing is saved to the database.
    public function contact_send(Request $request)
    {
        // Honeypot: bots fill hidden fields, people don't.
        if ($request->filled('website')) {
            return redirect('/location')->with('contact_success', true);
        }

        $data = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email:rfc', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        // No line breaks allowed in values that end up in mail headers.
        $data['name']    = trim(preg_replace('/[\r\n]+/', ' ', $data['name']));
        $data['subject'] = trim(preg_replace('/[\r\n]+/', ' ', $data['subject']));

        try {
            $to = optional(WebsiteInfo::first())->quote_reciever ?: 'info@labiocert.com';
            Mail::to($to)->send(new ContactMail($data));
        } catch (\Throwable $e) {
            Log::error('Contact form mail failed: ' . $e->getMessage());
            return redirect('/location')
                ->withInput()
                ->with('contact_error', 'Sorry, your message could not be sent. Please try again later or email us directly.');
        }

        return redirect('/location')->with('contact_success', true);
    }
}
