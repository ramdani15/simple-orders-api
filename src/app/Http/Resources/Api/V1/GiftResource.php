<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class GiftResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'name'              => $this->name,
            'description'       => $this->description,
            'stock'             => $this->stock,
            'totalPurchases'    => $this->total_purchases,
            'point'             => $this->point,
            'rating'            => $this->rating,
            'imageUrl'          => $this->image_url,
            'totalLike'         => $this->total_like,
            'createdAt'         => $this->created_at->format('Y-m-d H:i:s'),
            'updatedAt'         => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
