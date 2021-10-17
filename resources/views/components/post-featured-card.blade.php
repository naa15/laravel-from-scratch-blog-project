@props(['post'])

<article class="transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex cursor-pointer">
        <div class="lg:flex-1 mr-8">
            <a href="/posts/{{$post->slug}}">
                {{-- TO DO --}}
                <img src="/images/illustration-1.png" alt="Blog Post Illustration" class="rounded-xl">
            </a>
        </div>

        <div class="lg:flex-1 flex flex-col justify-between">
            <header>
                <div>
                    <x-category-button :category="$post->category" />
                </div>
        
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{$post->slug}}">
                            {{ $post->title }}
                        </a>
                    </h1>  
                    <span class="mt-2 block text-gray-400 text-xs">
                        Published 
                        <time>
                            {{ $post->created_at->diffForHumans() }}
                        </time>
                    </span>
                </div>
            </header>

            <div class="mt-2 text-sm space-y-4">
                
                {!! $post->body !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex text-sm items-center">
                    <img src="/images/lary-avatar.svg" alt="Larry avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a class="hover:bg-gray-400 bg-gray-300 border font-semibold px-5 py-2 rounded-full text-xs" href="/posts/{{$post->slug}}">Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>