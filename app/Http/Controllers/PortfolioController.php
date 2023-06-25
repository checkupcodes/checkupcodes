<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function HomePortfolio()
    {
        return view('frontend.portfolio');
    }
}
