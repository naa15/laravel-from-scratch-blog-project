<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\CommentStoreRequest;

class CommentController extends Controller
{
	public function store(CommentStoreRequest $request, Post $post)
	{
		$validated = $request->validated();

		$post->comments()->create([
			'user_id' => auth()->user()->id,
			'body'    => $validated['body'],
		]);

		return back();
	}
}
