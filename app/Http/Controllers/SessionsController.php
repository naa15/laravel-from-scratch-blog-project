<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SessionStoreRequest;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
	public function create()
	{
		return view('sessions.create');
	}

	public function store(SessionStoreRequest $request)
	{
		$validated = $request->validated();

		if (Auth::attempt($validated))
		{
			return redirect(route('home'))->with('success', 'Welcome Back');
		}

		throw ValidationException::withMessages([
			'email' => 'Your provided credentials could not be varified.',
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

		return redirect(route('home'))->with('success', 'Goodbye');
	}
}
