@extends('layouts.app')

@section('content')
    <div class="bg-gray-800 py-15">
        <div class="w-4/5 m-auto text-center">
            <h1 class="text-5xl font-bold text-white">About Us</h1>
            <p class="text-gray-300 text-lg mt-4">
                Learn more about our journey, mission, and what drives us to build amazing projects.
            </p>
        </div>
    </div>

    <div class="w-4/5 m-auto sm:grid grid-cols-2 gap-10 py-10">
        <div>
            <img src="\images\about.jpg" alt="About Image" class="rounded-lg shadow-lg">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-extrabold ">Who We Are</h2>
            <p class="text-gray-800text-lg py-4">
                We are a team of passionate developers and designers committed to delivering high-quality gaming web pages.
            </p>
            <p class="text-gray-800 text-lg pb-4">
                Our goal is to make gaming accessible and innovative, helping gamers learn and thrive.
            </p>
            <a href="/contact" class="bg-red-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-red-700 transition">Get in Touch</a>
        </div>
    </div>

    <div class="bg-gray-500 text-white py-20 text-center">
        <h2 class="text-3xl font-bold">Our Mission</h2>
        <p class="w-3/5 m-auto text-lg mt-4">
            To empower gamers through cutting-edge web based solutions, ensuring seamless digital experiences for everyone.
        </p>
    </div>
@endsection
