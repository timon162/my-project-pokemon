<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class PokemonResource
 *
 * This resource transforms the Pokemon model into a structured JSON response.
 */
class PokemonResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param Request $request The incoming HTTP request.
     * @return array The formatted data for API response.
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        // return [
        //     //'id'    => $data['id'] ,
        //     // 'mentor_id' => $this->mentor_id,
        //     // 'name'  => $this->name,
        //     // 'type' => $this->type,
        //     // 'level' => $this->level,
            
        // ];
    }
}