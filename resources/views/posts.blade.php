@extends('layout')

@section('content')

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

        @else
            <p class="text-center">No posts yet. Come back later.</p>
        @endif

    </main>
@endsection
