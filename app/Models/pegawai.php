<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawai";

    public function pendapatan()
    {
     return $this->hasOne(pendapatan::class, 'IDPegawai', 'pegawai_id');
    }
}
