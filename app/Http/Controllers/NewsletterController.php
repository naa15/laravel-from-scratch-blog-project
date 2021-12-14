<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use App\Http\Requests\NewsletterSubscriberStoreRequest;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(NewsletterSubscriberStoreRequest $request, Newsletter $newsletter)
    {
        $request->validated();
        
        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.'
            ]);
        }
    
        return redirect(route('home'))->with('success', 'You are now signed up for our newsletter');
    }
}
