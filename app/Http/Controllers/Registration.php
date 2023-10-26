<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller
{
    public function landingPage()
    {
        return view('LandingPage');
    }

    public function showRegistrationForm()
    {
        return view('Registration');
    }
}
