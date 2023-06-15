<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GlobalController extends Controller
{
    // For returning to previous route
    public function goBack()
    {
        $path = '';

        if (Auth::check() && Auth::user()->role === 'admin') {
            $path = 'admin/dashboard';
        } else {
            $path = 'user/dashboard';
        }

        return redirect($path);
    }
}
