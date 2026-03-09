<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CareerAapplication ;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = CareerAapplication::with('career')
            ->where('is_read', false)
            ->get();
        return view('admin.admin_applications', compact('applications'));
    }

     public function show(string $id)
    {
        $application = CareerAapplication::with('career')->findOrFail($id);

        $application->is_read = true;
        $application->save();
        return view('admin.admin_application_view', compact('application'));
    }
    
     public function readApplications()
    {
        $applications = CareerAapplication::with('career')
            ->where('is_read', true)
            ->get();
        return view('admin.admin_applications_read', compact('applications'));
    }

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
        CareerAapplication::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Application deleted successfully.');
    }
}
