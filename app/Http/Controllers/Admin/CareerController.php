<?php

namespace App\Http\Controllers\Admin;

use App\Models\Career;
use App\Http\Requests\StoreCareerRequest;
use App\Http\Requests\UpdateCareerRequest;
use Illuminate\Http\Request;

class CareerController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::orderBy('created_at', 'desc')->get();
        return view('admin.admin_career', compact('careers'));
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
        'job_title'    => 'required|string',
        'description'  => 'required',
        'qualification'=> 'required|string',
        'due_date'     => 'required|date',
        'position'     => 'required',
        'jobtype'   =>'required',
        'imge'         => 'nullable|image|mimes:jpg,jpeg,png,gif,webp',
    ]);
    
    if ($request->hasFile('imge')) {
        $imagePath = $request->file('imge')->store('career', 'public');
        $data['imge'] = $imagePath;
    }

    Career::create($data);
    return redirect()->route('admin.careers.index')->with('success', 'Career created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    $validated = $request->validate([
        'job_title'     => 'required|string|max:255',
        'description'   => 'required',
        'qualification' => 'required|string|max:255',
        'due_date'      => 'required|date',
        'position'      => 'required|string|max:255',
        'jobtype'   =>'required',
        'imge'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    if ($request->hasFile('imge')) {
        $validated['imge'] = $request->file('imge')->store('careers', 'public');
    }

    $career = Career::findOrFail($id);
    $career->update($validated);

    return redirect()->route('admin.careers.index')->with('success', 'Career updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();
        return redirect()->route('admin.careers.index')->with('success', 'Career deleted successfully.');
    }
}
