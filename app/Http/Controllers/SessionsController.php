<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('/')->with('success', "Welcome Back");
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be varified.'
        ]);

        /*
        * other way to do the same:
        * return back()
        *    ->withInput()
        *    ->withErrors(['email' => 'Your provided credentials could not be varified.']);
        */
    }
    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Goodbye');
    }
}
