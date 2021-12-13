@extends('layout')

@section('content')
    <x-setting :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)" />
            <div class="mt-6 flex">
                <img src="{{ $post->thumbnail? asset('storage/' . $post->thumbnail) : asset('images/illustration-1.png') }}" class="mr-3 rounded-xl" width="100" alt="First Illustration" class="rounded-xl">
                <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
            </div>
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id', $category->id) == $post->category_id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>

                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.field>

            <x-form.button>
                Update
            </x-form.button>
        </form>
    </x-setting>
@endsection
