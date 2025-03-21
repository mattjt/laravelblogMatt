@extends('layouts.app')

@section('content')
    <div class="bg-white py-15 bg-gray-800">
        <div class="w-4/5 m-auto text-center ">
            <h1 class="text-5xl font-bold text-white">Skill Tree</h1>
            <p class="text-gray-300 text-lg mt-4">
                Explore the extensive skill tree of Path of Exile 2.
            </p>
        </div>
    </div>

    <div class="w-4/5 m-auto sm:grid grid-cols-2 gap-10 py-10 ">
        <div>
            <img src="https://example.com/skilltree.jpg" alt="Skill Tree Image" class="rounded-lg shadow-lg">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-extrabold text-gray-800">Master Your Skills</h2>
            <p class="text-gray-800 text-lg py-4">
                Learn about the various skills and how to optimize your build.
            </p>
        </div>
    </div>
@endsection
