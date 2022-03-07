<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPegawai extends Model
{
    protected $table = 'data_pegawais'; //sesuaikan nama table
    protected $guarded = [''];

    use HasFactory;

    public function pegawaiDuk()
    {
        return $this->hasOne(DataDuk::class);
    }
}
