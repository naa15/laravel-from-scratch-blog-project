<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserStoreRequest;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(UserStoreRequest $request)
    {
        $validated = $request->validated();
        
        $user = User::create($validated);
        
        Auth::login($user);

        return redirect(route('home'))->with('success', 'Your account has been created.');
    }
}
