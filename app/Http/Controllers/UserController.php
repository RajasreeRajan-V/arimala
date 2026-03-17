<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Services;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Departments;
use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\Blog;
use App\Models\ChairMan;
use App\Models\Review;


class UserController extends Controller
{
    public function dashboard(Request $request)
{
    $departments = Departments::orderBy('id', 'asc')->take(6)->get();
    $services = Services::all();

    $doctors = Doctor::with('department')
        ->when($request->doctor_name, function ($query, $name) {
            $query->where('name', 'like', '%' . $name . '%');
        })
        ->when($request->specialty, function ($query, $specialty) {
            $query->where('department_id', $specialty);
        })
        ->get();
    $reviews = Review::all();
    return view('customer.index', compact('departments', 'services', 'doctors', 'reviews'));
}
    public function about()
{
    $abouts = AboutUs::latest()->get();
    $chairpersons = ChairMan::latest()->get();

    return view('customer.about', compact('abouts', 'chairpersons'));
}
    public function service()
    {
        $services = Services::all();
        return view('customer.services', compact('services'));
    }
    public function gallery()
    {
        $galleries = Gallery::all();
        return view('customer.gallery', compact('galleries'));
    }
     public function contact()
    {
        return view('customer.contact');
    }
     public function doctors()
    {
       $doctors = Doctor::with('department')->get();
        return view('customer.doctors', compact('doctors'));
    }
      public function departments()
    {
        $departments = Departments::orderBy('id', 'asc')->take(5)->get();
        return view('customer.departments', compact('departments'));
    }
    public function career()
    {
        $careers = Career::all();
        return view('customer.career', compact('careers'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('customer.blog', compact('blogs'));
    }
    public function faq()
    {
        return view('customer.faq');
    }
}
