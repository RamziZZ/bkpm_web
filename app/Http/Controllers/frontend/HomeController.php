<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function inde()
    {
        return view('frontend.home');
    }
}