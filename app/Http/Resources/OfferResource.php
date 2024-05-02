<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'offer_product_name'=>$this->offer_product_name,
            'condition'=>$this->condition,
            'description'=>$this->description,
            'price'=>$this->price,
            'photo'=>$this->photo,
            'location'=>$this->location,
            'created_at'=>$this->created_at,
        ];
    }
}
