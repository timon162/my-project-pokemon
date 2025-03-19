<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class MentorResource
 *
 * This class transforms the Mentor model data into a structured JSON response.
 */
class MentorResouce extends JsonResource
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
        //     'id'    => $this->id,
        //     'mentor_id' => $this->mentor_id,
        //     'name'  => $this->name,
        //     'name'  => $this->name,
        //     'type' => $this->type,
        //     'level' => $this->level
        // ];
    }
}
