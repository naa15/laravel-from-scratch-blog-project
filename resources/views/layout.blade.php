<!DOCTYPE html>
<html>

<head>
    <title>Laravel From Scratch Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

    </style>

</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="flex justify-between items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="flex items-center mt-8 md:mt-0">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase">Welcome back,
                                {{ auth()->user()->name }}!
                            </button>
                        </x-slot>

                        <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">
                            All Posts
                        </x-dropdown-item>

                        <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">
                            New Post
                        </x-dropdown-item>

                        <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">
                            Log Out
                        </x-dropdown-item>

                        <form id="logout-form" class="hidden" method="POST" action="/logout">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a class="text-xs font-bold px-2 uppercase" href="/register">Register</a>
                    <a class="text-xs font-bold px-2 uppercase" href="/login">Log In</a>
                @endauth

                <a class="bg-blue-500 hover:bg-blue-700 rounded-full font-semibold text-white ml-3 uppercase px-5 py-3"
                    href="#newsletter">Subscribe for Updates</a>
            </div>

        </nav>

        @yield('content')

        <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <div class="relative mx-auto" style="width: 500px;">
                <img src="/images/lary-newsletter-icon.png" width="145px" alt="Larry Laracore" class="mx-auto">
                <h5 class="text-3xl absolute bottom-0 mx-auto text-center">Stay in touch with the latest posts</h5>
            </div>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="bg-gray-200 inline-block mx-auto relative rounded-full">
                    <form method="POST" action="/newsletter" class="flex items-center text-sm">
                        @csrf

                        <div class="px-5 py-3 inline-flex items-center">
                            <label for="email">
                                <img src="/images/mailbox-icon.svg" alt="Mailbox Icon">
                            </label>
                            <div>
                                <input type="text" name="email" id="email" placeholder="Your email adress"
                                    class="bg-transparent pl-4 outline-none ">
                                @error('email')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit"
                            class="bg-blue-500 ml-3 hover:bg-blue-700 rounded-full font-semibold text-white uppercase px-8 py-3">Subscribe</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash />
</body>

</html>
