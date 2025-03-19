@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 py-20">
        <div class="w-4/5 m-auto text-center">
            <h1 class="text-5xl font-bold text-gray-800">Contact Us</h1>
            <p class="text-gray-600 text-lg mt-4">
                Get in touch with us for any inquiries, collaborations, or support.
            </p>
        </div>
    </div>

    <div class="w-4/5 m-auto sm:grid grid-cols-2 gap-10 py-10">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/11/21/12/49/phone-1845636_960_720.jpg" alt="Contact Image" class="rounded-lg shadow-lg">
        </div>
        <div class="flex flex-col justify-center">
            <h2 class="text-3xl font-extrabold text-gray-800">Reach Out to Us</h2>
            <p class="text-gray-600 text-lg py-4">
                Have a question? Fill out the form below or reach us via email and phone.
            </p>
            <form action="/contact" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-lg">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                    <textarea name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white font-bold py-3 px-6 rounded-lg shadow-lg hover:bg-blue-600 transition">Send Message</button>
            </form>
        </div>
    </div>

    <div class="bg-blue-500 text-white py-20 text-center">
        <h2 class="text-3xl font-bold">Our Contact Information</h2>
        <p class="w-3/5 m-auto text-lg mt-4">
            Email: contact@yourcompany.com | Phone: +123 456 7890 | Address: 123 Street, City, Country
        </p>
    </div>
@endsection