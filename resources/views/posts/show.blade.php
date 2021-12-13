@extends('layout')

@section('content')

    <section class="px-6 py-8">

        <article class="max-w-4xl mx-auto mt-20 space-y-6 pt-10">
            <div class="lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 text-center">
                    <img src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : asset('images/illustration-1.png') }}"
                        alt="First Illustration" class="rounded-xl">

                    <p class="mt-4 
                     text-gray-400 text-xs">
                        Published
                        <time>
                            {{ $post->created_at->diffForHumans() }}
                        </time>
                    </p>
                    <div class="flex text-sm items-center justify-center mt-4">
                        <img src="{{ asset('images/lary-avatar.svg') }}" alt="Larry avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-span-8">
                    <div class="flex justify-between mb-6 -mt-10">
                        <a href="{{ route('home') }}"
                            class="transition-colors duration-100 text-lg relative inline-flex items-center hover:text-blue-500">
                            <x-icon name="side-arrow" />
                            Back to Posts
                        </a>

                        <div>
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>

                    <h1 class="font-bold text-4xl mb-10"> {{ $post->title }}</h1>
                    <div class="space-y-6 text-lg space-y-4">
                        {!! $post->body !!}
                    </div>
                </div>

                <section class="col-span-8 col-start-5 mt-10 space-y-6">
                    @include('posts._add-comment-form')

                    @foreach ($post->comments as $comment)
                        <x-post-comment :comment="$comment" />
                    @endforeach
                </section>



            </div>
        </article>
    </section>

@endsection
