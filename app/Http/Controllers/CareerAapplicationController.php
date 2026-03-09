<?php

namespace App\Http\Controllers;

use App\Models\CareerAapplication;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCareerAapplicationRequest;
use App\Models\Career;
use Illuminate\Validation\Rule; 
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationMail;
use App\Mail\ContactThankYouMail;

class CareerAapplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.application');
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
         $validated = $request->validate([
            'career_id'   => 'required|exists:careers,id',
            'name'        => 'required|string',
            'email' => [
                    'required',
                    'email',
                    Rule::unique('career_aapplications')->where(function ($query) use ($request) {
                        return $query->where('career_id', $request->career_id);
                    }),
                ],
                
            'phone' => [
                'required',
                'string',
                'max:12',
                Rule::unique('career_aapplications')->where(function ($query) use ($request) {
                    return $query->where('career_id', $request->career_id);
                }),
            ],

            'position'    => 'required|string',
            'qualification' => 'required|string',
            'experience'  => 'required|string',
            'resume' => 'nullable|mimes:pdf,doc,docx|max:5120',
            'cover_letter'=> 'nullable',
        ]);
        $resumePath = null;
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');   
            $filename = now()->timestamp . '_' . $file->getClientOriginalName();
            $resumePath = $file->storeAs('resumes', $filename, 'public');
            } 
        else 
            {
             $resumePath = null;
            }
        $application = CareerAapplication::create([
                'career_id'     => $validated['career_id'],
                'name'          => $validated['name'],
                'email'         => $validated['email'],
                'phone'         => $validated['phone'],
                'position'      => $validated['position'],
                'qualification' => $validated['qualification'],
                'experience'    => $validated['experience'],
                'resume'        => $resumePath,
                'cover_letter'  => $validated['cover_letter'] ?? null,
            ]);
    Mail::to('rajasreev553@gmail.com')->send(new CareerApplicationMail($application));
    Mail::to($application->email)->send(new ContactThankYouMail($application));
    return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($career_id)
    {   
        $career = Career::findOrFail($career_id);
        return view('customer.application', compact('career'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CareerAapplication $careerAapplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCareerAapplicationRequest $request, CareerAapplication $careerAapplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CareerAapplication $careerAapplication)
    {
        //
    }
}
