<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendapatan extends Model
{
    protected $table = 'pendapatan';

    public function pegawai()

    {
     return $this->belongsTo(pegawai::class, 'IDPegawai','pegawai_id');

    }

}
