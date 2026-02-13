<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Models\ContactUs;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $contacts = ContactUs::all();
    return view('admin.admin_contactus', compact('contacts'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    public function reply(Request $request, $id)
{
    $request->validate([
        'reply' => 'required|string|max:5000',
    ]);

    $contact = ContactUs::findOrFail($id);

    if (empty($contact->email)) {
        return redirect()
            ->back()
            ->with('error', 'Cannot send reply: email address is missing.');
    }

    // Save reply in database
    $contact->reply = $request->reply;
    $contact->save();

    try {
        Mail::raw($request->reply, function ($mail) use ($contact) {
            $mail->from(
                config('mail.from.address'),
                config('mail.from.name')
            );

            $mail->to($contact->email)
                 ->subject('Reply: ' . $contact->subject);
        });

        Log::info('Reply email sent to: ' . $contact->email);

    } catch (\Exception $e) {
        Log::error('Failed to send reply email: ' . $e->getMessage());

        return redirect()
            ->back()
            ->with('error', 'Reply saved, but email failed to send.');
    }

    return redirect()
        ->back()
        ->with('success', 'Reply saved and email sent successfully.');
}

}
