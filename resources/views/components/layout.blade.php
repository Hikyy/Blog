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

@props(['posts']);


@include('components._posts-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    @if ($posts->count())
    <x-post-featured-card :post="$posts[0]"/>

    @if ($posts->count()>1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach ($posts->skip(1) as $post)

        <x-postcard :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}" />
        
        @endforeach
    </div>
    @endif

    @else
        <p class="text-center">No posts yet. Please check back later.</p>
    @endif



   {{-- <div class="lg:grid lg:grid-cols-3">
        <x-postcard/>
        <x-postcard/>
        <x-postcard/>


    </div> --}}
</main>
