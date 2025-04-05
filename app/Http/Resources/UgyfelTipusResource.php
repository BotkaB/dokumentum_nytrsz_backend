<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UgyfelTipusResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'ugyfel_tipus_id' => $this->ugyfel_tipus_id,        
            'ugyfel_fotipus_id' => $this->ugyfel_fotipus,
            'ugyfel_fotipus' => $this->parent ? $this->parent->elnevezes : '',
            'elnevezes' => $this->elnevezes,
        ];
    }
}
