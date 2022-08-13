<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductsCollResourses extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'sku' => $this->sku,
            'price' => $this->price,
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
