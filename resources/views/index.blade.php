@extends('partials.layout')
@section('title', 'Home Page')
@section('content')
    <h1 class="text-4xl">Home</h1>
    <div class="text-center my-2">
        {{ $posts->links() }}
    </div>
    <div class="grid grid-cols-3 gap-4">
        @foreach($posts as $post)
            <div class="card card-side bg-base-300 shadow-sm">
                <figure class="min-w-3xs">
                    <img src="{{$post->image->path}}" alt="Movie" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p>{{$post->snippet}}</p>
                    <p class="secondary-content">{{ $post->created_at->diffForHumans() }}</p>
                    <p class="secondary-content">{{ $post->user->name }}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
