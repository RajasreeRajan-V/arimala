<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Services;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Departments;
use App\Models\Doctor;

class UserController extends Controller
{
     public function dashboard()
    {
        return view('customer.index');
    }
    public function about()
    {
        $abouts = AboutUs::latest()->get();
        return view('customer.about', compact('abouts'));
    }
    public function service()
    {
        $services = Services::all();
        return view('customer.services', compact('services'));
    }
    public function gallery()
    {
        return view('customer.gallery');
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
}
