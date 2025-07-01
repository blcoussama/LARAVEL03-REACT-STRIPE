<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResource extends JsonResource
{
    public static $wrap = false;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'route_name' => $this->route_name,
            'image' => $this->image ?: null,
            'name' => $this->name,
            'description' => $this->description,
            'required_credits' => $this->required_credits,
            'active' => $this->is_active, // Fixed: was $this->active, now $this->is_active
        ];
    }
}