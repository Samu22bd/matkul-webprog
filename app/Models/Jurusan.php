<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    //
    protected $table = 'jurusan';
    protected $guarded = [];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
