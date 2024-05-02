<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'product_name'=>$this->product_name,
            'description'=>$this->description,
            'photo'=>$this->photo,
            'location'=>$this->location,
            'created_at'=>$this->created_at,
        ];
    }
}
