@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto py-10">
        <h1 class="text-3xl font-bold">Contact Form Submissions</h1>
        <table class="table-auto w-full mt-6">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Message</th>
                    <th class="px-4 py-2">Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($submissions as $submission)
                    <tr>
                        <td class="border px-4 py-2">{{ $submission->name }}</td>
                        <td class="border px-4 py-2">{{ $submission->email }}</td>
                        <td class="border px-4 py-2">{{ $submission->message }}</td>
                        <td class="border px-4 py-2">{{ $submission->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h1 class="text-3xl font-bold mt-10">User Management</h1>
        <table class="table-auto w-full mt-6">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2">Delete</button>
                            </form>
                            <form action="{{ route('admin.users.makeAdmin', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 ml-2">Make Admin</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
