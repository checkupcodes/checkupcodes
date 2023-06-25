<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function HomeAbout()
    {
        return view('frontend.about');
    }
}
