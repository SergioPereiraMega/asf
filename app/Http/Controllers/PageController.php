<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function nosotros()
    {
        return view('home.about');
    }

    // public function contacto()
    // {
    //     return view('home.contacto');
    // }
}
