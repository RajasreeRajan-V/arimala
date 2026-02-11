<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;

class BlogController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $blogs = Blog::latest()->get();
        return view('admin.admin_blog', compact('blogs'));

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
        'title'   => 'required|string|max:255',
        'heading' => 'nullable|string|max:255',
        'content' => 'required',
        'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp',
    ]);
    $data = $request->only(['title', 'heading', 'content']);
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('blogs', 'public');
        $data['image'] = $imagePath;
    }

    Blog::create($data);

    return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $request->validate([
            'title'   => 'required|string|max:255',
            'heading' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);
        $data = $request->only(['title', 'heading', 'content']);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $data['image'] = $imagePath;
        }
        $blog->update($data);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
     {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully!');
     }  
    
}
