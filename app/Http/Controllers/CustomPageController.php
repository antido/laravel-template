<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomPageController extends Controller
{
    // For restricted pages
    public function restricted()
    {
        return view('pages.restricted');
    }
}
