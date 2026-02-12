<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Services;

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
        return view('customer.doctors');
    }
      public function departments()
    {
        return view('customer.departments');
    }
}
