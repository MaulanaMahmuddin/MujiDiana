<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class dataSiswa extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama_siswa' => $this->nama_siswa,
            'umur' => $this->umur,
            'kelas' => $this->kelas,
            'n_orangtua' => $this->n_orangtua,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
