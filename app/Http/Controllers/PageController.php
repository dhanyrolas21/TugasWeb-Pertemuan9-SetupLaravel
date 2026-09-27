<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $user = "Dhany Rolas";
        $skills = ['PHP', 'Laravel 13', 'Tailwind CSS', 'MySQL'];

        return view('home', compact('user', 'skills'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    // Bonus Route Parameter
    public function hello($nama = 'Guest')
    {
        return "Halo, " . e($nama) . "! Selamat datang di Laravel.";
    }
}