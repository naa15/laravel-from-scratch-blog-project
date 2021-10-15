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
        <!-- Other Filters -->
        {{-- <span class="relative bg-gray-100 rounded-xl flex lg:inline-flex items-center">
            <select class="appearance-none bg-transparent font-semibold pl-3 pr-9 py-2 text-sm flex-1 outline-none">
                <option value="otherFilters" disabled selected>Other Filters</option>
                <option value="foo">Foo</option>
                <option value="bar">Bar</option>
            </select>
            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="19" height="19"
                viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"></path>
                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                    </path>
                </g>
            </svg>
        </span> --}}
        <!-- Search -->
        <span class="bg-gray-100 flex lg:inline-flex items-center px-3 py-2 relative rounded-xl">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something" value="{{request('search')}}"
                    class="px-1 outline-none bg-transparent placeholder-black text-sm font-semibold">
            </form>
        </span>
    </div>
</header>
