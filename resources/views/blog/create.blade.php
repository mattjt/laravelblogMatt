@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-10">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-5 bg-white py-4 px-8 rounded-3xl">
    <form 
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Title..."
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea 
            name="description"
            placeholder="Description shows on the main page and above full text body..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

        <textarea 
        name="furthertext"
        placeholder="Full Text Body..."
        class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>    

        <div class="bg-grey-lighter pt-5">
            <label class="w-44 flex flex-col items-center  bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer py-2 px-8 rounded-3xl hover:bg-gray-500 hover:text-white">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl hover:bg-blue-700 transition">
            Submit Post
        </button>
    </form>
</div>

@endsection