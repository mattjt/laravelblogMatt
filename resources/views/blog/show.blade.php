@extends('layouts.app')

@section('content')


<div class="w-4/5 m-auto text-left">
    <div class="py-7">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="" class="rounded-lg shadow-2xl" >
    </div>
</div>

<div class="w-4/5 m-auto text-left">
    <div class="py-7">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-900">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->furthertext }}
    </p>
    <a href="/blog" class="uppercase bg-red-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
        Back
    </a>
</div>

<div class="w-4/5 m-auto pt-20">
    <h2 class="text-4xl font-bold">Comments</h2>
    @auth
    <form action="{{ route('comments.store') }}" method="POST" class="pt-10">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <textarea name="comment" rows="2" class="w-full rounded-lg shadow-lg p-4" placeholder="Add a comment"></textarea>
        <button type="submit" class="mt-4 bg-green-500 text-gray-100 text-lg font-extrabold py-2 px-4 rounded-3xl">
            Submit
        </button>
    </form>
    @else
    <p class="text-gray-600">You must be <a href="{{ route('login') }}" class="text-red-500">logged in</a> to add a comment.</p>
    @endauth

    <div class="pt-10">
        @if($post->comments->isEmpty())
            <p class="text-gray-600">No comments yet.</p>
        @else
            @foreach($post->comments as $comment)
                <div class="border-b border-gray-200 py-4 bg-white rounded-lg shadow-lg py-4 px-4">
                    <p class="text-gray-600">{{ $comment->content }}</p>
                    <p class="text-gray-400 text-sm">{{ $comment->user->name }}, {{ date('jS M Y', strtotime($comment->created_at)) }}</p>
                    @can('delete', $comment)
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    @endcan
                </div>
            @endforeach
        @endif
    </div>
</div>

@endsection