{{-- @extends('layout')

@section('top')
    <h1>Ohayo</h1>
@endsection

@section('content')
    @foreach ($posts as $post)
        <a href="/posts/{{$post->slug}}">
            <h1>
                {!!$post->title!!}
            </h1>
        </a>

        <p>
            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>

        <div>
            {!!$post->body!!}
        </div>
    @endforeach
@endsection --}}

@props(['posts', 'currentCategory'])


@include('posts._header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    {{ $slot }}
    @if ($posts->count())

    <x-posts-grid :posts="$posts" />
    {{ $posts->links() }}
    @else
        <p class="text-center">No posts yet. Please check back later.</p>
    @endif



   {{-- <div class="lg:grid lg:grid-cols-3">
        <x-postcard/>
        <x-postcard/>
        <x-postcard/>


    </div> --}}
</main>
