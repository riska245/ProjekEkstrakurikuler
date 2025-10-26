<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($request->all());

        // Kirim email ke admin (HTML view)
        Mail::send('emails.kontak-admin', [
            'name' => $contact->name,
            'email' => $contact->email,
            'messageBody' => $contact->message,
        ], function ($message) use ($contact) {
            $message->to('rivencakep@gmail.com')
                ->subject('Pesan Baru dari Form Kontak');
        });

        // Kirim balasan otomatis ke pengirim
        Mail::send('emails.kontak-reply', [
            'name' => $contact->name,
        ], function ($message) use ($contact) {
            $message->to($contact->email)
                ->subject('Terima Kasih Telah Menghubungi Kami');
        });

        return response()->json(['success' => true, 'message' => 'Pesan berhasil dikirim.']);
    }
}
