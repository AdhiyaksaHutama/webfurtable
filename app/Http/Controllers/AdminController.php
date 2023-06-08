<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{



    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
   
     public function index(){
        return view('login.index', [
            'title' => 'Login',
        ]);
    }
    public function login(Request $request)
    {
        if (auth()->guard('admins')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            
            return redirect()->route('home');
        } else {
        

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }
    
    public function postLogout()
    {
        auth()->guard('admins')->logout();
        session()->flush();

        return redirect()->route('login');
    }

    
}
