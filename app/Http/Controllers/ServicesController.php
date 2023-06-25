<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function HomeServices()
    {
        return view('frontend.service');
    }
    public function HomeWebDevelopment()
    {
        return view('frontend.services.web_development');
    }
}
