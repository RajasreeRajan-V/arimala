<?php

namespace App\Http\Controllers\Admin;

use App\Models\Departments;
use App\Http\Requests\StoreDepartmentsRequest;
use App\Http\Requests\UpdateDepartmentsRequest;
use Illuminate\Http\Request;

class DepartmentsController  

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Departments::orderBy('id', 'asc')->paginate(5);
        return view('admin.departments.index', compact('departments'));
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
        $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'required|string',
        'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',

        'subtagline1_title'       => 'nullable|string|max:255',
        'subtagline1_description' => 'nullable|string',

        'subtagline2_title'       => 'nullable|string|max:255',
        'subtagline2_description' => 'nullable|string',

        'subtagline3_title'       => 'nullable|string|max:255',
        'subtagline3_description' => 'nullable|string',

        'subtagline4_title'       => 'nullable|string|max:255',
        'subtagline4_description' => 'nullable|string',
    ]);
    
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('departments', 'public');
        }

        Departments::create($data);

        return redirect()->back()->with('success', 'Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departments $departments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departments $departments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $department = Departments::findOrFail($id);
       $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        'subtagline1_title' => 'nullable|string|max:255',
        'subtagline1_description' => 'nullable|string',

        'subtagline2_title' => 'nullable|string|max:255',
        'subtagline2_description' => 'nullable|string',

        'subtagline3_title' => 'nullable|string|max:255',
        'subtagline3_description' => 'nullable|string',

        'subtagline4_title' => 'nullable|string|max:255',
        'subtagline4_description' => 'nullable|string',
    ]);
    
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('departments', 'public');
        }

        $department->update($validated);

        return redirect()->back()->with('success', 'Department updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $department = Departments::findOrFail($id);
        $department->delete();

        return redirect()->back()->with('success', 'Department deleted successfully.');
    }
}
