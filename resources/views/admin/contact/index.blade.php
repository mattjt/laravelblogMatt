@extends('layouts.app')

@section('content')
    
    <div class="w-4/5 m-auto py-5">
        <h1 class=" text-5xl font-bold px-4 py-2 rounded-3xl">Admin</h1>
        <div class="bg-white  px-4 py-2 rounded-3xl">
        <h1 class="text-3xl font-bold mt-3">Contact Form Submissions</h1>
        <table class="table-auto w-full ">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Message</th>
                    <th class="px-4 py-2">Submitted At</th>
                    <th class="px-4 py-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($submissions as $submission)
                    <tr>
                        <td class="border px-4 py-2">{{ $submission->name }}</td>
                        <td class="border px-4 py-2">{{ $submission->email }}</td>
                        <td class="border px-4 py-2">{{ $submission->message }}</td>
                        <td class="border px-4 py-2">{{ $submission->created_at }}</td>
                        <td class=" text-right">
                            <form action="{{ route('contact.destroy', $submission->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-3xl ">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <br>
        <div class="bg-white  px-4 py-2 rounded-3xl">
        <h1 class="text-3xl font-bold mt-3">User Management</h1>
        <table class="table-auto w-full  ">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class=" text-right">
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-3xl">Delete</button>
                            </form>
                            <form action="{{ route('admin.users.makeAdmin', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 ml-2 rounded-3xl">Make Admin</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
