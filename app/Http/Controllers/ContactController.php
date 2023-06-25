<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function HomeContact()
    {
        return view('frontend.contact');
    }
}