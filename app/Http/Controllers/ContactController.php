<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\ContactSubmission;
use App\Models\ContactFormSubmission;
use App\Models\User;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        // Save the form data to the database
        ContactSubmission::create($request->validated());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function index()
    {
        $submissions = ContactSubmission::all();
        $users = User::all();
        return view('admin.contact.index', compact('submissions', 'users'));
    }

    public function destroy($id)
    {
        $contact = ContactSubmission::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('message', 'Contact deleted successfully');
    }
}
