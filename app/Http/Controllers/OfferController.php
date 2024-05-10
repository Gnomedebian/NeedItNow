<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Post;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //here
        $validated = $request->validate([
            'offer_product_name'=>['required', 'string', 'max:50'],
            'condition'=>['required', 'string', 'max:50'],
            'description'=>['required', 'string', 'max:255'],
            'price'=>['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'photo'=>['nullable', 'image', 'mimes:jpeg,png,jpg'],
            'post_id' => ['required'],
        ]);

        $user = auth()->user();
        

        $offer = new Offer();
        $offer->offer_product_name = $request->offer_product_name;
        $offer->condition = $request->condition;
        $offer->description = $request->description;
        $offer->price = $request->price;
        
         // Handle file upload for photo, if provided
        if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');  // Store in the public storage
        $offer->photo = $photoPath;  // Store the path to the uploaded photo
        }

        $offer->user_id = $user->id;
        $offer->location = $user->location;
        $offer->phone = $user->phone;
        $offer->post_id = $validated['post_id'];

        $offer->save();
        return redirect()->route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $offer = Offer::findOrFail($id);
        return view('edit-offer', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'offer_product_name' => ['required', 'string', 'max:50'],
            'condition' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'photo'=>['nullable', 'image', 'mimes:jpeg,png,jpg'],
        ]);

        $offer = Offer::findOrFail($id);

        // Update the offer with new values
        $offer->offer_product_name = $request->offer_product_name;
        $offer->condition = $request->condition;
        $offer->description = $request->description;
        $offer->price = $request->price;

        // If a new photo is provided, handle the upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $offer->photo = $photoPath;
        }

        $offer->save();

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();

        return redirect()->route('dashboard');
    }
}
