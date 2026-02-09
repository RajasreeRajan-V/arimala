<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use Illuminate\Http\Request;

class AboutUsController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs = AboutUs::latest()->first();
        return view('admin.admin_about_us', compact('aboutUs'));
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
        'title' => 'required|string',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ]);
        if ($request->hasFile('image')) {

    $data['image'] = $request->file('image')->store('about-us', 'public');
}
        AboutUs::create($data);
        return redirect()->back()->with('success', 'About Us created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('about-us', 'public');
        }
        $aboutUs->update($data);
        return redirect()->back()->with('success', 'About Us updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
