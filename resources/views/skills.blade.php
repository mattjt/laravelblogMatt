@extends('layouts.app')

@section('content')
    <div class="bg-gray-800 py-15">
        <div class="w-4/5 m-auto text-center">
            <h1 class="text-5xl font-bold text-white">Skills</h1>
            <p class="text-gray-300 text-lg mt-4">
                Discover the different skills in Path of Exile 2.
            </p>
        </div>
    </div>

    <div class="w-4/5 m-auto sm:grid grid-cols-2 gap-10 py-10">
        <div>
            <img src="https://example.com/skills.jpg" alt="Skills Image" class="rounded-lg shadow-lg">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-extrabold text-white">Master Your Skills</h2>
            <p class="text-gray-300 text-lg py-4">
                Learn about the strengths and weaknesses of each skill.
            </p>
        </div>
    </div>
@endsection
