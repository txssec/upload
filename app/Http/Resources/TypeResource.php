<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TypeResource extends JsonResource
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
            'name' => $this->name,
            'src_back_rule' => $this->src_back_rule,
            'status' => $this->status,
            'expiration_rule' => $this->expiration_rule,
            'mimes' => $this->mimes,
            'disk' => $this->disk,
            'privacy' => $this->privacy,
            'directory' => $this->directory,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
