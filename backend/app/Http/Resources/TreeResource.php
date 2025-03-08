<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TreeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "species" => $this->species,
            "circumference" => $this->circumference,
            "settlement" => $this->settlement,
            "year" => $this->year,
            "county" => new CountyResource($this->whenLoaded("county"))
        ];
    }
}
