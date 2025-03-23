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
    </div>
@endsection
