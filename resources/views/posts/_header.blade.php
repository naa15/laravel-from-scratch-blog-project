<header class="max-w-4xl mx-auto mt-20 text-center">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">
            Latest <span class="text-blue-500">Laravel From Scratch</span> News
        </h1>
    </div>

    <div class="mt-4 lg:space-x-4 space-y-4 lg:space-y-0">
        <!-- Category -->
        <div class=" lg:inline-flex bg-gray-100 rounded-xl relative lg:inline-flex">
            <x-category-dropdown />
        </div>
                
        <!-- Search -->
        <span class="bg-gray-100 flex lg:inline-flex items-center px-3 py-2 relative rounded-xl">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <input type="text" name="search" placeholder="Find something" value="{{ request('search') }}"
                    class="px-1 outline-none bg-transparent placeholder-black text-sm font-semibold">
            </form>
        </span>
    </div>
</header>
