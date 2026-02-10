<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactThankYouMail;
use App\Mail\ContactAdminNotificationMail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.contact'); 
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
         $data = $request->validate([
        'name'    => 'required|string',
        'email' => 'required|email|unique:contact_us,email',
        'subject' => 'required',
        'message' => 'required',
    ],[
            'email.unique' => 'This email has already sent a message.',
        ]);
    ContactUs::create($data);

     Mail::to($data['email'])->send(new ContactThankYouMail($data));
     Mail::to('rajasreev553@gmail.com')->send(new ContactAdminNotificationMail($data));

   return redirect()
        ->back()
        ->with('success', 'Your message has been sent. Thank you!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactUsRequest $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
