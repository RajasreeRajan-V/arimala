<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $doctors = Doctor::paginate(10);
    $departments = Departments::orderBy('title')->get();

    return view('admin.admin_doctor', compact('doctors', 'departments'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'               => 'required|string|max:255',
            'qualification'      => 'required|string|max:255',
            'is_specialized'     => 'required|boolean',
            'sub_specialization' => 'nullable|string|max:255',
            'department_id'      => 'required|exists:departments,id',
            'image'              => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // If NOT specialized → force null
        if ($request->is_specialized == 0) {
            $validated['sub_specialization'] = null;
        }

        // Image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('doctors', 'public');
        }

        Doctor::create($validated);

        return redirect()->route('admin.doctors.index')
                         ->with('success', 'Doctor added successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $validated = $request->validate([
            'name'               => 'required|string|max:255',
            'qualification'      => 'required|string|max:255',
            'is_specialized'     => 'required|boolean',
            'sub_specialization' => 'nullable|string|max:255',
            'department_id'      => 'required|exists:departments,id',
            'image'              => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // If NOT specialized → force null
        if ($request->is_specialized == 0) {
            $validated['sub_specialization'] = null;
        }

        // Image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('doctors', 'public');
        }

        $doctor->update($validated);

        return redirect()->route('admin.doctors.index')
                         ->with('success', 'Doctor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->route('admin.doctors.index')
                         ->with('success', 'Doctor deleted successfully.');
    }
}