<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Render the home page
     */
    public function index()
    {
        return view('home');
    }
}
