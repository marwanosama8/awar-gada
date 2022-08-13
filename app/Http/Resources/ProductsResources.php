<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'sku' => $this->sku,
            'price' => $this->price,
            'brand' => $this->brand,
            'availability' => $this->availability,
            'quantity' => $this->quantity,
            'description' => $this->description,
            'key_features' => $this->key_features,
            'warranty' => $this->warranty,
            'available' => $this->available,
            'width' => $this->width,
            'depth' => $this->depth,
            'photo' => $this->photo,
        ];
    }
}
