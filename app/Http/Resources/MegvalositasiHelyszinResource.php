<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MegvalositasiHelyszinResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'megvalositasi_helyszin_id' => $this->megvalositasi_helyszin_id,
            'intezet_id' => $this->intezet,
            'intezet' =>$this->parent ? $this->parent->nev : '',
            'nev'=> $this->nev,
            'agglomeracio' => $this->agglomeracio,
            'regio' => $this->regio,
            'tipus' => $this->tipus,
        ];
    }
}
