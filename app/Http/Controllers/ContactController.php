<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        // Save the form data to the database
        ContactSubmission::create($request->validated());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
