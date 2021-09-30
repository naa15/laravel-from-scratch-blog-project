@props(['category'])

<a href="/categories/{{$category->slug}}"
    class="border border-blue-300 font-semibold hover:border-blue-500 hover:text-blue-500 px-2 py-1.5 rounded-full text-blue-300 text-xs uppercase"
    style="font-size: 10px;"> {{ $category->name }}
</a>