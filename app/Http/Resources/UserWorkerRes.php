<?php

namespace App\Http\Resources;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Http\Resources\Json\JsonResource;

class UserWorkerRes extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $pos = Position::where('id', $this->position_id)->first();
        $dep = Department::where('id', $pos->department_id)->first();
        return [
            'id' => $this->id,
            'login' => $this->login,
            'name' => $this->name,
            'email' => $this->email,
            'image' => $this->image,
            'about' => $this->about,
            'type' => $this->type,
            'github' => $this->github,
            'worker' => [
                'department' => $dep->name,
                'position' => $pos->name,
                'adopted_at' => $this->adopted_at
            ]
        ];
    }
}
