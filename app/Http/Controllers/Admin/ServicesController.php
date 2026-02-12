<?php

namespace App\Http\Controllers\Admin;

use App\Models\Services;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use Illuminate\Http\Request;

class ServicesController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::orderBy('id', 'asc')->paginate(10);
        return view('admin.admin_services', compact('services'));
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
        'title' => 'required|string',
        'description' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp', 
    ]);
    $data = [
        'title' => $request->title,
        'description' => $request->description,
    ];
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('services', 'public');
    }
    Services::create($data);
    return redirect()->back()->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request  $request, $id)
    {
        $services = Services::findOrFail($id);
        
        $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);
     if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('services', 'public');
    }
    $services->update($data); 
    return redirect()->route('admin.services.index')
                     ->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        if ($service->image && file_exists(storage_path('app/public/' . $service->image))) {
        unlink(storage_path('app/public/' . $service->image));
    }
    $service->delete();

    return redirect()->route('admin.services.index')
                     ->with('success', 'Service deleted successfully.');
    }
}
