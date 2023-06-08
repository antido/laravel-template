<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo()
    {
        if (Auth()->user()->role === 'user') {
            return route('home');
        } elseif (Auth()->user()->role === 'admin') {
            return route('admin.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login(Request $request)
    // {
    //     $input = $request->all();
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     {
            // if (auth()->user()->role === 'user') {
            //     if (auth()->user()->user_status == 1) {
            //         return redirect()->route('admin.dashboard');
            //     } else {
            //         return redirect()->route('login')->with('error', 'User not activated');
            //     }
            // } elseif (auth()->user()->role == 'admin') {
            //     if (auth()->user()->user_status == 1) {
            //         return redirect()->route('hr.dashboard');
            //     } else {
            //         return redirect()->route('login')->with('error', 'User not activated');
            //     }
            // } elseif (auth()->user()->role == 3) {
            //     if (auth()->user()->user_status == 1) {
            //         return redirect()->route('marketing.dashboard');
            //     } else {
            //         return redirect()->route('login')->with('error', 'User not activated');
            //     }
            // } elseif (auth()->user()->role == 4) {
            //     if (auth()->user()->user_status == 1) {
            //         return redirect()->route('user.dashboard');
            //     } else {
            //         return redirect()->route('login')->with('error', 'User not activated');
            //     }
            // }
    //     } else {
    //         return redirect()->route('login')->with('error', 'Email or Password is wrong');
    //     }
    // }
}
