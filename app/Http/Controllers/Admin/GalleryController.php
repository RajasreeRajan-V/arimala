<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GalleryController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.admin_gallery', compact('galleries'));
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
        'title'       => 'required|string',
        'description' => 'nullable',
        'image'       => 'required|image|mimes:jpg,jpeg,png,webp',
    ]);
    if ($request->hasFile('image')) {
    $data['image'] = $request->file('image')->store('galleries', 'public');
}
    Gallery::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $data['image'] ?? null,
    ]);
    return redirect()->back()->with('success', 'Gallery item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $gallery = Gallery::findOrFail($id);
         $data = $request->validate([
        'title'       => 'required|string|max:255',
        'description' => 'nullable|string',
        'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
     if ($request->hasFile('image')) {

        // Delete old image
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        // Store new image
        $data['image'] = $request->file('image')->store('galleries', 'public');
    }
    $gallery->update($data);
    return redirect()
        ->route('admin.gallery.index')
        ->with('success', 'Gallery updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
        Storage::disk('public')->delete($gallery->image);
    }
    $gallery->delete();
    return redirect()
        ->route('admin.gallery.index')
        ->with('success', 'Gallery image deleted successfully!');
    }
}
