<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all(); //retreive all date.
        return view('dashboard', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name'=>['required', 'string', 'max:50'],
            'description'=>['required', 'string', 'max:255'],
            'photo'=>['nullable', 'image', 'mimes:jpeg,png,jpg'],
        ]);
        
        $user = auth()->user();  // Assumes the user is authenticated
        
        // Create a new Post instance
        $post = new Post();
        $post->product_name = $request->product_name;
        $post->description = $request->description;

         // Handle file upload for photo, if provided
        if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');  // Store in the public storage
        $post->photo = $photoPath;  // Store the path to the uploaded photo
        }
        // Set the user ID and location from the current user's information
        $post->user_id = $user->id;
        $post->location = $user->location;  // Derive the location from the user creating the post

        $post->save();

        // Redirect to the index view
        return redirect()->route('dashboard');
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name'=>['required', 'string', 'max:50'],
            'description'=>['required', 'string', 'max:255'],
            'photo'=>['nullable', 'image', 'mimes:jpeg,png,jpg'],
        ]);
        $post = Post::findOrFail($id);

        $post->product_name = $request->product_name;
        $post->description = $request->description;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');  // Store in the public storage
            $post->photo = $photoPath;  // Store the path to the uploaded photo
        }  
        $post->save();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        
        $post->delete();  // Delete the post from the database
        
        return redirect()->route('dashboard');
    }
}
