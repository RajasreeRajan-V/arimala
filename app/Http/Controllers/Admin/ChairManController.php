<?php

namespace App\Http\Controllers\Admin;

use App\Models\ChairMan;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\AboutUs;
class ChairManController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $chairpersons = ChairMan::all();
        $chairperson = ChairMan::first();
        $aboutUs = AboutUs::latest()->first();
        return view('admin.admin_about_us',compact('chairperson', 'aboutUs'));
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
            'name' => 'required|string',
            'designation' => 'required|string',
            'about' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:3072',
        ]);

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('chairperson', 'public');
            $data['photo'] = $imagePath;
        }

        ChairMan::create($data);
        return redirect()->route('admin.chairperson.index')->with('success', 'Chairperson created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChairMan $chairMan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChairMan $chairMan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $chairperson = ChairMan::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'about' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:3072'
        ]);
        $chairperson->name = $request->name;
        $chairperson->designation = $request->designation;
        $chairperson->about = $request->about;
        if ($request->hasFile('photo')) {
        // Delete old photo
        if ($chairperson->photo && Storage::exists('public/' . $chairperson->photo)) {
            Storage::delete('public/' . $chairperson->photo);
        }

        $path = $request->file('photo')->store('chairperson', 'public');
        $chairperson->photo = $path;
    }
        $chairperson->save();
        return redirect()->route('admin.chairperson.index')->with('success', 'Chairperson updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chairperson = ChairMan::findOrFail($id);
        // Delete photo if it exists
        if ($chairperson->photo && Storage::exists('public/' . $chairperson->photo)) {
            Storage::delete('public/' . $chairperson->photo);
        }
        $chairperson->delete();
        return redirect()->route('admin.chairperson.index')->with('success', 'Chairperson deleted successfully.');
    }
}
