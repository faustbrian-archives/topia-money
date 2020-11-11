<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SymbolResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'     => $this->getRouteKey(),
            'symbol' => $this->symbol,
            'source' => $this->source,
            'target' => $this->target,
        ];
    }
}
