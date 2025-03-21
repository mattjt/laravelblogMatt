public function update(Request $request, $slug)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'furthertext' => 'required',
        // ...existing code...
    ]);

    $post = Post::where('slug', $slug)->first();
    $post->title = $request->input('title');
    $post->description = $request->input('description');
    $post->furthertext = $request->input('furthertext');
    // ...existing code...
    $post->save();

    return redirect('/blog/' . $post->slug)
        ->with('message', 'Your post has been updated!');
}