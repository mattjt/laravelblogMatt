<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:1000',
        ]);

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to comment.');
        }

        $comment = new Comment();
        $comment->content = $request->input('comment');
        $comment->user_id = auth()->id();
        $comment->post_id = $request->input('post_id');
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
