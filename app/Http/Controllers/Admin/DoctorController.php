<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Departments;
use Illuminate\Http\Request;

class DoctorController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        $departments = Departments::orderBy('title')->get();

    return view('admin.admin_doctor', compact('doctors', 'departments'));
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
        'name' => 'required|string|max:255',
        'qualification' => 'required|string|max:255',
        'specialization' => 'required|string|max:255',
        'department_id' => 'required|exists:departments,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('doctors', 'public');
        $validated['image'] = $imagePath;
    }
    Doctor::create($validated);
    return redirect()->route('admin.doctors.index')
                     ->with('success', 'Doctor added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $doctor = Doctor::findOrFail($id);
        $request->validate([
        'name' => 'required|string',
        'qualification' => 'required|string',
        'specialization' => 'required|string',
        'department_id' => 'required|exists:departments,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
    ]);
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('doctors', 'public');
        $doctor->image = $imagePath;

    }
    $doctor->update($request->only(['name', 'qualification', 'specialization', 'department_id']));

    return redirect()->route('admin.doctors.index')
                     ->with('success', 'Doctor updated successfully.');
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('admin.doctors.index')
                         ->with('success', 'Doctor deleted successfully.');
    }
}
