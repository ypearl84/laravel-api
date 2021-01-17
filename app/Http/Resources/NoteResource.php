<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return  [
            'title' => "title : " . $this->title,
            'note' => "note : " . $this->note,
            'create_at' => $this->created_at->diffForHumans()
        ];
    }
}
