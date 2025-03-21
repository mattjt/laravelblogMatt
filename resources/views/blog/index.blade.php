@extends('layouts.app')

@section('content')
<div class=" m-auto text-center bg-gray-800">
    <div class="py-15 border-b border-gray-700">
        <h1 class="text-5xl font-bold text-white">
            News Posts
        </h1>
        <p class="text-gray-300 text-lg mt-4">
            Read the lastest news and updates from Path of Exile 2.
        </p>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-red-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-2xl">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-700">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="" >
        </div>
        <div class="overflow-hidden max-h-80">
            <h2 class="text-gray-900 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-700">
                By <span class="font-bold italic text-gray-600">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-800 pt-8 pb-10 leading-8 ">
                {{ $post->description }}
            </p>
        </div>
        <div>
            <a href="/blog/{{ $post->slug }}" class="uppercase bg-red-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
                Keep Reading
            </a>
            
            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-300 italic hover:text-gray-100 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/blog/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>
                    </form>
                </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection