<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Offer;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function show($post_id)
    {
        // $post = Post::findOrFail($post_id);  // Find the specific product-card
        // $offers = Offer::where('post_id', $post_id)->get();  // Fetch related offers
        
        // $isOwner = auth()->check() && auth()->user()->id === $post->user_id;  // Check ownership

        // return view('product-page', compact('post', 'offers', 'isOwner'));

        $post = Post::findOrFail($post_id);  // Find the specific product-card
        
        // Check ownership
        $isOwner = auth()->check() && auth()->user()->id === $post->user_id;
        
        if ($isOwner) {
            // If the user is the owner of the post, retrieve all offers
            $offers = Offer::where('post_id', $post_id)->get();  
        } else {
            // If the user is not the owner, retrieve only the offers by this user
            $user_id = auth()->user()->id;
            $offers = Offer::where('post_id', $post_id)->where('user_id', $user_id)->get(); 
        }

        return view('product-page', compact('post', 'offers', 'isOwner'));

    }
}