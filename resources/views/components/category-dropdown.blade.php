<x-dropdown>
    <x-slot name="trigger" >
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ 'Categories' ? 'Categories': ucwords($currentCategory->name)}}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />

            </button>
    </x-slot>

    <x-dropdown-item href="/?{{http_build_query(request()->except('category', 'page'))}}" >All</x-dropdown-item>

    @foreach ($categories as $category )
    <x-dropdown-item {{-- {{isset($currentCategory) && $currentCategory->id === $category->id ? 'bg-blue-500 text-white' : ''}} --}}
    href="/?category={{$category->slug}}&{{http_build_query(request()->except('category', 'page'))}}" >
    {{ ucwords($category->name) }}</x-dropdown-item>

        {{-- <a href="/categories/{{$category->slug}}"
            class="block text-left px-3 text-sm leading-6 hover:bg-blue-500
            focus:bg-blue-500 hover:text-white focus:text-white
            {{isset($currentCategory) && $currentCategory->id === $category->id ? 'bg-blue-500 text-white' : ''}} "> {{ ucwords($category->name) }} </a> --}}

    @endforeach
</x-dropdown>
