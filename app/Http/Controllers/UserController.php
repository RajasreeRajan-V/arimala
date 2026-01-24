<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function dashboard()
    {
        return view('customer.index');
    }
    public function about()
    {
        return view('customer.about');
    }
    public function service()
    {
        return view('customer.services');
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
