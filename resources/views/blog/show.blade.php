@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </div>
</div>



<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-900">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
    <a href="/blog" class="uppercase bg-red-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
        Back
    </a>
</div>



@endsection 