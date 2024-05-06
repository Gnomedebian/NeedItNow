<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Offer;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function show($post_id)
    {
        $post = Post::findOrFail($post_id);  // Find the specific product-card
        $offers = Offer::where('post_id', $post_id)->get();  // Fetch related offers
        
        $isOwner = auth()->check() && auth()->user()->id === $post->user_id;  // Check ownership

        return view('product-page', compact('post', 'offers', 'isOwner'));
    }
    // public function show($id)
    // {
    //     // Fetch the specific post by its ID
    //     $post = Post::findOrFail($id);

    //     // Pass the data to the client-side Blade view
    //     return view('product-page', compact('post'));
    // }
}