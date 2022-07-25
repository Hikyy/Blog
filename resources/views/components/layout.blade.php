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



@include('components._posts-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <x-post-featured-card :post="$posts[0]"/>


    {{-- <div class="lg:grid lg:grid-cols-2">
        <x-postcard/>
        <x-postcard/>
    </div>

    <div class="lg:grid lg:grid-cols-3">
        <x-postcard/>
        <x-postcard/>
        <x-postcard/>


    </div> --}}
</main>
