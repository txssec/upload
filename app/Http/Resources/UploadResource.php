<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UploadResource extends JsonResource
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
            'id' => $this->id,
            'owner' => $this->owner,
            'size' => $this->size,
            'src_front' => $this->src_front,
            'src_back' => $this->src_back,
            'status' => $this->status,
            'expiration' => $this->expiration,
            'mime' => $this->mime,
            'type_id' => $this->type_id,
            'type' => new TypeResource($this->whenLoaded('type')),
            'origin' => $this->origin,
            'approved_at' => $this->approved_at,
            'disapproved_at' => $this->disapproved_at,
            'disapproval_reason' => $this->disapproval_reason,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
